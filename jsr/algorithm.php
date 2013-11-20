<?php
// Create connection
include "./common/database_validator.php";
$con = getDatabaseConnection();

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// global variables
$sasbSchedule = initializeTupleArray();
$pidArray = getPids($con);
$preferences = initializeTupleArray();
$days = array(sun,mon,tue,wed,thu,fri,sat);
$hours = array(h00,h01,h02,h03,h04,h05,h06,h07,h08,h09,h10,h11,h12,h13,h14,h15,h16,h17,h18,h19,h20,h21,h22,h23);
$availablePrefs = array(1,2,3);
$hoursWorking = array();
$openHours = getOpenHours($con);

// array where key is PID and value is number of hours currently scheduled
// TODO factor out into function
foreach($pidArray as $thePid){
  $hoursWorking[$thePid] = 0; // initialized to 0
}

function getOpenHours($theCon){
  global $days;
  global $hours;
  $arr = array();
  foreach($days as $theDay){
    $sql = ("select * from openHours
      where (openHours.day = '$theDay')");
    $result = mysqli_query($theCon,$sql);
    if($result != NULL){
      $row = mysqli_fetch_array($result, MYSQLI_BOTH); 
      foreach($hours as $theHour){
        $arr[$theDay][$theHour]=$row[$theHour];
      }
    }
  }
  return $arr;
}


// given a day of the week, initializes its preference array
function initializeDay($theDay){
  // array that's name is the day of the week
  ${$theDay} = initializeHours();
  return ${$theDay};
}

function initializeHours(){
  $day = array(
    "h00" => array(
      "tuples" => array()
    ),
    "h01" => array(
      "tuples" => array()
    ),
    "h02" => array(
      "tuples" => array()
    ),
    "h03" => array(
      "tuples" => array()
    ),
    "h04" => array(
      "tuples" => array()
    ),
    "h05" => array(
      "tuples" => array()
    ),
    "h06" => array(
      "tuples" => array()
    ),
    "h07" => array(
      "tuples" => array()
    ),
    "h08" => array(
      "tuples" => array()
    ),
    "h09" => array(
      "tuples" => array()
    ),
    "h10" => array(
      "tuples" => array()
    ),
    "h11" => array(
      "tuples" => array()
    ),
    "h12" => array(
      "tuples" => array()
    ),
    "h13" => array(
      "tuples" => array()
    ),
    "h14" => array(
      "tuples" => array()
    ),
    "h15" => array(
      "tuples" => array()
    ),
    "h16" => array(
      "tuples" => array()
    ),
    "h17" => array(
      "tuples" => array()
    ),
    "h18" => array(
      "tuples" => array()
    ),
    "h19" => array(
      "tuples" => array()
    ),
    "h20" => array(
      "tuples" => array()
    ),
    "h21" => array(
      "tuples" => array()
    ),
    "h22" => array(
      "tuples" => array()
    ),
    "h23" => array(
      "tuples" => array()
    )
  );
  return $day; // array of hours
}

function initializeTupleArray(){
  $arr = array(
    "sun" => initializeDay("sun"),
    "mon" => initializeDay("mon"),
    "tue" => initializeDay("tue"),
    "wed" => initializeDay("wed"),
    "thu" => initializeDay("thu"),
    "fri" => initializeDay("fri"),
    "sat" => initializeDay("sat")
  );
  return $arr;
}

// tuple for an individual's preference on a given day and hour
class tuple {
  public $pid;
  public $type; // ugrad or grad
  public $pref; // preference number

  public function setPid($newPid){
    $this->pid=$newPid;
  }
  public function getPid(){
    return $this->pid;
  }
  public function setTheType($newType){
    $this->type=$newType;
  }
  public function getTheType(){
    return $this->type;
  }
  public function setPref($newPref){
    $this->pref=$newPref;
  }
  public function getPref(){
    return $this->pref;
  }
}

/*
$sql =("select hoursByDay.*, employeeInfo.type from hoursByDay, employeeInfo where hoursByDay.PID = employeeInfo.PID");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);
*/

// populate array of tuples via a wildly ineffecient querying scheme
// TODO factor out into function, keep in mind global vars
foreach($days as $theDay){
  foreach($hours as $theHour){
    $sql = ("select hoursByDay.PID,employeeInfo.type,hoursByDay.$theHour
      from hoursByDay, employeeInfo
      where (hoursByDay.day = '$theDay' and $theHour > 0 and 
      hoursByDay.PID = employeeInfo.PID)");

    $result = mysqli_query($con,$sql);
    $numRows = mysqli_num_rows($result);

    for($i = 0; $i < $numRows; $i++){ // for every row
      // get the array from result indexed by both numbers and variable name
      $row = mysqli_fetch_array($result, MYSQLI_BOTH); 
      //var_dump($row); 
      $temp= new tuple;
      $temp->setPid($row["PID"]);
      $temp->setTheType($row["type"]);
      $temp->setPref("$row[$theHour]");
      // associative array where an employee's PID points to his/her tuple
      $preferences[$theDay][$theHour]["tuples"][$row["PID"]]=$temp;
    }
  }
}

function getPids($theCon){
  $arr = array();
  $sql = ("select PID from employeeInfo");
  $result = mysqli_query($theCon,$sql);
  $numRows = mysqli_num_rows($result);
  for($i = 0; $i<$numRows; $i++){
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $arr[]=$row["PID"]; // adds PID to array
  }
  return $arr;
}

// pass $theArray by reference via '&' character
function removeTuple(&$theArray, $theDay, $theHour, $thePid){
 unset($theArray[$theDay][$theHour]["tuples"][$thePid]);
}

function addTuple(&$theArray, $theDay, $theHour, $thePid, $thePref, $theType){
  global $hoursWorking;
  $temp= new tuple;
  $temp->setPid($thePid);
  $temp->setTheType($theType);
  $temp->setPref($thePref);

  $theArray[$theDay][$theHour]["tuples"][$thePid]=$temp;
  $hoursWorking[$thePid] = $hoursWorking[$thePid] + 1;
}

function numTuples(&$theArray, $theDay, $theHour){
  return sizeof($theArray[$theDay][$theHour]["tuples"]);
}

// 1. SASB covered for all open hours

//TODO factor this junk out
//TODO min and max matrix for hours working
// populate sasb with grad students with 3 preference
foreach($days as $theDay){
  foreach($hours as $theHour){
    if($openHours[$theDay][$theHour] == 1){
      foreach($pidArray as $thePid){
        $temp = new tuple;
        $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
        if($temp != NULL){
          $thePref = $temp->getPref();
          $theType = $temp->getTheType();
          if($thePref == 3){
            addTuple($sasbSchedule, $theDay, $theHour, $thePid, $thePref, $theType);
          }
        }
      }
    }
  }
}

// check which hours have less than two, and add 2s as necessary
foreach($days as $theDay){
  foreach($hours as $theHour){
    if(($openHours[$theDay][$theHour] == 1) and (numTuples($sasbSchedule, $theDay, $theHour) < 2)){
      foreach($pidArray as $thePid){
        $temp = new tuple;
        $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
        if($temp != NULL){
          $thePref = $temp->getPref();
          $theType = $temp->getTheType();
          if($thePref == 2){
            addTuple($sasbSchedule, $theDay, $theHour, $thePid, $thePref, $theType);
          }
        }
      }
    }
  }
}

// same thing with 1s
foreach($days as $theDay){
  foreach($hours as $theHour){
    if(($openHours[$theDay][$theHour] == 1) and (numTuples($sasbSchedule, $theDay, $theHour) < 2)){
      foreach($pidArray as $thePid){
        $temp = new tuple;
        $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
        if($temp != NULL){
          $thePref = $temp->getPref();
          $theType = $temp->getTheType();
          if($thePref == 1){
            addTuple($sasbSchedule, $theDay, $theHour, $thePid, $thePref, $theType);
          }
        }
      }
    }
  }
}
echo"sasbSchedule\n";
var_dump($sasbSchedule);
?>
