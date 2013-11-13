<?php
	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");

?>


<!DOCTYPE html>

<html>
<head>
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type='text/javascript' src='onyen_validator.js'></script>
</head>
<body>
<form method = 'POST'>

<?php
	$employee_info = array();
	
	
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
		if($employee_info[0] != null) {
			//the employee was found in the database
			session_start();
			
			//generate an authorization cookie and setup the session data
			$_SESSION['pid'] = $vfypid;
			$_SESSION['authsalt'] = time() . substr(md5(rand()), 0, 16);
			
			$expire = time() + 450;
			$cookie_data = md5($_SESSION['pid'] . $_SERVER['REMOTE_ADDR'] . $_SESSION['authsalt']);
			
			setcookie('TutorSchedulerAuth', $cookie_data, $expire, '/');
			
			echo "<span id = 'form_target' hidden>".$employee_info[3]."</span>\n";
			
		}else {
			//meaning they aren't listed in the info database, and we'll redirect them back to login
			echo "<span id = 'form_target' hidden>no match</span>\n";
		}
	}else {
		//else the pid they posted didn't match the pid from unc, so it's a bunk attempt. Possibly expired.
		
		echo "<span id = 'form_target' hidden>illegal attempt</span>\n";

	}


?>


</form>
</body>
</html>

