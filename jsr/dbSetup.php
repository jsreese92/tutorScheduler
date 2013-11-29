<?php
// Create connection on Openshift machine
$con=mysqli_connect("127.10.98.130","adminR4Im6WI","V16hdDRZ_SGr");

// Check connection
if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br>";
}

// Create database
$sql="create database IF NOT EXISTS tutorScheduler";
if (mysqli_query($con,$sql)){
  echo "Database tutorScheduler created successfully <br>";
}
else {
  echo "Error creating database: " . mysqli_error($con) . "<br>";
}

// Set database
$sql="use tutorScheduler";
if (mysqli_query($con,$sql)){
  echo "Database set successfully <br>";
}
else {
  echo "Error setting database: " . mysqli_error($con) . "<br>";
}

// Drop employeeInfo if previously there
$sql="drop table if exists employeeInfo";
if(mysqli_query($con,$sql)){
  echo "Deleted previously existing employeeInfo table <br>";
}

// Create employee info
$sql="create table employeeInfo (
  PID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (PID),
  Fname VARCHAR(30), Lname VARCHAR(30), type VARCHAR(5))";

if (mysqli_query($con,$sql)){
  echo "Table employeeInfo created successfully <br>";
}
else{
  echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Populate employeeInfo with initial data
$sql="load data local infile './testEmployee.txt' into table employeeInfo 
  fields terminated by ','";

if (mysqli_query($con,$sql)){
  echo "employeeInfo loaded successfully <br>";
}
else{
  echo "Error loading data: " . mysqli_error($con) . "<br>";
}

// Drop hoursByDay if previously there
$sql="drop table if exists hoursByDay";
if(mysqli_query($con,$sql)){
  echo "Deleted previously existing hoursByDay table <br>";
}

// Create hoursByDay
$sql="create table hoursByDay (
  PID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (PID,day),
  day VARCHAR(15), 
  h00 INT, h01 INT, h02 INT, h03 INT, h04 INT, h05 INT, h06 INT, h07 INT, 
  h08 INT, h09 INT, h10 INT, h11 INT, h12 INT, h13 INT, h14 INT, h15 INT, 
  h16 INT, h17 INT, h18 INT, h19 INT, h20 INT, h21 INT, h22 INT, h23 INT)";

if (mysqli_query($con,$sql)){
  echo "Table hoursByDay created successfully.<br>";
}
else{
  echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Populate hoursByDay with initial data
$sql="load data local infile './TutorPreferences.txt' into table hoursByDay
  fields terminated by ','";

if (mysqli_query($con,$sql)){
  echo "hoursByDay loaded successfully.<br>";
}
else{
  echo "Error loading data: " . mysqli_error($con) . "<br>";
}

// Drop openHours if previously there
$sql="drop table if exists openHours";
if(mysqli_query($con,$sql)){
  echo "Deleted previously existing openHours table <br>";
}

// Create openHours
$sql="create table openHours (
  day VARCHAR(15), 
  h07 INT, h08 INT, h09 INT, h10 INT, h11 INT, h12 INT, h13 INT, h14 INT, 
  h15 INT, h16 INT, h17 INT, h18 INT, h19 INT, h20 INT, h21 INT, h22 INT, 
  h23 INT)";

if (mysqli_query($con,$sql)){
  echo "Table openHours created successfully.<br>";
}
else{
  echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Populate openHours with initial data (all open)
$sql="load data local infile './testHours.txt' into table openHours 
  fields terminated by ','";

if (mysqli_query($con,$sql)){
  echo "openHours loaded successfully.<br>";
}
else{
  echo "Error loading data: " . mysqli_error($con) . "<br>";
}

// Drop actSchedule if previously there
$sql="drop table if exists actSchedule";
if(mysqli_query($con,$sql)){
  echo "Deleted previously existing actSchedule table <br>";
}

// Create actSchedule
$sql="create table actSchedule (
  PID INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (PID,day),
  day VARCHAR(15), 
  h00 INT, h01 INT, h02 INT, h03 INT, h04 INT, h05 INT, h06 INT, h07 INT, 
  h08 INT, h09 INT, h10 INT, h11 INT, h12 INT, h13 INT, h14 INT, h15 INT, 
  h16 INT, h17 INT, h18 INT, h19 INT, h20 INT, h21 INT, h22 INT, h23 INT)";
  
