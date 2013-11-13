<?php
	include "./../common/session_validator.php";
	$con = getDatabaseConnection();

	$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$_SESSION['pid']."'"));
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
	
	echo "<button type='button' onclick='goToRequests()'>Set Available Hours</button><br>";
	echo "<button type='button' onclick='goToHours()'>View Assigned Hours</button>";	
?>


</form>
</body>
</html>