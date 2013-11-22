<?php
include "./../common/session_validator.php";
$con = getDatabaseConnection();


header("Content-type: application/json");

$response = array();

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
		if($next_number == 2) {	//ie, if this is a greenlaw shift
			if($response[$next_shift] == 0) {
				$response[$next_shift] = 1;
			}else $response[$next_shift] += 1;
		}
	}
}

print(json_encode($response));

exit();

?>