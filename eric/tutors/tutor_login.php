<?php
	$con = mysqli_connect("localhost", "jonesep", "", "tutorScheduler");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if(!$result = mysqli_query($con, "SELECT * FROM studentInfo")) {
		echo mysqli_error($con);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
	Select a student to log in as:
	<form action="tutor_requests.php" method="post">
		<select name="current_pid">

			<?php
				while($row = mysqli_fetch_array($result)) {
					echo "<option value=".$row[0].">".$row[1]."</option><br>";
				}
			?>

		</select>
		<button type="submit">Submit</button>
	</form>
</body>
</html>