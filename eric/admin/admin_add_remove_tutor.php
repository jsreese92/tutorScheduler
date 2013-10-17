<?php
	$con = mysqli_connect('localhost', 'jonesep', '', 'tutorScheduler');
	if(mysqli_connect_errno())
	{
		echo "Failed connect to database: " . mysqli_connect_error();
	}

//IF WE GOT TO THE PAGE VIA THE ADD BUTTON, UPDATE THE DATABASE!
	if($_POST['add_attempt_checkbox']==true) {
		$unique = true;
		
		$new_Fname = $_POST['Fname'];
		$new_Lname = $_POST['Lname'];
		$new_pid = $_POST['pid'];
		
		//check if the given PID is already in the table
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT PID FROM studentInfo WHERE PID = '".$new_pid."'"));
		if($temp[0] == $new_pid) {
			$unique = false;
		}
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM studentInfo WHERE Lname = '".$new_Lname."'"));
		if(strcasecmp($temp[1],$new_Fname) == 0) {
		//matched first and last names with an existing record..
			$unique = false;
		}
		
		
		if(!$unique) {
			echo "<div id=failure>Failed to add ".$new_Fname." ".$new_Lname." to database; duplicate tutor!</div>";
		}else {
			echo "<div id=success>Successfully added ".$new_Fname." ".$new_Lname." to database!</div>";
			//add them to studentInfo
			mysqli_query($con, "INSERT INTO `studentInfo` (`PID`, `Fname`, `Lname`) VALUES ('" . $new_pid . "', '" . $new_Fname . "', '" . $new_Lname . "');");
			//add them to hoursByDay
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','sun','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','mon','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','tue','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','wed','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','thu','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','fri','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, `h13`, `h14`, `h15`, 					`h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
				VALUES ('".$new_pid."','sat','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
			
		}
		
		
	}
//WE GOT HERE VIA THE REMOVE BUTTON, REMOVE THE TUTOR!
	if($_POST['remove_attempt_checkbox']==true) {
		$tutor = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM studentInfo WHERE PID = '".$_POST['tutor_pid']."'"));
		echo "<div id=success>Successfully removed ".$tutor[1]." ".$tutor[2]." from database!</div>";
		
		//remove from studentInfo
		mysqli_query($con, "DELETE FROM studentInfo WHERE PID = '".$_POST['tutor_pid']."'");
		//remove from hoursByDay
		mysqli_query($con, "DELETE FROM hoursByDay WHERE PID = '".$_POST['tutor_pid']."'");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="admin_add_remove_tutor.js"></script>
	<meta charset="UTF-8">
	<title>Add a Tutor</title>
</head>
<body>
	<div id="add_tutor">
	<h2>Add Tutor</h2>
	<form id="add_tutor_form" action="admin_add_remove_tutor.php" method="post">
		<span class="input_span">First Name:</span><input type="text" name="Fname">
		<br>
		<span class="input_span">Last Name:</span><input type="text" name="Lname">
		<br>
		<span class="input_span">PID:</span><input maxlength="9" type="text" name="pid" id="pid_field">
		<br>
		<button id="submit" type="submit">Submit</button>
	</form>
	</div>
	<br><br>
	<div id="remove_tutor">
	<h2>Remove Tutor</h2>
	<form id="remove_tutor_form" action="admin_add_remove_tutor.php" method="post">
		<select name='tutor_pid'>
			<?php
				if(!$result = mysqli_query($con, "SELECT * FROM studentInfo")) {
					echo mysqli_error($con);
				}

				while($row = mysqli_fetch_array($result)) {
					echo "<option value=".$row[0].">".$row[2].", ".$row[1]."</option>\n";
				}
			?>
		</select>
		<br>
		<button type="submit">Remove</button>
	</form>
	</div>
</body>
</html>