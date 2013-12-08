<?php
	include "./../common/session_validator.php";
	$con = getDatabaseConnection();

	$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".mysqli_real_escape_string($con, $_SESSION['pid'])."'"));
	
	if($employee_info[3] != 'admin') {
		echo "<script type = 'text/javascript'>location.href='http://$_SERVER[HTTP_HOST]/common/onyen_validator.php'</script>";
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Adminstrators</title>
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="admin.js"></script>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
</head>
<body>
<script>
function confirmAlg()
{
var r=confirm("Are you sure you want to run the scheduling algorithm?");
if(r==true)
	{
	goToAlgorithm();
	}
}
</script>
<?php
	//the logout bar
	echo "<strong class='login'>Currently logged in as " . $employee_info[1] . " " . $employee_info[2] . ". <button type='button' onclick='logout()'>Log Out</button></strong>";
	echo "<br><br><a class='login' href='admin_help.html'>Help</a>";

	echo "<button type='button' onclick='goToSetHours()'>Set Writing Center Hours</button><br>";
	echo "<button type='button' onclick='goToEditEmployees()'>Add/Edit/Remove Employees</button><br>";
	echo "<button type='button' onclick='goToRequests()'>Set Schedules</button><br>";
	echo "<button type='button' onclick='goToShowPrefs()'>View All Preferences</button><br>";
	echo "<button type='button' onclick='goToShowActual()'>View Master Schedule</button><br>";
	echo "<button type='button' onclick='confirmAlg()'>Run Scheduling Algorithm</button<br>";
	
?>


</form>
</body>
</html>
