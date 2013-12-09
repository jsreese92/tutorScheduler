<?php
	include "./../common/session_validator.php";
	$con = getDatabaseConnection();


	$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$target_url = str_replace("common/logout.php", "index.php", $actual_url);
	
	//set the cookie they're using to one that's already expired so it'll delete itself
	setcookie('TutorSchedulerAuth', $_COOKIE['TutorSchedulerAuth'], time()-60, '/');
	//delete the session they've been using so we don't have to worry about session fixation
	session_unset();
	session_destroy();
	
	//send em back to login
	echo "<script>location.href='".$target_url."';</script>";
?>
