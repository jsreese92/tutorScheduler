<?php
	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if(!$result = mysqli_query($con, "SELECT * FROM `employeeInfo`")) {
		echo mysqli_error($con);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login(fake)</title>
</head>
<body>
	Select an employee to log in as:
	<form id='selection' method="post" action="login_fake_validator.php">
		<select name="pid">
			<?php
				while($row = mysqli_fetch_array($result)) {
					echo "<option value=".$row[0].">".$row[1]." ".$row[2].", ".$row[3]."</option><br>";
				}
			?>
		</select>
		<br>
		<select name="target">
			<option value='ugrad'>Tutor</option>
			<option value='admin'>Admin</option>
		</select>
		<button type='submit'>Submit</button>
	</form>

</body>
</html>