<?php
	include "./../common/database_validator.php";
	$con = getDatabaseConnection();


	$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$validation_url = str_replace("tutor/tutor.php", "common/validator.php", $actual_url);

	$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `pid` = '".$_POST['pid']."'"));

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
	if(!checkValidationKey($con, $_POST['validation_key'], $_POST['pid'], 'ugrad', 'grad')) {
		echo "<script type='text/javascript'>location.href='".$validation_url."'</script>";
	}


	echo "<form method='POST' id='logout_form'>";
		echo "<strong class='login'>Currently logged in as " . $employee_info[1] . " " . $employee_info[2] . ". <button type='button' onclick='logout()'>Log Out</button></strong>";

		echo "<input type='hidden' name = 'pid' value='".$_POST['pid']."'>\n";
		echo "<input type='hidden' name = 'validation_key' value='".$_POST['validation_key']."'>";
	echo "</form>";
?>

<form id='forward' method = 'POST'>

<?php

	//if we get here, we've got a valid login. Echo the key and pid so that wherever we go we know who it is and if we're still valid
	echo "<input type = 'hidden' name = 'pid' value = '".$_POST['pid']."'>\n";
	echo "<input type = 'hidden' name = 'validation_key' value = '".$_POST['validation_key']."'>";
	
?>


</form>
</body>
</html>