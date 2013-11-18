<?php
// Create connection
include "./common/database_validator.php";
$con = getDatabaseConnection();

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//TODO
function initializeDays($theDay){
  return $arr;
}

// testing, delete
$tuples=array();
$test = new tuple;
$test->setPid("test");
$test->setTheType("test2");
$test->setPref("test3");
$tuples[]=$test;

$preferences = array(
  "sun" => array(
    "h00" => array(
      "tuples" => array(
      )
    ),
    "h01" => array(
    ),
    "h02" => array(
    ),
    "h03" => array(
    ),
    "h04" => array(
    ),
    "h05" => array(
    ),
    "h06" => array(
    ),
    "h07" => array(
    ),
    "h08" => array(
    ),
    "h09" => array(
    ),
    "h10" => array(
    ),
    "h11" => array(
    ),
    "h12" => array(
    ),
    "h12" => array(
    ),
    "h13" => array(
    ),
    "h14" => array(
    ),
    "h15" => array(
    ),
    "h16" => array(
    ),
    "h17" => array(
    ),
    "h18" => array(
    ),
    "h19" => array(
    ),
    "h20" => array(
    ),
    "h21" => array(
    ),
    "h22" => array(
    ),
    "h23" => array(
    )
  )
);

$preferences["sun"]["h00"]["tuples"] = $tuples;
var_dump($preferences["sun"]["h00"]["tuples"]);

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

$sql = ("select * from hoursByDay"); // Get result of query
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

// populate array of tuples
for($i = 0; $i < $numRows; $i++){
  // get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    // printf("%s, ", $value);
  }
  echo("<br>");
}
?>
