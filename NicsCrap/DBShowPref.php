<?php
// Create connection
$con=mysqli_connect("localhost","nabashia","insert_password_here");

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Set database
$sql="use tutorScheduler";
if (!mysqli_query($con,$sql)){
  echo "Error setting database: " . mysqli_error($con);
}

print("ALL 3s SELECTED");
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Sunday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Sunday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Monday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Monday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Tuesday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Tuesday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Wednesday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Wednesday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Thursday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Thursday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Friday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Friday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Saturday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h0 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h2 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Saturday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h4 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h6 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h8 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h10 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h12 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h14 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h16 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h18 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h20 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h22 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

print("ALL 2s SELECTED");
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Sunday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Sunday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Monday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Monday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h15 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h17 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h19 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h21 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h23 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Tuesday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h1 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Tuesday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h3 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h5 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h7 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h9 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h11 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h13 = '3' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h15 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h17 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h19 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h21 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h23 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Wednesday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h1 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Wednesday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h3 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h5 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h7 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h9 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h11 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h13 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h15 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h17 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h19 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h21 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h23 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Thursday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h1 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Thursday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h3 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h5 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h7 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h9 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h11 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h13 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h15 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h17 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h19 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h21 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h23 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Friday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h1 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Friday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h3 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h5 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h7 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h9 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h11 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h13 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h15 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h17 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h19 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h21 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h23 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Saturday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h0 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h1 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h2 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Saturday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h3 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h4 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h5 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h6 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h7 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h8 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h9 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h10 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h11 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h12 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h13 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h14 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h15 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h16 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h17 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h18 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h19 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h20 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h21 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h22 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h23 = '2' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

print("ALL 1s SELECTED");
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Sunday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Sunday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Sunday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Sunday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Sunday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Monday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Monday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Monday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Monday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Monday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Tuesday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Tuesday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Tuesday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Tuesday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Tuesday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Wednesday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Wednesday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Wednesday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Wednesday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Wednesday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Thursday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Thursday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Thursday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Thursday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Thursday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Friday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Friday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Friday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Friday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Friday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

//Return all 3s for Saturday at h0
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h0 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H00: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h1
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h1 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H01: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h2
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h2 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H02: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");


//Return all 3s for Saturday at h3
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h3 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H03: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h4
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h4 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H04: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h5
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h5 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H05: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h6
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h6 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H06: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h7
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h7 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H07: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h8
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h8 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H08: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h9
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h9 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H09: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h10
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h10 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H10: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h11
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h11 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H11: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h12
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h12 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H12: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h13
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h13 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H13: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h14
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h14 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H14: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h15
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h15 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H15: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h16
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h16 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H16: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h17
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h17 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H17: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h18
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h18 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H18: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h19
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h19 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H19: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h20
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h20 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H20: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h21
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h21 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H21: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h22
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h22 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H22: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");

//Return all 3s for Saturday at h23
$sql = ("SELECT Fname,Lname 
	FROM hoursByDay,studentInfo 
	WHERE (hoursByDay.Day = 'Saturday' AND h23 = '1' AND studentInfo.PID = hoursByDay.PID)");
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);

print("Saturday H23: ");
for($i = 0; $i < $numRows; $i++){
  //get the array from result indexed by numbers
  $row = mysqli_fetch_array($result, MYSQLI_NUM); 
  foreach($row as $value){
    printf("%s", $value);
    print(" ");
  }
  print("| ");
}
echo("<br>");
print("---------------------------------------------------------------------");
echo("<br>");

mysqli_close($con);
?>