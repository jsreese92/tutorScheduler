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

function printHoursByDay($theCon){
  $sql = ("select * from hoursByDay"); // Get result of query
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
?>
