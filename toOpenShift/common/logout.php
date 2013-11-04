<?php
	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");
	
	if(mysqli_connect_errno())
	{
		echo "Failed connect to database: " . mysqli_connect_error() . "<br>";
	}


	$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$target_url = str_replace("common/logout.php", "index.php", $actual_url);

	//remove expired records
	mysqli_query($con, "DELETE FROM `validationRecords` WHERE `expire` <= '".time()."'");
	//remove the record associated with this session
	mysqli_query($con, "DELETE FROM `validationRecords` WHERE `key` = '".$_POST['validation_key']."' AND `pid` = '".$_POST['pid']."'");

	//send em back to login
	echo "<script>location.href='".$target_url."';</script>";

?>