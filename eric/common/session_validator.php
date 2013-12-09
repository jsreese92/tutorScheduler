<?php
/*
	WRITTEN BY: Eric Jones
	LAST MODIFIED: 12/8/2013
	This page is called whenever a user lands on a new page or an ajax request is fired off. It checks the cookie to ensure that the user is in fact logged in with a valid login, and
	if so it adds more time to the cookie and returns, else it loops them back to the login page and exits the script so nothing can be changed at all. It is called at the top of every
	page.
*/

	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");

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
	setcookie('TutorSchedulerAuth', $_COOKIE['TutorSchedulerAuth'], time()+450, '/');	//cookie now doesn't expire for another 7.5 minutes
?>
