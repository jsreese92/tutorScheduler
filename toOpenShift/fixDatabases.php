<?php
$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");

$result = mysqli_query($con, "SELECT `PID` FROM `employeeInfo`");

while($next_tutor = mysqli_fetch_array($result)) {
	$hours_by_day = mysqli_query($con, "SELECT * FROM `hoursByDay` WHERE `PID` = '".$next_tutor['PID']."'");
	if(mysqli_num_rows($hours_by_day) > 0) {
		echo $next_tutor['PID'] . " is in hoursByDay<br>";
		//they're in employeeInfo AND hoursByDay, so we'll add them to actSchedule if they aint there
		$act_schedule = mysqli_query($con, "SELECT * FROM `actSchedule` WHERE `PID` = '".$next_tutor['PID']."'");
		if(mysqli_num_rows($act_schedule) == 0) {
			echo $next_tutor['PID'] . " is NOT in actSchedule<br>";
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','sun','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','mon','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','tue','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','wed','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','thu','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','fri','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$next_tutor['PID']."','sat','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				
			echo "inserted ".$next_tutor['PID']." into actSchedule<br>";
		}
	}
}

?>