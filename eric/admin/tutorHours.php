<?php
include "./../common/session_validator.php";
$con = getDatabaseConnection();

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
?>