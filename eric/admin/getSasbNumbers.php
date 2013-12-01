<?php
include "./../common/session_validator.php";
$con = getDatabaseConnection();

$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".mysqli_real_escape_string($con, $_SESSION['pid'])."'"));
	
if($employee_info[3] != 'admin') {
	header('HTTP/1.1 401 Unauthorized');
	exit();
}


header("Content-type: application/json");

$response = array();
$response['tutors'] = array();

$result = mysqli_query($con, "SELECT * FROM `actSchedule`");
while($row = mysqli_fetch_array($result)) {
	for($i=7; $i<24; $i++) {
		if($i<10) {
			$next_shift = $row['day'] . '0' . $i;
			$next_number = $row['h0'.$i];
		}else {
			$next_shift = $row['day'] . $i;
			$next_number = $row['h'.$i];
		}
		if($response['tutors'][$next_shift] == undefined)
			$response['tutors'][$next_shift] = array();
		
		if($next_number == 1) {	//ie, if this is a sasb shift
			if($response[$next_shift] == 0) {
				$response[$next_shift] = 1;
			}else $response[$next_shift] += 1;
			
			$temp_result = mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$row['PID']."'");
			$temp_row = mysqli_fetch_array($temp_result);
			$response['tutors'][$next_shift][] = $temp_row['Fname'] . " " . $temp_row['Lname'];
		}
	}
}

print(json_encode($response));

exit();

?>