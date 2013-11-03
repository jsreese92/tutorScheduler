<?php
	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if(!$result = mysqli_query($con, "SELECT * FROM `employeeInfo`")) {
		echo mysqli_error($con);
	}


	function generateKey() {
		$chars = array("a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9");
		$key = "";
		for($i = 0; $i < 16; $i++) {
			$key .= $chars[rand(0,15)];
		}
		return $key;
	}
?>
<html>
<head>
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="login_fake.js"></script>
</head>
<body>



<?php
if($_POST['pid'] != null) {

	echo "<form method='post' id='forward'>";
		//generate a validation record for them
		$key = generateKey();
		echo "<input type='hidden' name='validation_key' value='".$key."'>";
		echo "<input type='hidden' name='pid' value='".$_POST['pid']."'>";
		echo "<span id='form_target' hidden>".$_POST['target']."</span>";
		mysqli_query($con, "INSERT INTO `validationRecords` (`key`, `PID`, `expire`) VALUES ('".$key."','".$_POST['pid']."','".(time()+600)."');");

	echo "</form>";

}
?>

</body>
</html>