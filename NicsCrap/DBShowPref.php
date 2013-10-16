<?php
// Create connection
$con=mysqli_connect("localhost","nabashia","INSERT_PWORD");

// Check connection
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Set database
$sql="use tutorScheduler";
if (!mysqli_query($con,$sql)){
	echo "Error setting database: " . mysqli_error($con);
}
$prefs = array(1,2,3);
$days = array(Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday);
$hours = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);

foreach($days as $weekDay){
	echo("<b>");
	printf("%s",$weekDay);
	echo("</b>");
	echo("<br>");
	print("---------------------------------------------------------------------");
	echo("<br>");
	foreach($hours as $hrs){
		foreach($prefs as $num){		
			$sql = ("SELECT Fname,Lname 
					FROM hoursByDay,studentInfo 
					WHERE (hoursByDay.Day = '$weekDay' AND h$hrs = '$num' AND studentInfo.PID = hoursByDay.PID)");

			$result = mysqli_query($con,$sql);
			$numRows = mysqli_num_rows($result);

			print("$weekDay Hour $hrs Preference $num: ");
			for($i = 0; $i < $numRows; $i++){
			//get the array from result indexed by numbers
			$row = mysqli_fetch_array($result, MYSQLI_NUM); 
			foreach($row as $value){
				printf("%s", $value);
				print(" ");
			}
			print("| ");
			}
			echo("<br>");
		}
		echo("<br>");
	}
}

mysqli_close($con);
?>