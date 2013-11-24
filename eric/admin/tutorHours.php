<?php
include "./../common/session_validator.php";
$con = getDatabaseConnection();

header("Content-type: application/json");


if($_POST['pid'] == null) {
//if the request didn't come by post, they want us to return the users schedule rather than update it
	$response = array();

	$result = mysqli_query($con, "SELECT * FROM `actSchedule` WHERE `PID` = '".$_GET['tutor']."'");
	while($row = mysqli_fetch_array($result)){
		for($i=7; $i<24; $i++) {
			if($i<10) {
				$next_shift = $row['day'] . '0' . $i;
				$next_number = $row['h0'.$i];
			}else {
				$next_shift = $row['day'] . $i;
				$next_number = $row['h'.$i];
			}
			$response[$next_shift] = 'class_'.$next_number;
		}
	}

	print(json_encode($response));
	exit();
}else {
//else they used post, so we are meant to update the database
	$response = array();
	
	$pid = $_POST['pid'];
	$location = $_POST['location'];
	$day = substr($_POST['daytime'], 0, 3);
	$hour = substr($_POST['daytime'], 3, 2);
	mysqli_query($con, "UPDATE `actSchedule` SET `h".$hour."` = ".$location." WHERE `PID` = '".$pid."' AND `day` = '".$day."'");
	
	$response['daytime'] = $day.$hour;
	$response['pid'] = $pid;
	$response['location'] = "class_".$location;
	
	//get the new tutors working at this shift
	$result = mysqli_query($con, "SELECT `h".$hour."`, `PID` FROM `actSchedule` WHERE `day` = '".$day."'");
	$response['num_sasb'] = 0;
	$response['num_green'] = 0;
	$response['tutors_sasb'] = array();
	$response['tutors_green'] = array();
	
	while($row = mysqli_fetch_array($result)) {
		if($row["h$hour"] == 1) {
			$response['num_sasb'] += 1;
			
			$temp_result = mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$row['PID']."'");
			$temp_row = mysqli_fetch_array($temp_result);
			$response['tutors_sasb'][] = $temp_row['Fname'] . " " . $temp_row['Lname'];						
		}else if($row["h$hour"] == 2) {
			$response['num_green'] += 1;
			
			$temp_result = mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$row['PID']."'");
			$temp_row = mysqli_fetch_array($temp_result);
			$response['tutors_green'][] = $temp_row['Fname'] . " " . $temp_row['Lname'];						
		}
	}
	
	print(json_encode($response));
	exit();
}

?>