<?php
// Create connection
include "./../common/session_validator.php";

$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".mysqli_real_escape_string($con, $_SESSION['pid'])."'"));
	
if($employee_info[3] != 'admin') {
	header('HTTP/1.1 401 Unauthorized');
	exit();
}


$con = getDatabaseConnection();

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// global variables
$sasbSchedule = initializeTupleArray();
$glSchedule = initializeTupleArray();
$pidArray = getPids();
$tutorInfo = getTutorInfo();
$preferences = initializeTupleArray();
$days = array(sun,mon,tue,wed,thu,fri,sat);
$hours = array(h00,h01,h02,h03,h04,h05,h06,h07,h08,h09,h10,h11,h12,h13,h14,h15,h16,h17,h18,h19,h20,h21,h22,h23);
$hoursWorking = initializeHoursWorking();
$hoursWorkingPerDay = initializeHoursWorkingPerDay();
$openHours = getOpenHours();
$GRAD_HOURS = 14;
$UGRAD_HOURS = 5;

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

function initializeDayByHours($theDay){
  ${$theDay} = initializeHoursInDay();
  return ${$theDay};
}

function initializeHoursInDay(){
  $day = array(
    "h00" => 0,
    "h01" => 0,
    "h02" => 0,
    "h03" => 0,
    "h04" => 0,
    "h05" => 0,
    "h06" => 0,
    "h07" => 0,
    "h08" => 0,
    "h09" => 0,
    "h10" => 0,
    "h11" => 0,
    "h12" => 0,
    "h13" => 0,
    "h14" => 0,
    "h15" => 0,
    "h16" => 0,
    "h17" => 0,
    "h18" => 0,
    "h19" => 0,
    "h20" => 0,
    "h21" => 0,
    "h22" => 0,
    "h23" => 0
  );
  return $day;
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

function initializeNumWorking(){
  $arr = array(
    "sun" => initializeDayByHours("sun"),
    "mon" => initializeDayByHours("mon"),
    "tue" => initializeDayByHours("tue"),
    "wed" => initializeDayByHours("wed"),
    "thu" => initializeDayByHours("thu"),
    "fri" => initializeDayByHours("fri"),
    "sat" => initializeDayByHours("sat"),
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

// returns number of tuples in an array given day and hour
function numTuples(&$theArray, $theDay, $theHour){
  return sizeof($theArray[$theDay][$theHour]["tuples"]);
}

function getNumWorkingArr(&$theSchedule){
  global $days;
  global $hours;
  $toReturn = initializeNumWorking(); 
  foreach($days as $theDay){
    foreach($hours as $theHour){
      $toReturn[$theDay][$theHour] = numTuples($theSchedule,$theDay,$theHour);
    }
  }
  return $toReturn;
}

// loops through preferences array starting with highest preferences, and adds
// tuples to the given schedule until at least three people are working every
// hour.
function ensureThreeScheduled(&$theSchedule){
  scheduleAllHours($theSchedule,3,"grad",3,1);
}

// Schedules numToSchedule tutors of type theType every hour who have
// preference <= maxPref and >= minPref
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

// Schedules ALL of a tutor of type=theType 3 preferences as long as they are
// scheduled for less than their max hours, 14 for grads, 10 for ugrads. If 
// not at their max, schedule all 2 preferences. Then, same for 1s.
function batchScheduling(&$theSchedule, $theType){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;
  global $GRAD_HOURS;
  global $UGRAD_HOURS;

  foreach($pidArray as $thePid){
    if($tutorInfo[$thePid]["type"] == "$theType"){
      if($theType == "grad")
        $minHours = $GRAD_HOURS;
      elseif($theType == "ugrad")
        $minHours = $UGRAD_HOURS;
      if($hoursWorking[$thePid] < $minHours){
        // schedule all threes
        scheduleByPref($theSchedule, 3, $thePid);

        if($hoursWorking[$thePid] < $minHours){
          // schedule all twos
          scheduleByPref($theSchedule, 2, $thePid);

          if($hoursWorking[$thePid] < $minHours){
            // schedule all ones
            scheduleByPref($theSchedule, 1, $thePid);
          }
        }
      }
    }
  }
}

function scheduleByPref(&$theSchedule, $requiredPref, $thePid){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;

  foreach($days as $theDay){
    foreach($hours as $theHour){
      // make sure writing center is open at this hour
      if($openHours[$theDay][$theHour] == 1){
        $temp = new tuple;
        $temp = $preferences[$theDay][$theHour]["tuples"][$thePid];
        if($temp != NULL){
          $thePref = $temp->getPref();
          $theType = $temp->getTheType();
          if($thePref == $requiredPref){
            addTuple($theSchedule,$theDay,$theHour,$thePid,$thePref,$theType);
            removeTuple($preferences,$theDay,$theHour,$thePid);
            $hoursWorking[$thePid] = $hoursWorking[$thePid] + 1;
            $hoursWorkingPerDay[$thePid][$theDay] = $hoursWorkingPerDay[$thePid][$theDay] + 1;
          }
        }
      }
    }
  }
}


// This heavily favors Sunday and Monday scheduling, need to spread out
// scheduling across the whole week. Going to re-do this a little differently,
// but leaving this in case it comes in handy later. See batchScheduling.
function ensureGradGe14(&$theSchedule){
  global $days;
  global $hours;
  global $openHours;
  global $pidArray;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;

  // keeps scheduling from favoring Sundays and Mondays early hours
  // doesn't work, still favors first randomly selected day
  shuffle($days);
  shuffle($hours);

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

// Same as above, this should be obsolete thanks to batchSchedule
/*
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
 */

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

// create array size 7 that has a 1 if tutor is working for corresponging
// day, and a 0 if the tutor is not.
function getDaysWorkingArr(){
  global $pidArray;
  global $tutorInfo;
  global $hoursWorkingPerDay;
  global $days;
  // assoc array whose key is PID and value is an array of size 7
  $toReturn = array();
  foreach($pidArray as $thePid){
    if($tutorInfo[$thePid]["type"] == "grad"){
      // initialize every day to 0
      $arr = array();
      $toReturn[$thePid] = $arr;

      // update daysWorkingArr
      foreach($days as $theDay){
        // going to use hoursWorkingByDay that's already been created
        if($hoursWorkingPerDay[$thePid][$theDay] > 0){ // tutor is working
          $toReturn[$thePid][] = 1;
        }
        else // tutor is not working
          $toReturn[$thePid][] = 0;
      }
    }
  }
  return $toReturn;
}

// given a tutor's pid and the day, this function finds a tutor's highest
// preference tuple for this day, and modifies the given hour, day, preference,
// and tuple for use in later adding this tuple to the schedule. Passes the 
// last variables by reference rather than returning an array containing all
// of them and then updating the variables in the other function
function gradDaysOffHelper($thePid, $theDay, &$retHour, &$retDay, &$retPref, &$retTuple, &$retBool){
  global $hours;
  global $preferences;

  foreach($hours as $theHour){
    $currentTuple =  $preferences[$theDay][$theHour]["tuples"][$thePid];
    if($tuple != NULL){ // if tutor can work this day
      $currentPref = $currentTuple->getPref();
      if($currentPref > $maxPref){
        $retBool = true; // at least one tuple to schedule is found
        $retHour = $theHour;
        $retDay = $dayToSchedule;
        $retPref = $currentPref;
        $retTuple = $currentTuple;
      }
    }
  }
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
  $daysWorkingArr = getDaysWorkingArr();
  
  // now that the array has been built, re-schedule tutors so that they have
  // no more than 2 days off
  foreach($pidArray as $thePid){
    if($tutorInfo[$thePid]["type"] == "grad"){
      //TODO handle weekend wraparound cases

      // If there are more than two days off from Sunday to Friday:
      for($i=0; $i<4; $i++){ // stops checking at Wednesday since not handling wraparound
        if($daysWorkingArr[$thePid][$i] == 0){ // not working that day
          // check next two days
          if(($daysWorkingArr[$thePid][$i+1] == 0) && ($daysWorkingArr[$thePid][$i+2] == 0)){

            // prints out span and name of grad who isn't scheduled 2 days in a row
            /*
            $firstDay = numToDay($i);
            $lastDay = numToDay($i+2);
            $fname = $tutorInfo[$thePid]["Fname"];
            $lname = $tutorInfo[$thePid]["Lname"];
            echo"$fname, $lname, $firstDay, $lastDay <br>";
             */

            // try to schedule 3rd day, if unable, schedule 2nd, etc.
            $dayToSchedule = numToDay($i+2); //selects 3rd day
            $found = false; // true if tuple to schedule is found

            // Find hour with highest preference (not technically necessary, just a nice thing to do)
            $maxHour = "";
            $maxDay = "";
            $maxPref = 0; 
            $maxTuple =  new tuple; // tuple with highest preference

            gradDaysOffHelper($thePid, $dayToSchedule, $maxHour, $maxDay, $maxPref, $maxTuple, $found);
            
            if(!$found){ // no tuple on 3rd day, try to schedule 2nd
              $dayToSchedule = numToDay($i+1); //selects 2nd day
              gradDaysOffHelper($thePid, $dayToSchedule, $maxHour, $maxDay, $maxPref, $maxTuple, $found);
            }
            if(!$found){ // no tuple on 2nd day, try to schedule 1st
              $dayToSchedule = numToDay($i); //selects 1st day
              gradDaysOffHelper($thePid, $dayToSchedule, $maxHour, $maxDay, $maxPref, $maxTuple, $found);
            }
            // if there's no available tuple to be scheduled, then set $maxTuple
            // to NULL and just don't worry about it. (extremely unlikely)
            if(!$found){ 
              $maxTuple = NULL;
            }

            // at this point we have a tuple, $maxTuple, to schedule for one
            // of these days to keep grads from being off for more than 2 days
            // in a row. Just going to schedule 1 hour for this day, rather
            // than worrying about scheduling a cluster of hours.
            if($maxTuple != NULL){
              $thePref = $maxTuple->getPref();
              $theType = $maxTuple->getTheType();
              addTuple($theSchedule,$maxDay,$maxHour,$thePid,$thePref,$theType);
              removeTuple($preferences,$maxDay,$maxHour,$thePid);
              $hoursWorking[$thePid] = $hoursWorking[$thePid] + 1;
              $hoursWorkingPerDay[$thePid][$theDay] = $hoursWorkingPerDay[$thePid][$theDay] + 1 ;
            }
          }
        }
      }
    }
  }
}

// returns day given numeric value, i.e. 0 = "sun", 1 = "mon", ..., 6 = "sat"
function numToDay($theNum){
  if($theNum == 0)
    return "sun";
  elseif($theNum == 1)
    return "mon";
  elseif($theNum == 2)
    return "tue";
  elseif($theNum == 3)
    return "wed";
  elseif($theNum == 4)
    return "thu";
  elseif($theNum == 5)
    return "fri";
  elseif($theNum == 6)
    return "sat";
}

// returns numeric value of day, i.e. "sun" = 0, "mon" = 1, ... , "sat" = 6
function dayToNum($theDay){
  if($theDay == "sun")
    return 0;
  else if ($theDay == "mon")
    return 1;
  else if ($theDay == "tue")
    return 2;
  else if($theDay == "wed")
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

// Removes all previously existing rows from actSchedule, and re-populates
// them with data from sasbSchedule and glSchedule.
function populateActSchedule(){
  global $con;
  global $pidArray;
  global $days;
  global $hours;
  global $openHours;
  global $preferences;
  global $tutorInfo;
  global $hoursWorking;
  global $hoursWorkingPerDay;
  global $sasbSchedule;
  global $glSchedule;

  // delete all previously existing rows
  $sql="delete from actSchedule";
  if(mysqli_query($con,$sql)){
    //echo "Deleted all rows from actSchedule table <br>";
  }

  // initialize rows for every tutor
  foreach($pidArray as $thePid){
    // only initialize for grad and ugrad tutors
    if(($tutorInfo[$thePid]["type"] == "grad") or ($tutorInfo[$thePid]["type"] == "ugrad")){
      foreach($days as $theDay){
        $sql="insert into actSchedule (PID,day,h00,h01,h02,h03,h04,h05,h06,h07,h08,h09,h10,h11,h12,h13,h14,h15,h16,h17,h18,h19,h20,h21,h22,h23) 
          values('$thePid','$theDay',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
        if(mysqli_query($con,$sql)){
          //echo"initialized row";
        }
      }
    }
  }

  // update rows based on sasbSchedule
  foreach($days as $theDay){
    foreach($hours as $theHour){
      // only bother scheduling if the writing centers are open
      if($openHours[$theDay][$theHour] == 1){
        foreach($pidArray as $thePid){
          // only look at pids who are ugrad or grad tutors, not admins
          if(($tutorInfo[$thePid]["type"] == "grad") or ($tutorInfo[$thePid]["type"] == "ugrad")){
            $tuple=$sasbSchedule[$theDay][$theHour]["tuples"][$thePid];
            if($tuple != NULL){ // if tuple exists, tutor is scheduled this hour
              $sql="update actSchedule set $theHour=1
                where PID='$thePid' and day='$theDay'";
              if(mysqli_query($con,$sql)){
                //echo"updated row";
              }
              else{
                echo "Error: " . mysqli_error($con) . "<br>";
              }
            }
          }
        }
      }
    }
  }

  // TODO factor these out into functions
  foreach($days as $theDay){
    foreach($hours as $theHour){
      // only bother scheduling if the writing centers are open
      if($openHours[$theDay][$theHour] == 1){
        foreach($pidArray as $thePid){
          // only look at pids who are ugrad or grad tutors, not admins
          if(($tutorInfo[$thePid]["type"] == "grad") or ($tutorInfo[$thePid]["type"] == "ugrad")){
            $tuple=$glSchedule[$theDay][$theHour]["tuples"][$thePid];
            if($tuple != NULL){ // if tuple exists, tutor is scheduled this hour
              $sql="update actSchedule set $theHour=2
                where PID='$thePid' and day='$theDay'";
              if(mysqli_query($con,$sql)){
                //echo"updated row";
              }
              else{
                echo "Error: " . mysqli_error($con) . "<br>";
              }
            }
          }
        }
      }
    }
  }

  /*
  echo"<pre>";
  echo"gl<br>";
  var_dump($glSchedule);
  echo"</pre>";

  echo"<pre>";
  echo"sasb<br>";
  var_dump($sasbSchedule);
  echo"</pre>";
   */
}

// returns assoc array size 2 with "day" and "hour" such that they have
// the greatest number of tutors working when that individual tutor is also scheduled
function getTutorMaxDay(&$theSchedule, $theNumWorkingArr, $thePid){
  global $days;
  global $hours;

  $arr = array(
    "day" => "",
    "hour" => ""
  );

  $maxNumWorking = 0;
  foreach($days as $theDay){
    foreach($hours as $theHour){
      $currentNumWorking = $theNumWorkingArr[$theDay][$theHour];
      $contains = containsTutor($theSchedule, $theDay, $theHour, $thePid);
      if(($currentNumWorking > $maxNumWorking) && $contains){
        $arr["day"] = $theDay;
        $arr["hour"] = $theHour;
        $maxNumWorking = $currentNumWorking;
      }
    }
  }
  /*
  echo"<pre>";
  var_dump($arr);
  echo"</pre>";
   */
  return $arr;
}

function containsTutor(&$theSchedule, $theDay, $theHour,$thePid){
  $tuples = $theSchedule[$theDay][$theHour]["tuples"];
  foreach($tuples as $theTuple){
    $currentPid = $theTuple->getPid();
    if($currentPid == $thePid){ 
      return true;
    }
  }
  return false;
}

function ensureMaxHours(&$theSchedule){
  global $days, $hours, $pidArray, $tutorInfo, $GRAD_HOURS, $UGRAD_HOURS,
    $hoursWorking;

  $numWorkingArr = array();
  $numWorkingArr = getNumWorkingArr($theSchedule);

  foreach($pidArray as $thePid){
    $theType = $tutorInfo[$thePid]["type"];
    if($theType == "grad" || $theType == "ugrad"){
      if($theType == "grad")
        $maxHours = $GRAD_HOURS;
      elseif($theType == "ugrad")
        $maxHours = $UGRAD_HOURS;
      $numWorking = $hoursWorking[$thePid];
      while($numWorking > $maxHours){
        //unschedule one hour
        $maxArr= getTutorMaxDay($theSchedule,$numWorkingArr,$thePid);
        $maxDay = $maxArr["day"];
        $maxHour = $maxArr["hour"];

        $currentTuple = $theSchedule[$maxDay][$maxHour]["tuples"][$thePid];
        echo"<pre>";
       // var_dump($currentTuple);
        echo"</pre>";
        $thePref = $currentTuple->getPref();

        addTuple($preferences,$maxDay,$maxHour,$thePid,$thePref,$theType);
        removeTuple($theSchedule,$maxDay,$maxHour,$thePid);
        $hoursWorking[$thePid]= $hoursWorking[$thePid] - 1;
        $hoursWorkingPerDay[$thePid][$maxDay] = $hoursWorkingPerDay[$thePid][$maxDay] - 1 ;
        $numWorking = $hoursWorking[$thePid];
      }
    }
  }
}

function moveToGl(&$theSchedule){
  global $days, $hours, $glSchedule; 

  foreach($days as $theDay){
    foreach($hours as $theHour){
      $numWorking = numTuples($theSchedule, $theDay, $theHour);
      if($numWorking >= 4){
        // move two to GL, one has to be a grad
        $tuples = $theSchedule[$theDay][$theHour]["tuples"];
        $twoScheduled = false; // quits scheduling once two are found
        foreach($tuples as $theTuple){
          if(!$twoScheduled){
            $currentType = $theTuple->getTheType();
            if($currentType == "grad"){
              $thePref = $theTuple->getPref();
              $thePid = $theTuple->getPid();
              $theType = $theTuple->getTheType();
              // schedule this person and set gradScheduled to true
              addTuple($glSchedule,$theDay,$theHour,$thePid,$thePref,$theType);
              removeTuple($theSchedule,$theDay,$theHour,$thePid);
              //echo"first added: $theDay $theHour: $thePid $thePref $theType, ";

              $newTuples = $theSchedule[$theDay][$theHour]["tuples"];
              foreach($newTuples as $newTuple){
                if(!$twoScheduled){
                  $newPid = $newTuple->getPid();
                  $newPref = $theTuple->getPref();
                  $newType = $theTuple->getTheType();
                  //echo"second added: $newPid, $newPref, $newType<br>";
                  addTuple($glSchedule,$theDay,$theHour,$newPid,$newPref,$newType);
                  removeTuple($theSchedule,$theDay,$theHour,$newPid);
                  $twoScheduled = true;
                }
              }
            }
          }
        }
      }
    }
  }
}


// 1. SASB covered for all open hours
loadPref();
ensureThreeScheduled($sasbSchedule);

// 2. Grad students must work at least 14 hours (at most handled later)
batchScheduling($sasbSchedule,"grad");

// 3. Ugrads work at most 10 hours, between 6 and 10
batchScheduling($sasbSchedule,"ugrad");

// 4. No more than 5 hours in a day
ensureLeFiveHoursPerDay($sasbSchedule);

// 5. Grads get no more than 2 days off in a row
ensureGradDaysOff($sasbSchedule);

// 6. Ensure grads scheduled for 14 hours exactly and ugrads for 6
ensureGradGe14($sasbSchedule);
ensureMaxHours($sasbSchedule);

// 7. Move people to GL
moveToGl($sasbSchedule);

// 10. Populate actSchedule
populateActSchedule();

// prints everybody's PID, name, and current hours scheduled
/*
echo"<pre>";
foreach($pidArray as $thePid){
  $fname = $tutorInfo[$thePid]["Fname"];
  $lname = $tutorInfo[$thePid]["Lname"];
  $type = $tutorInfo[$thePid]["type"];
  echo"$thePid, $fname, $lname, $type, $hoursWorking[$thePid]\n";
}
echo"</pre>";
 */
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<!--script type="text/javascript" src="./algorithm.js"></script-->
	<meta charset="UTF-8">
	
<script>
function goBack(){
	window.location = './admin.php';
};
function logout(){
	window.location = './../common/logout.php';
};
</script>
<body>
<h1>Algorithm has finished</h1>
<button type='button' onclick='goBack()'>Back to Administrator Overview Page</button><br>
<button type='button' onclick='logout()'>Logout</button>
</body>
</html>
