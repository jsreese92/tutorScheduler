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
  print("<p>\n");
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  print("</p>\n");
}

// Set database
print("<p>\n");
$sql="use tutorScheduler";
if (!mysqli_query($con,$sql)){
  echo "Error setting database: " . mysqli_error($con);
}
print("</p>\n");

// Update one variable test
$sql=("update hoursByDay set h17='" . $_POST['sun17'] . "'" . 
  "where PID='1' and day='sun'");

print("<p>\n");
if (!mysqli_query($con,$sql)){
  echo "Error updating: " . mysqli_error($con);
}
print("</p>\n");

// Print database

/*
   echo 'Sunday:';
   echo $_POST['sun17'];
   echo $_POST['sun18'];
   echo $_POST['sun19'];
   echo 'Monday:';
   echo $_POST['mon09'];
   echo $_POST['mon10'];
   echo $_POST['mon11'];
   echo $_POST['mon12'];
   echo $_POST['mon13'];
   echo $_POST['mon14'];
   echo $_POST['mon15'];
   echo $_POST['mon16'];
   echo $_POST['mon17'];
   echo $_POST['mon18'];
   echo $_POST['mon19'];
   echo 'Tuesday:';
   echo $_POST['tue09'];
   echo $_POST['tue10'];
   echo $_POST['tue11'];
   echo $_POST['tue12'];
   echo $_POST['tue13'];
   echo $_POST['tue14'];
   echo $_POST['tue15'];
   echo $_POST['tue16'];
   echo $_POST['tue17'];
   echo $_POST['tue18'];
   echo $_POST['tue19'];
   echo 'Wednesday:';
   echo $_POST['wed09'];
   echo $_POST['wed10'];
   echo $_POST['wed11'];
   echo $_POST['wed12'];
   echo $_POST['wed13'];
   echo $_POST['wed14'];
   echo $_POST['wed15'];
   echo $_POST['wed16'];
   echo $_POST['wed17'];
   echo $_POST['wed18'];
   echo $_POST['wed19'];
   echo 'Thursday:';
   echo $_POST['thu09'];
   echo $_POST['thu10'];
   echo $_POST['thu11'];
   echo $_POST['thu12'];
   echo $_POST['thu13'];
   echo $_POST['thu14'];
   echo $_POST['thu15'];
   echo $_POST['thu16'];
   echo $_POST['thu17'];
   echo $_POST['thu18'];
   echo $_POST['thu19'];
   echo 'Friday:';
   echo $_POST['fri09'];
   echo $_POST['fri10'];
   echo $_POST['fri11'];
   echo $_POST['fri12'];
   echo $_POST['fri13'];
   echo $_POST['fri14'];
   echo $_POST['fri15'];
 */
?>
 </body>
</html>
