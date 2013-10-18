<?php
// Create connection
$con=mysqli_connect("localhost","nabashia","INSERT PWORD");

// Check connection
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Set database
$sql="use tutorScheduler";
if (!mysqli_query($con,$sql)){
	echo "Error setting database: " . mysqli_error($con);
}

/*********VARIABLES FOR RESTRICTING DISPLAY FROM CUSTOM HOURS*********/
$setDays = array(sun,mon,tue,wed,thu,fri,sat); // needed for the openHours table
$setHrs = array(h07,h08,h09,h10,h11,h12,h13,h14,h15,h16,h17,h18,h19,h20,h21,h22,h23);
$sunh07Open=0; $monh07Open=0; $tueh07Open=0; $wedh07Open=0; $thuh07Open=0; $frih07Open=0; $sath07Open=0;
$sunh08Open=0; $monh08Open=0; $tueh08Open=0; $wedh08Open=0; $thuh08Open=0; $frih08Open=0; $sath08Open=0;
$sunh09Open=0; $monh09Open=0; $tueh09Open=0; $wedh09Open=0; $thuh09Open=0; $frih09Open=0; $sath09Open=0;
$sunh10Open=0; $monh10Open=0; $tueh10Open=0; $wedh10Open=0; $thuh10Open=0; $frih10Open=0; $sath10Open=0;
$sunh11Open=0; $monh11Open=0; $tueh11Open=0; $wedh11Open=0; $thuh11Open=0; $frih11Open=0; $sath11Open=0;
$sunh12Open=0; $monh12Open=0; $tueh12Open=0; $wedh12Open=0; $thuh12Open=0; $frih12Open=0; $sath12Open=0;
$sunh13Open=0; $monh13Open=0; $tueh13Open=0; $wedh13Open=0; $thuh13Open=0; $frih13Open=0; $sath13Open=0;
$sunh14Open=0; $monh14Open=0; $tueh14Open=0; $wedh14Open=0; $thuh14Open=0; $frih14Open=0; $sath14Open=0;
$sunh15Open=0; $monh15Open=0; $tueh15Open=0; $wedh15Open=0; $thuh15Open=0; $frih15Open=0; $sath15Open=0;
$sunh16Open=0; $monh16Open=0; $tueh16Open=0; $wedh16Open=0; $thuh16Open=0; $frih16Open=0; $sath16Open=0;
$sunh17Open=0; $monh17Open=0; $tueh17Open=0; $wedh17Open=0; $thuh17Open=0; $frih17Open=0; $sath17Open=0;
$sunh18Open=0; $monh18Open=0; $tueh18Open=0; $wedh18Open=0; $thuh18Open=0; $frih18Open=0; $sath18Open=0;
$sunh19Open=0; $monh19Open=0; $tueh19Open=0; $wedh19Open=0; $thuh19Open=0; $frih19Open=0; $sath19Open=0;
$sunh20Open=0; $monh20Open=0; $tueh20Open=0; $wedh20Open=0; $thuh20Open=0; $frih20Open=0; $sath20Open=0;
$sunh21Open=0; $monh21Open=0; $tueh21Open=0; $wedh21Open=0; $thuh21Open=0; $frih21Open=0; $sath21Open=0;
$sunh22Open=0; $monh22Open=0; $tueh22Open=0; $wedh22Open=0; $thuh22Open=0; $frih22Open=0; $sath22Open=0;
$sunh23Open=0; $monh23Open=0; $tueh23Open=0; $wedh23Open=0; $thuh23Open=0; $frih23Open=0; $sath23Open=0;

/*********VARIABLES FOR GENERATING MASTER SCHEDULE*********/
$prefs = array(1,2,3);
$days = array(sun,mon,tue,wed,thu,fri,sat);
$hours = array(6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);

//18X7 array to hold strings which will contain every person working. An entry
//represents an hour for day, starting at 7am on Sunday to 12am on Saturday
$availMatrix = array();

//Arrays to store the names of people working that hour, entry 0 is sunday, entry 6 is saturday
$h6Arr = array();
$h7Arr = array();
$h8Arr = array();
$h9Arr = array();
$h10Arr = array();
$h11Arr = array();
$h12Arr = array();
$h13Arr = array();
$h14Arr = array();
$h15Arr = array();
$h16Arr = array();
$h17Arr = array();
$h18Arr = array();
$h19Arr = array();
$h20Arr = array();
$h21Arr = array();
$h22Arr = array();
$h23Arr = array();

