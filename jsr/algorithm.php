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
$pidArray = getPids();
$tutorInfo = getTutorInfo();
$preferences = initializeTupleArray();
$days = array(sun,mon,tue,wed,thu,fri,sat);
$hours = array(h00,h01,h02,h03,h04,h05,h06,h07,h08,h09,h10,h11,h12,h13,h14,h15,h16,h17,h18,h19,h20,h21,h22,h23);
$hoursWorking = initializeHoursWorking();
$openHours = getOpenHours();

// returns assoc array with PID as the key and array containing Fname, Lname, and type as value
function getTutorInfo(){
  global $con;
  global $pidArray;
  $arr = array();
  foreach($pidArray as $thePid){
    $sql = ("select Fname,Lname,type 
      from employeeInfo
      where PID = '$thePid'");
    $result = mysqli_query($con,$sql);
    $numRows = mysqli_num_rows($result);
    for($i = 0; $i<$numRows; $i++){
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $arr[$thePid]=$row; // adds PID to array
    }
  }
  /*
  echo"tutor info";
  echo"<pre>";
  var_dump($arr);
  echo"</pre>";
   */
  return $arr;
}

// array where key is PID and value is number of hours currently scheduled
function initializeHoursWorking(){
  global $pidArray;
  $arr = array();
  foreach($pidArray as $thePid){
    $arr[$thePid] = 0; // initialized to 0
  }
  return $arr;
}

// returns array of hours that are available to be scheduled
function getOpenHours(){
  global $con;
  global $days;
  global $hours;
  $arr = array();
  foreach($days as $theDay){
    $sql = ("select * from openHours
      where (openHours.day = '$theDay')");
    $result = mysqli_query($con,$sql);
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
function loadPref(){ // returns preferences tuple array
  global $con;
  global $days;
  global $hours;
  global $preferences;
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
}

function getPids(){
  global $con;
  $arr = array();
  $sql = ("select PID from employeeInfo");
  $result = mysqli_query($con,$sql);
  $numRows = mysqli_num_rows($result);
  for($i = 0; $i<$numRows; $i++){
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    $arr[]=$row["PID"]; // adds PID to array
  }
  return $arr;
}

function removeTuple(&$theArray, $theDay, $theHour, $thePid){
  unset($theArray[$theDay][$theHour]["tuples"][$thePid]);
}

function addTuple(&$theArray, $theDay, $theHour, $thePid, $thePref, $theType){
  $temp= new tuple;
  $temp->setPid($thePid);
  $temp->setTheType($theType);
  $temp->setPref($thePref);
  $theArray[$theDay][$theHour]["tuples"][$thePid]=$temp;
}

function numTuples(&$theArray, $theDay, $theHour){
  return sizeof($theArray[$theDay][$theHour]["tuples"]);
}

// loops through preferences array starting with highest preferences, and adds
// tuples to the given schedule until at least two people are working every
// hour.
function ensureTwoScheduled(&$theSchedule){
  /*
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  for($i = 3; $i >= 1; $i--){
    foreach($days as $theDay){
      foreach($hours as $theHour){
        if($openHours[$theDay][$theHour] == 1){
          foreach($pidArray as $thePid){
            $temp = new tuple;
            $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
            if($temp != NULL){
              $thePref = $temp->getPref();
              $theType = $temp->getTheType();
              if($thePref == $i){
                if(numTuples($theSchedule, $theDay, $theHour) < 2){
                  addTuple($theSchedule, $theDay, $theHour, $thePid, $thePref, $theType);
                }
              }
            }
          }
        }
      }
    }
  }
   */
  scheduleAllHours($theSchedule,2,"grad",3,1);
}

function scheduleAllHours(&$theSchedule,$numToSchedule,$theType,$maxPref,$minPref){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  for($currentPref = $maxPref; $currentPref >= $minPref; $currentPref--){
    foreach($days as $theDay){
      foreach($hours as $theHour){
        // make sure writing center is open at this hour
        if($openHours[$theDay][$theHour] == 1){
          foreach($pidArray as $thePid){
            if($tutorInfo[$thePid]["type"]==$theType){
              $temp = new tuple;
              $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
              if($temp != NULL){
                $thePref = $temp->getPref();
                $theType = $temp->getTheType();
                if($thePref == $currentPref){
                  if(numTuples($theSchedule, $theDay, $theHour) < $numToSchedule){
                    addTuple($theSchedule,$theDay,$theHour,$thePid,$thePref,$theType);
                    removeTuple($preferences,$theDay,$theHour,$thePid);
                    $hoursWorking[$thePid] = $hoursWorking[$thePid] + 1;
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}

function ensureGradGe14(&$theSchedule){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  foreach($pidArray as $thePid){
    // intially skip over if tutor does not need to be scheduled
    if(($tutorInfo[$thePid]["type"] == "grad") and (intval($hoursWorking[$thePid]) < 14)){
      foreach($days as $theDay){
        foreach($hours as $theHour){
          if(($openHours[$theDay][$theHour] == 1) and (intval($hoursWorking[$thePid]) < 14)){
            $temp = new tuple;
            $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
            if($temp != NULL){

            }


          }
        }
      }
    }
  }
}

// 1. SASB covered for all open hours
//TODO min and max matrix for hours working
loadPref();
ensureTwoScheduled($sasbSchedule);

// 2. Grad students must work at least 14 hours (at most handled later)
//ensureGradGe14();


/*
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
 */
echo"sasbSchedule\n";
echo"<pre>";
var_dump($sasbSchedule);
echo"</pre>";
?>
