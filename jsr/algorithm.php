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
$hoursWorkingPerDay = initializeHoursWorkingPerDay();
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

// array where key is PID and value is assoc array of days whose values are
// number of hours working that day
function initializeHoursWorkingPerDay(){
  global $pidArray;
  global $days;
  $arr = array();
  foreach($pidArray as $thePid){
    $arr[$thePid]=array();
    foreach($days as $theDay){
      $arr[$thePid][$theDay]=0;
    }
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
  global $hoursWorkingPerDay;
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
                    $hoursWorkingPerDay[$thePid][$theDay] = $hoursWorkingPerDay[$thePid][$theDay] + 1 ;
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
  global $hoursWorking;
  global $hoursWorkingPerDay;
  foreach($pidArray as $thePid){
    // intially skip over if tutor does not need to be scheduled
    if(($tutorInfo[$thePid]["type"] == "grad") and (intval($hoursWorking[$thePid]) < 14)){
      foreach($days as $theDay){
        foreach($hours as $theHour){
          // as long as this day is open and the grad is not at his max
          if(($openHours[$theDay][$theHour] == 1) and ($hoursWorking[$thePid] < 14)){
            $temp = new tuple;
            $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
            if($temp != NULL){
              $thePref = $temp->getPref();
              $theType = $temp->getTheType();
              addTuple($theSchedule,$theDay,$theHour,$thePid,$thePref,$theType);
              removeTuple($preferences,$theDay,$theHour,$thePid);
              $hoursWorking[$thePid] = $hoursWorking[$thePid] + 1;
              $hoursWorkingPerDay[$thePid][$theDay] = $hoursWorkingPerDay[$thePid][$theDay] + 1 ;
            }
          }
        }
      }
    }
  }
}

function ensureUgradLe10(&$theSchedule){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;
  foreach($pidArray as $thePid){
    // intially skip over if tutor does not need to be scheduled
    if(($tutorInfo[$thePid]["type"] == "ugrad") and (intval($hoursWorking[$thePid]) < 10)){
      foreach($days as $theDay){
        foreach($hours as $theHour){
          // as long as this day is open and the ugrad is between 6 and 10 hrs
          if(($openHours[$theDay][$theHour] == 1) and ($hoursWorking[$thePid] < 10)){
            $temp = new tuple;
            $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
            if($temp != NULL){
              $thePref = $temp->getPref();
              $theType = $temp->getTheType();
              addTuple($theSchedule,$theDay,$theHour,$thePid,$thePref,$theType);
              removeTuple($preferences,$theDay,$theHour,$thePid);
              $hoursWorking[$thePid] = $hoursWorking[$thePid] + 1;
              $hoursWorkingPerDay[$thePid][$theDay] = $hoursWorkingPerDay[$thePid][$theDay] + 1 ;
            }
          }
        }
      }
    }
  }
}

// Removes tuples from given schedule if a tutor is working more than five 
// hours in a shift. Places tuple back in preferences array since that tutor 
// is now available to work. Removes in order of preference.
function ensureLeFiveHoursPerDay(&$theSchedule){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;
  foreach($pidArray as $thePid){
    foreach($days as $theDay){
      while($hoursWorkingPerDay[$thePid][$theDay] > 5){
        $low= findLowestTuple($theSchedule,$theDay,$thePid);
        // add back to preferences since tutor can now work this hour
        addTuple($preferences,$theDay,$low["hour"],$thePid,$low["pref"],$low["type"]);
        removeTuple($theSchedule,$theDay,$low["hour"],$thePid);
        $hoursWorking[$thePid]= $hoursWorking[$thePid] - 1;
        $hoursWorkingPerDay[$thePid][$theDay] = $hoursWorkingPerDay[$thePid][$theDay] - 1 ;
      }
    }
  }
}

// given a schedule, day, and PID returns hour and pref of that person's least
// preferred tuple. (Can easily be modified to return something other than
// just the hour).
function findLowestTuple($theSchedule, $theDay, $thePid){
  global $hours;
  $lowest = 4;
  $low = array();
  //$temp = $preferences[$theDay][$theHour]["tuples"][$thePid]
  foreach($hours as $theHour){
    $currentTuple = $theSchedule[$theDay][$theHour]["tuples"][$thePid];
    if($currentTuple != NULL){
      $currentPref = $currentTuple->getPref();
      if($currentPref < $lowest){
        $lowest = $currentPref;
        $low["pref"]=$currentPref;
        $low["hour"]=$theHour;
        $low["type"]=$currentTuple->getTheType();
      }
    }
  }
  return $low;
}

function ensureGradDaysOff(&$theSchedule){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;
  foreach($pidArray as $thePid){
    if($tutorInfo[$thePid]["type"] == "grad"){
      $currentDay = "";
      $currentDayNum = -1;
      $nextDay = "";
      $nextDayNum = -1;
      foreach($days as $firstDay){
        // going to use hoursWorkingByDay that's already been created
        if($hoursWorkingPerDay[$thePid][$firstDay] > 0){ // tutor is working
          $currentDay = $firstDay;
          $currentDayNum = dayToNum($currentDay);
          // find the next day in the week that they work
          foreach($days as $secondDay){
            if($hoursWorkingPerDay[$thePid][$secondDay] > 0){
              $nextDay = $secondDay;
              $nextDayNum = dayToNum($nextDay);
              if(($nextDayNum - $currentDayNum) > 2){
                // TODO more than two days off in a row, start rescheduling 
                // people. How do we want to handle the rescheduling?
              }
              else{
                // NOOP, at most two days off, no rescheduling necessary
              }
            }
          }
        }
      }
    }
  }
}

// returns numeric value of day, i.e. "sun" = 0, "mon" = 1, ... , "sat" = 6
function dayToNum($theDay){
  if($theDay == "sun")
    return 0;
  else if ($theDay == "mon")
    return 1;
  else if ($theDay == "tue")
    return 2;
  if($theDay == "wed")
    return 3;
  else if ($theDay == "thu")
    return 4;
  else if ($theDay == "fri")
    return 5;
  else if ($theDay == "sat")
    return 6;
  else // error
    return -1;
}

// 1. SASB covered for all open hours
loadPref();
ensureTwoScheduled($sasbSchedule);

// 2. Grad students must work at least 14 hours (at most handled later)
ensureGradGe14($sasbSchedule);

// 3. Ugrads work at most 10 hours, between 6 and 10
ensureUgradLe10($sasbSchedule);

// 4. No more than 5 hours in a day
ensureLeFiveHoursPerDay($sasbSchedule);
// TODO once we take tutors (grads mostly) we need to put them back somewhere

// 5. No more than 4 in a row
// TODO doesn't this seem redundant? Why not just leave it at no more than
// 5 per day?

// 6. Grads get no more than 2 days off in a row
//ensureGradDaysOff($sasbSchedule);

// 7. Move people to GL
// TODO make array of min and max allowed tutors for each hour

// 8. Double check and make sure grads have 14 hours

// 9. Staff meetings

/*
$arr = findLowestTuple($sasbSchedule,"mon","720360006");
echo"<pre>";
var_dump($arr);
echo"</pre>";
 */

/*
echo"hoursPerDay\n";
echo"<pre>";
var_dump($hoursWorkingPerDay);
echo"</pre>";
 */

// prints everybody's PID, name, and current hours scheduled
echo"<pre>";
foreach($pidArray as $thePid){
  $fname = $tutorInfo[$thePid]["Fname"];
  $lname = $tutorInfo[$thePid]["Lname"];
  $type = $tutorInfo[$thePid]["type"];
  echo"$thePid, $fname, $lname, $type, $hoursWorking[$thePid]\n";
}
echo"<pre>";
?>