//Temp variables for storing a name and for storing a list of names as a string
$tempName = "";
$tempNList = "";

//Loops through the openHours table and finds the hours that are open (marked as 1)
foreach($setDays as $weekDay){
	foreach($setHrs as $hrs){
		$sql=("SELECT $hrs 
			  FROM openHours
			  WHERE(openHours.Day = '$weekDay')");
		$results = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($results);
		
		$hrsOpen = $weekDay.$hrs.Open;
		
		if($row[0] == 1){
			$$hrsOpen = 1;
		}
		else{
			$$hrsOpen = 0;
		}
	}
}

//Loops through the hoursByDay table and selects everybody who entered a 1,2,or 3
foreach($days as $weekDay){
	foreach($hours as $hrs){
		foreach($prefs as $num){		
			$sql = ("SELECT Fname,Lname 
					FROM hoursByDay,studentInfo 
					WHERE (hoursByDay.Day = '$weekDay' AND h$hrs = '$num' AND studentInfo.PID = hoursByDay.PID)");

			$result = mysqli_query($con,$sql);
			$numRows = mysqli_num_rows($result);

			for($i = 0; $i < $numRows; $i++){
				//Gets all first and last names for a returned row and adds each set of first and last to tempNList
				$row = mysqli_fetch_array($result, MYSQLI_NUM); 
				foreach($row as $value){
					$tempName = $tempName . " " . $value;
				}
				$tempName = $tempName . ": " . $num . "<br>";
				$tempNList = $tempNList . $tempName;
				$tempName = "";
			}
		}
		//push the tempNList to the array for the hour
		$tempVar = 'h'.$hrs.'Arr';
		array_push($$tempVar,$tempNList);
		$tempNList = "";
	}
}

//push all hour arrays into the availMatrix array to make availMatrix a 2-Dimensional Array
array_push($availMatrix,$h7Arr,$h8Arr,$h9Arr,$h10Arr,$h11Arr,$h12Arr,$h13Arr,$h14Arr,$h15Arr,$h16Arr,$h17Arr,$h18Arr,$h19Arr,$h20Arr,
	$h21Arr,$h22Arr,$h23Arr);

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Student Preferences</title>
	<!--<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">-->
</head>
<body>
	<table align="center" border>
		<thead>
			<tr>
				<th></th>
				<th>Sunday</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
		</thead>
		<tbody>
			<tr>
				<td><strong>7:00AM</strong></td>
					<td><?php if($sunh07Open == 1){echo($h7Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh07Open == 1){echo($h7Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh07Open == 1){echo($h7Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh07Open == 1){echo($h7Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh07Open == 1){echo($h7Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih07Open == 1){echo($h7Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath07Open == 1){echo($h7Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>
			<tr>
				<td><strong>8:00AM</strong></td>
					<td><?php if($sunh08Open == 1){echo($h8Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh08Open == 1){echo($h8Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh08Open == 1){echo($h8Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh08Open == 1){echo($h8Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh08Open == 1){echo($h8Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih08Open == 1){echo($h8Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath08Open == 1){echo($h8Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>9:00AM</strong></td>
					<td><?php if($sunh09Open == 1){echo($h9Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh09Open == 1){echo($h9Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh09Open == 1){echo($h9Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh09Open == 1){echo($h9Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh09Open == 1){echo($h9Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih09Open == 1){echo($h9Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath09Open == 1){echo($h9Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>10:00AM</strong></td>
					<td><?php if($sunh10Open == 1){echo($h10Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh10Open == 1){echo($h10Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh10Open == 1){echo($h10Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh10Open == 1){echo($h10Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh10Open == 1){echo($h10Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih10Open == 1){echo($h10Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath10Open == 1){echo($h10Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>11:00AM</strong></td>
					<td><?php if($sunh11Open == 1){echo($h11Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh11Open == 1){echo($h11Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh11Open == 1){echo($h11Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh11Open == 1){echo($h11Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh11Open == 1){echo($h11Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih11Open == 1){echo($h11Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath11Open == 1){echo($h11Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>12:00PM</strong></td>
					<td><?php if($sunh12Open == 1){echo($h12Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh12Open == 1){echo($h12Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh12Open == 1){echo($h12Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh12Open == 1){echo($h12Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh12Open == 1){echo($h12Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih12Open == 1){echo($h12Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath12Open == 1){echo($h12Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>1:00PM</strong></td>
					<td><?php if($sunh13Open == 1){echo($h13Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh13Open == 1){echo($h13Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh13Open == 1){echo($h13Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh13Open == 1){echo($h13Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh13Open == 1){echo($h13Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih13Open == 1){echo($h13Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath13Open == 1){echo($h13Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>2:00PM</strong></td>
					<td><?php if($sunh14Open == 1){echo($h14Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh14Open == 1){echo($h14Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh14Open == 1){echo($h14Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh14Open == 1){echo($h14Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh14Open == 1){echo($h14Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih14Open == 1){echo($h14Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath14Open == 1){echo($h14Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>
			<tr>
				<td><strong>3:00PM</strong></td>
					<td><?php if($sunh15Open == 1){echo($h15Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh15Open == 1){echo($h15Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh15Open == 1){echo($h15Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh15Open == 1){echo($h15Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh15Open == 1){echo($h15Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih15Open == 1){echo($h15Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath15Open == 1){echo($h15Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>4:00PM</strong></td>
					<td><?php if($sunh16Open == 1){echo($h16Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh16Open == 1){echo($h16Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh16Open == 1){echo($h16Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh16Open == 1){echo($h16Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh16Open == 1){echo($h16Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih16Open == 1){echo($h16Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath16Open == 1){echo($h16Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>5:00PM</strong></td>
					<td><?php if($sunh17Open == 1){echo($h17Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh17Open == 1){echo($h17Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh17Open == 1){echo($h17Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh17Open == 1){echo($h17Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh17Open == 1){echo($h17Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih17Open == 1){echo($h17Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath17Open == 1){echo($h17Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>6:00PM</strong></td>
					<td><?php if($sunh18Open == 1){echo($h18Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh18Open == 1){echo($h18Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh18Open == 1){echo($h18Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh18Open == 1){echo($h18Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh18Open == 1){echo($h18Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih18Open == 1){echo($h18Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath18Open == 1){echo($h18Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>7:00PM</strong></td>
					<td><?php if($sunh19Open == 1){echo($h19Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh19Open == 1){echo($h19Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh19Open == 1){echo($h19Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh19Open == 1){echo($h19Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh19Open == 1){echo($h19Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih19Open == 1){echo($h19Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath19Open == 1){echo($h19Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>8:00PM</strong></td>
					<td><?php if($sunh20Open == 1){echo($h20Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh20Open == 1){echo($h20Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh20Open == 1){echo($h20Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh20Open == 1){echo($h20Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh20Open == 1){echo($h20Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih20Open == 1){echo($h20Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath20Open == 1){echo($h20Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>9:00PM</strong></td>
					<td><?php if($sunh21Open == 1){echo($h21Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh21Open == 1){echo($h21Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh21Open == 1){echo($h21Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh21Open == 1){echo($h21Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh21Open == 1){echo($h21Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih21Open == 1){echo($h21Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath21Open == 1){echo($h21Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>10:00PM</strong></td>
					<td><?php if($sunh22Open == 1){echo($h22Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh22Open == 1){echo($h22Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh22Open == 1){echo($h22Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh22Open == 1){echo($h22Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh22Open == 1){echo($h22Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih22Open == 1){echo($h22Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath22Open == 1){echo($h22Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>	
			<tr>
				<td><strong>11:00PM</strong></td>
					<td><?php if($sunh23Open == 1){echo($h23Arr[0]);} else{echo("CLOSED");}?></td>
					<td><?php if($monh23Open == 1){echo($h23Arr[1]);} else{echo("CLOSED");}?></td>
					<td><?php if($tueh23Open == 1){echo($h23Arr[2]);} else{echo("CLOSED");}?></td>
					<td><?php if($wedh23Open == 1){echo($h23Arr[3]);} else{echo("CLOSED");}?></td>
					<td><?php if($thuh23Open == 1){echo($h23Arr[4]);} else{echo("CLOSED");}?></td>
					<td><?php if($frih23Open == 1){echo($h23Arr[5]);} else{echo("CLOSED");}?></td>
					<td><?php if($sath23Open == 1){echo($h23Arr[6]);} else{echo("CLOSED");}?></td>
			</tr>				
		</tbody>
	</table>
</body>
</html>
