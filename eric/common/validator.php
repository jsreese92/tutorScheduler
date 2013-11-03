<?php
	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");
?>


<!DOCTYPE html>

<html>
<head>
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="validator.js"></script>
</head>
<body>
<form method = 'POST'>

<?php	
	$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$login_url = str_replace("common/validator.php", "common/login.php", $actual_url);
	$tutor_url = str_replace("common/validator.php", "tutors/tutors.php", $actual_url);
	$admin_url = str_replace("common/validator.php", "admin/admin.php", $actual_url);
	$employee_info = array();


	function generateKey() {
		$chars = array("a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9");
		$key = "";
		for($i = 0; $i < 16; $i++) {
			$key .= $chars[rand(0,15)];
		}
		return $key;
	}


			
	
	
	//first, remove all validation records that have expired
	mysqli_query($con, "DELETE FROM validationRecords WHERE `expire` <= '".time()."'");
	
	//This will be a link to the validation text file provided by the authenticator.
	$vfyvalidate = "https://onyen.unc.edu/cgi-bin/unc_id/authenticator.pl/" . $_POST['vfykey'];

	$file = file_get_contents($vfyvalidate);
	$vfypid = 1;
	
	$lines = explode("\n", $file);
	foreach($lines as $row => $data) {
		if(substr($data, 0, 4) == 'pid:') {
			$vfypid = substr($data, 5, 9);
		}
	}
	
	if($vfypid == $_POST['pid']) {	//meaning the validation file matches the PID given by post, thus the login is valid
		$result = mysqli_query($con, "SELECT * FROM employeeInfo WHERE `PID` = ".$_POST['pid']);
		if($result) {
			$employee_info = mysqli_fetch_array($result);
		}
		if($employee_info[0] == null) {
			//meaning they aren't listed in the info database, and we'll redirect them back to login
			echo "<span id = 'form_target' hidden>no match</span>\n";
			
		}else {
			//else the employee was found in the database

			//set up the validation record for the table now
			$key = generateKey();
			$expire = time() + 600;
			
			mysqli_query($con, "INSERT INTO `validationRecords` (`key`, `PID`, `expire`) VALUES ('".$key."','".$employee_info[0]."','".$expire."');");
								
			//echo the validation key so it'll be submitted with the form to the next step, along with the target and pid
			echo "<span id = 'form_target' hidden>".$employee_info[3]."</span>\n";
			echo "<input type = 'hidden' name = 'pid' value = '".$employee_info[0]."'>";
			echo "<input type = 'hidden' name = 'validation_key' value = '".$key."'>";
		}			
	}else {
		//else the pid they posted didn't match the pid from unc, so it's a bunk attempt. Possibly expired.
		
		echo "<span id = 'form_target' hidden>illegal attempt</span>\n";

	}


?>


</form>
</body>
</html>

