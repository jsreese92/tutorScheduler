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
$prefs = array(1,2,3);
$days = array(Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday);
$hours = array(6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);

//18X7 array to hold strings which will contain every person working. An entry
//represents an hour for day, starting at 7am on Sunday to 12am on Saturday
$availMatrix = array();

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

$tempName = "";
$tempNList = "";
$rowIndex = 0;
$colIndex = 0;

foreach($days as $weekDay){
	foreach($hours as $hrs){
				
			$sql = ("SELECT Fname,Lname 
					FROM actSchedule,studentInfo 
					WHERE (actSchedule.Day = '$weekDay' AND h$hrs = '1' AND studentInfo.PID = actSchedule.PID)");

			$result = mysqli_query($con,$sql);
			$numRows = mysqli_num_rows($result);

			for($i = 0; $i < $numRows; $i++){
				//Gets all first and last names for a returned row and adds each set of first and last to tempNList
				$row = mysqli_fetch_array($result, MYSQLI_NUM); 
				foreach($row as $value){
					$tempName = $tempName . " " . $value;
				}
				$tempName = $tempName . "<br>";
				$tempNList = $tempNList . $tempName;
				$tempName = "";
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
<body>
	<table border>
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
					<td><?php echo($h6Arr[0]);?></td>
					<td><?php echo($h6Arr[1]);?></td>
					<td><?php echo($h6Arr[2]);?></td>
					<td><?php echo($h6Arr[3]);?></td>
					<td><?php echo($h6Arr[4]);?></td>
					<td><?php echo($h6Arr[5]);?></td>
					<td><?php echo($h6Arr[6]);?></td>
			</tr>
			<tr>
				<td><strong>8:00AM</strong></td>
					<td><?php echo($h7Arr[0]);?></td>
					<td><?php echo($h7Arr[1]);?></td>
					<td><?php echo($h7Arr[2]);?></td>
					<td><?php echo($h7Arr[3]);?></td>
					<td><?php echo($h7Arr[4]);?></td>
					<td><?php echo($h7Arr[5]);?></td>
					<td><?php echo($h7Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>9:00AM</strong></td>
					<td><?php echo($h8Arr[0]);?></td>
					<td><?php echo($h8Arr[1]);?></td>
					<td><?php echo($h8Arr[2]);?></td>
					<td><?php echo($h8Arr[3]);?></td>
					<td><?php echo($h8Arr[4]);?></td>
					<td><?php echo($h8Arr[5]);?></td>
					<td><?php echo($h8Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>10:00AM</strong></td>
					<td><?php echo($h9Arr[0]);?></td>
					<td><?php echo($h9Arr[1]);?></td>
					<td><?php echo($h9Arr[2]);?></td>
					<td><?php echo($h9Arr[3]);?></td>
					<td><?php echo($h9Arr[4]);?></td>
					<td><?php echo($h9Arr[5]);?></td>
					<td><?php echo($h9Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>11:00AM</strong></td>
					<td><?php echo($h10Arr[0]);?></td>
					<td><?php echo($h10Arr[1]);?></td>
					<td><?php echo($h10Arr[2]);?></td>
					<td><?php echo($h10Arr[3]);?></td>
					<td><?php echo($h10Arr[4]);?></td>
					<td><?php echo($h10Arr[5]);?></td>
					<td><?php echo($h10Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>12:00PM</strong></td>
					<td><?php echo($h11Arr[0]);?></td>
					<td><?php echo($h11Arr[1]);?></td>
					<td><?php echo($h11Arr[2]);?></td>
					<td><?php echo($h11Arr[3]);?></td>
					<td><?php echo($h11Arr[4]);?></td>
					<td><?php echo($h11Arr[5]);?></td>
					<td><?php echo($h11Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>1:00PM</strong></td>
					<td><?php echo($h12Arr[0]);?></td>
					<td><?php echo($h12Arr[1]);?></td>
					<td><?php echo($h12Arr[2]);?></td>
					<td><?php echo($h12Arr[3]);?></td>
					<td><?php echo($h12Arr[4]);?></td>
					<td><?php echo($h12Arr[5]);?></td>
					<td><?php echo($h12Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>2:00PM</strong></td>
					<td><?php echo($h13Arr[0]);?></td>
					<td><?php echo($h13Arr[1]);?></td>
					<td><?php echo($h13Arr[2]);?></td>
					<td><?php echo($h13Arr[3]);?></td>
					<td><?php echo($h13Arr[4]);?></td>
					<td><?php echo($h13Arr[5]);?></td>
					<td><?php echo($h13Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>3:00PM</strong></td>
					<td><?php echo($h14Arr[0]);?></td>
					<td><?php echo($h14Arr[1]);?></td>
					<td><?php echo($h14Arr[2]);?></td>
					<td><?php echo($h14Arr[3]);?></td>
					<td><?php echo($h14Arr[4]);?></td>
					<td><?php echo($h14Arr[5]);?></td>
					<td><?php echo($h14Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>4:00PM</strong></td>
					<td><?php echo($h15Arr[0]);?></td>
					<td><?php echo($h15Arr[1]);?></td>
					<td><?php echo($h15Arr[2]);?></td>
					<td><?php echo($h15Arr[3]);?></td>
					<td><?php echo($h15Arr[4]);?></td>
					<td><?php echo($h15Arr[5]);?></td>
					<td><?php echo($h15Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>5:00PM</strong></td>
					<td><?php echo($h16Arr[0]);?></td>
					<td><?php echo($h16Arr[1]);?></td>
					<td><?php echo($h16Arr[2]);?></td>
					<td><?php echo($h16Arr[3]);?></td>
					<td><?php echo($h16Arr[4]);?></td>
					<td><?php echo($h16Arr[5]);?></td>
					<td><?php echo($h16Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>6:00PM</strong></td>
					<td><?php echo($h17Arr[0]);?></td>
					<td><?php echo($h17Arr[1]);?></td>
					<td><?php echo($h17Arr[2]);?></td>
					<td><?php echo($h17Arr[3]);?></td>
					<td><?php echo($h17Arr[4]);?></td>
					<td><?php echo($h17Arr[5]);?></td>
					<td><?php echo($h17Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>7:00PM</strong></td>
					<td><?php echo($h18Arr[0]);?></td>
					<td><?php echo($h18Arr[1]);?></td>
					<td><?php echo($h18Arr[2]);?></td>
					<td><?php echo($h18Arr[3]);?></td>
					<td><?php echo($h18Arr[4]);?></td>
					<td><?php echo($h18Arr[5]);?></td>
					<td><?php echo($h18Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>8:00PM</strong></td>
					<td><?php echo($h19Arr[0]);?></td>
					<td><?php echo($h19Arr[1]);?></td>
					<td><?php echo($h19Arr[2]);?></td>
					<td><?php echo($h19Arr[3]);?></td>
					<td><?php echo($h19Arr[4]);?></td>
					<td><?php echo($h19Arr[5]);?></td>
					<td><?php echo($h19Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>9:00PM</strong></td>
					<td><?php echo($h20Arr[0]);?></td>
					<td><?php echo($h20Arr[1]);?></td>
					<td><?php echo($h20Arr[2]);?></td>
					<td><?php echo($h20Arr[3]);?></td>
					<td><?php echo($h20Arr[4]);?></td>
					<td><?php echo($h20Arr[5]);?></td>
					<td><?php echo($h20Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>10:00PM</strong></td>
					<td><?php echo($h21Arr[0]);?></td>
					<td><?php echo($h21Arr[1]);?></td>
					<td><?php echo($h21Arr[2]);?></td>
					<td><?php echo($h21Arr[3]);?></td>
					<td><?php echo($h21Arr[4]);?></td>
					<td><?php echo($h21Arr[5]);?></td>
					<td><?php echo($h21Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>11:00PM</strong></td>
					<td><?php echo($h22Arr[0]);?></td>
					<td><?php echo($h22Arr[1]);?></td>
					<td><?php echo($h22Arr[2]);?></td>
					<td><?php echo($h22Arr[3]);?></td>
					<td><?php echo($h22Arr[4]);?></td>
					<td><?php echo($h22Arr[5]);?></td>
					<td><?php echo($h22Arr[6]);?></td>
			</tr>	
			<tr>
				<td><strong>12:00AM</strong></td>
					<td><?php echo($h23Arr[0]);?></td>
					<td><?php echo($h23Arr[1]);?></td>
					<td><?php echo($h23Arr[2]);?></td>
					<td><?php echo($h23Arr[3]);?></td>
					<td><?php echo($h23Arr[4]);?></td>
					<td><?php echo($h23Arr[5]);?></td>
					<td><?php echo($h23Arr[6]);?></td>
			</tr>				
		</tbody>
	</table>
</body>
</html>
