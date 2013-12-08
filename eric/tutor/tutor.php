<?php
/*
	This page is simply the overview page for tutors on which users land when they login properly. It contains links to the various tools available to tutors.
*/

	include "./../common/session_validator.php";
	$con = getDatabaseConnection();

	$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".mysqli_real_escape_string($con, $_SESSION['pid'])."'"));
	
	if($employee_info[3] == 'admin') {
		echo "<script type = 'text/javascript'>location.href='http://$_SERVER[HTTP_HOST]/common/onyen_validator.php'</script>";
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutors</title>
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="tutor.js"></script>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
</head>
<body>
<?php
	//the logout bar
	echo "<strong class='login'>Currently logged in as " . $employee_info[1] . " " . $employee_info[2] . ". <button type='button' onclick='logout()'>Log Out</button></strong>";
	echo "<br><br><a class='login' href='tutor_help.html'>Help</a>";
	
	echo "<button type='button' onclick='goToRequests()'>Set Available Hours</button><br>";
	echo "<button type='button' onclick='goToHours()'>View Assigned Hours</button>";	
?>


</form>
</body>
</html>