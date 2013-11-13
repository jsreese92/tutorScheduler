<?php
	$con = mysqli_connect("127.10.98.130","adminR4Im6WI","V16hdDRZ_SGr", "tutorScheduler");

	function getDatabaseConnection() {
		global $con;
		return $con;
	}


	function checkValidationKey($con, $validation_key, $pid, $type_1, $type_2) {

		$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$pid."'"));
		
		//clear out all the expired records
		mysqli_query($con, "DELETE FROM `validationRecords` WHERE `expire` <= '".time()."'");
		
		
		$validation_record = null;
		
		if($validation_key != null && $pid != null) {
		$result = mysqli_query($con, "SELECT * FROM `validationRecords` WHERE `key` = '".$validation_key."' AND `PID` = '".$pid."'");
			$validation_record = mysqli_fetch_array($result);
		}

		if($validation_record == null || ($employee_info[3] != $type_1 && $employee_info[3] != $type_2)) {
			return false;
		}else {
			//refresh their key for another ten minutes, then return true
			mysqli_query($con, "UPDATE `validationRecords` SET `expire` = '".(time()+600)."' WHERE `key` = '".$validation_key."' AND `PID` = '".$pid."'");
			return true;
		}
	}

?>