if (mysqli_query($con,$sql)){
  echo "Table actSchedule created successfully.<br>";
}
else{
  echo "Error creating table: " . mysqli_error($con) . "<br>";
}

// Populate actSchedule with initial data
$sql="load data local infile './testMaster.txt' into table actSchedule 
  fields terminated by ','";

if (mysqli_query($con,$sql)){
  echo "actSchedule loaded successfully.<br>";
}
else{
  echo "Error loading data: " . mysqli_error($con) . "<br>";
}


/* old way of doing variables
$sql="create table sampleData (
  PID INT NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY (PID),
  Fname VARCHAR(30), Lname VARCHAR(30), 
  sun0 INT, sun1 INT, sun2 INT, sun3 INT, sun4 INT, sun5 INT, sun6 INT,
  sun7 INT, sun8 INT, sun9 INT, sun10 INT, sun11 INT, sun12 INT,
  sun13 INT, sun14 INT, sun15 INT, sun16 INT, sun17 INT, sun18 INT,
  sun19 INT, sun20 INT, sun21 INT, sun22 INT, sun23 INT, 
  mon0 INT, mon1 INT, mon2 INT, mon3 INT, mon4 INT, mon5 INT, mon6 INT,
  mon7 INT, mon8 INT, mon9 INT, mon10 INT, mon11 INT, mon12 INT,
  mon13 INT, mon14 INT, mon15 INT, mon16 INT, mon17 INT, mon18 INT,
  mon19 INT, mon20 INT, mon21 INT, mon22 INT, mon23 INT, 
  tue0 INT, tue1 INT, tue2 INT, tue3 INT, tue4 INT, tue5 INT, tue6 INT,
  tue7 INT, tue8 INT, tue9 INT, tue10 INT, tue11 INT, tue12 INT,
  tue13 INT, tue14 INT, tue15 INT, tue16 INT, tue17 INT, tue18 INT,
  tue19 INT, tue20 INT, tue21 INT, tue22 INT, tue23 INT, 
  wed0 INT, wed1 INT, wed2 INT, wed3 INT, wed4 INT, wed5 INT, wed6 INT,
  wed7 INT, wed8 INT, wed9 INT, wed10 INT, wed11 INT, wed12 INT,
  wed13 INT, wed14 INT, wed15 INT, wed16 INT, wed17 INT, wed18 INT,
  wed19 INT, wed20 INT, wed21 INT, wed22 INT, wed23 INT, 
  thu0 INT, thu1 INT, thu2 INT, thu3 INT, thu4 INT, thu5 INT, thu6 INT,
  thu7 INT, thu8 INT, thu9 INT, thu10 INT, thu11 INT, thu12 INT,
  thu13 INT, thu14 INT, thu15 INT, thu16 INT, thu17 INT, thu18 INT,
  thu19 INT, thu20 INT, thu21 INT, thu22 INT, thu23 INT, 
  fri0 INT, fri1 INT, fri2 INT, fri3 INT, fri4 INT, fri5 INT, fri6 INT,
  fri7 INT, fri8 INT, fri9 INT, fri10 INT, fri11 INT, fri12 INT,
  fri13 INT, fri14 INT, fri15 INT, fri16 INT, fri17 INT, fri18 INT,
  fri19 INT, fri20 INT, fri21 INT, fri22 INT, fri23 INT, 
  sat0 INT, sat1 INT, sat2 INT, sat3 INT, sat4 INT, sat5 INT, sat6 INT,
  sat7 INT, sat8 INT, sat9 INT, sat10 INT, sat11 INT, sat12 INT,
  sat13 INT, sat14 INT, sat15 INT, sat16 INT, sat17 INT, sat18 INT,
  sat19 INT, sat20 INT, sat21 INT, sat22 INT, sat23 INT)";

if (mysqli_query($con,$sql)){
  echo "Table sampleData created successfully <br>";
}
else{
  echo "Error creating table: " . mysqli_error($con);
}
 */

mysqli_close($con);
?>

