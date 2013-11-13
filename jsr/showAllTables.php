<?php 
include "./../common/database_validator.php";
$con=getDatabaseConnection();

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br>";
}

// Set database
$sql="use tutorScheduler";
if (!mysqli_query($con,$sql)){
  echo "Error setting database: " . mysqli_error($con) . "<br>";
}

function printTable($theCon, $tableName){
  $sql = ("select * from $tableName"); // Get result of query
  $result = mysqli_query($theCon,$sql);
  $numRows = mysqli_num_rows($result);

  for($i = 0; $i < $numRows; $i++){
    // get the array from result indexed by numbers
    $row = mysqli_fetch_array($result, MYSQLI_NUM); 
    foreach($row as $value){
      printf("%s, ", $value);
    }
    echo("<br>");
  }
}
echo("hours by day: <br>");
printTable($con,"hoursByDay");
echo("employee info: <br>");
printTable($con,"employeeInfo");
echo("open hours: <br>");
printTable($con,"openHours");
echo("act schedule: <br>");
printTable($con,"actSchedule");
?>
