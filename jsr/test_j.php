<html>
 <head>
  <title>PHP Response</title>
  <link rel='stylesheet' type='text/css' href='scheduling.css'>
 </head>
 <body>
<?php 
// Create connection on Jordan's machine
$con=mysqli_connect("localhost","root","???Jrizzle343756");

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br>";
}

// Set database
$sql="use tutorScheduler";
if (!mysqli_query($con,$sql)){
  echo "Error setting database: " . mysqli_error($con) "<br>";
}

echo("Before Update: <br>");
printHoursByDay($con);

// Update all variables
//TODO update based on PID
foreach($_POST as $k => $v){
  //echo("key: " . $k . " value: " . $v . " ");
  $day = substr($k,0,3); // set day from first 3 characters of variable name
  $hour = substr($k,3,2); // set hours from last 2 """ 
  $sql=("update hoursByDay set h" . $hour . "='" . $v . "'" .
    "where PID = '1' and day='" . $day . "'");

  if (!mysqli_query($con,$sql)){
    echo "Error updating: " . mysqli_error($con) "<br>";
  }
}

echo("After Update: <br>");
printHoursByDay($con);

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
 </body>
</html>
