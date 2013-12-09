<?php
	$con = mysqli_connect("127.10.98.130","adminR4Im6WI","V16hdDRZ_SGr", "tutorScheduler");

	$validation_url = "http://$_SERVER[HTTP_HOST]/common/onyen_validator.php";

	function getDatabaseConnection() {
		global $con;
		return $con;
	}
	session_start();
	
	if(!isset($_COOKIE['TutorSchedulerAuth']) || $_COOKIE['TutorSchedulerAuth'] != md5($_SESSION['pid'] . $_SESSION['remote_address'] . $_SERVER['REMOTE_ADDR'] . $_SESSION['authsalt'])) {
		//meaning the authorization cookie either isn't there, the session cookie isn't there, or the cookie doesn't match what we expect
		echo "<script type = 'text/javascript'>location.href='$validation_url'</script>";
		exit();
	}
	//otherwise, we'll update the cookie expiration, regenerate the session id, and whatever page we got here from will continue as per usual.
	session_regenerate_id(true);
	setcookie('TutorSchedulerAuth', $_COOKIE['TutorSchedulerAuth'], time()+450, '/', $SERVER['HTTP_HOST'], 1);	//cookie now doesn't expire for another 7.5 minutes
?>
