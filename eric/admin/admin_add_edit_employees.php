<?php
	include "./../common/session_validator.php";
	$con = getDatabaseConnection();
	
	$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$_SESSION['pid']."'"));

	if($employee_info[3] != 'admin') {
		echo "<script type = 'text/javascript'>location.href='http://$_SERVER[HTTP_HOST]/common/onyen_validator.php'</script>";
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="admin_add_edit_employee.js"></script>
	<meta charset="UTF-8">
	<title>Add/Remove Tutors</title>
</head>
<body>
<?php

//IF WE GOT TO THE PAGE VIA THE ADD BUTTON, UPDATE THE DATABASE!
	if($_POST['new_pid'] != null) {
		$unique = true;
		
		$new_Fname = $_POST['new_Fname'];
		$new_Lname = $_POST['new_Lname'];
		$new_pid = $_POST['new_pid'];
		$new_type = $_POST['new_type'];
				
		//figure out which type they selected so we can set it as the default if the page comes back failed
		switch($new_type) {
			case 'grad':
				$grad_selected = 'selected';
				break;
			case 'ugrad':
				$ugrad_selected = 'selected';
				break;
			case 'admin':
				$admin_selected = 'selected';
				break;
		}
		
		//check if the given employee is already in the table
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT `PID` FROM `employeeInfo` WHERE `PID` = '".$new_pid."'"));
		if($temp[0] == $new_pid) {
			$unique = false;
		}
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `Lname` = '".$new_Lname."'"));
		if($temp != null && strcasecmp($temp[1], $new_Fname) == 0) {
			$unique = false;
		}
		
		if(!$unique) {
			echo "<div id=failure>Failed to add ".$new_Fname." ".$new_Lname." to database; duplicate employee!</div>";
		}else {
			echo "<div id=success>Successfully added ".$new_Fname." ".$new_Lname." to database!</div>";
			//add them to employeeInfo
			mysqli_query($con, "INSERT INTO `employeeInfo` (`PID`, `Fname`, `Lname`, `type`) VALUES ('".$new_pid."','".$new_Fname."','".$new_Lname."','".$new_type."');");
			//add them to hoursByDay if not an admin
			if($new_type != 'admin') {
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','sun','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','mon','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','tue','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','wed','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','thu','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','fri','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `hoursByDay` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','sat','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");

				//add em into actSchedule
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','sun','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','mon','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','tue','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','wed','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','thu','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','fri','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
				mysqli_query($con, "INSERT INTO `actSchedule` (`PID`, `day`, `h00`, `h01`, `h02`, `h03`, `h04`, `h05`, `h06`, `h07`, `h08`, `h09`, `h10`, `h11`, `h12`, 
					`h13`, `h14`, `h15`, `h16`, `h17`, `h18`, `h19`, `h20`, `h21`, `h22`, `h23`) 
					VALUES ('".$new_pid."','sat','-1','-1','-1','-1','-1','-1','-1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");

			}

			//reset all the values so the fields are blank again
			$new_Fname = '';
			$new_Lname = '';
			$new_pid = '';
			$grad_selected = '';
			$ugrad_selected = '';
			$admin_selected = '';
		}
	}
//IF WE GOT HERE VIA THE REMOVE BUTTON, REMOVE THE EMPLOYEE!
	if($_POST['delete_pid'] != null) {
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$_POST['delete_pid']."'"));
		echo "<div id='success'>Successfully removed ".$temp[1]." ".$temp[2]." from the database!</div>";
		
		//remove from employeeInfo
		mysqli_query($con, "DELETE FROM `employeeInfo` WHERE `PID` = '".$_POST['delete_pid']."'");
		//remove from hoursByDay
		mysqli_query($con, "DELETE FROM `hoursByDay` WHERE `PID` = '".$_POST['delete_pid']."'");
		//remove from actSchedule
		mysqli_query($con, "DELETE FROM `actSchedule` WHERE `PID` = '".$_POST['delete_pid']."'");
	}

	
//IF WE GOT HERE VIA SUBMITTING AN EDIT
	if($_POST['edit_pid'] != null) {
		$unique = true;

		//check if the given employee is already in the table
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT `PID` FROM `employeeInfo` WHERE `PID` = '".$_POST['edit_pid']."' AND `PID` != '".$_POST['old_pid']."'"));
		if($temp != null) {
			$unique = false;
		}
		$temp = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `Lname` = '".$_POST['edit_Lname']."' AND `Fname` = '".$_POST['edit_Fname'].
				"' AND `PID` != '".$_POST['old_pid']."'"));
		if($temp != null) {
			$unique = false;
		}
		
		if(!$unique) {
			echo "<div id=failure>Failed to edit ".$_POST['edit_Fname']." ".$_POST['edit_Lname']." in database; would create duplicate employee!</div>";
		}else {
			echo "<div id=success>Successfully edited ".$_POST['edit_Fname']." ".$_POST['edit_Lname']." in database!</div>";

			//update employeeInfo
			mysqli_query($con, "UPDATE `employeeInfo` SET `Fname` = '".$_POST['edit_Fname']."' WHERE `PID` = '".$_POST['old_pid']."'");
			mysqli_query($con, "UPDATE `employeeInfo` SET `Lname` = '".$_POST['edit_Lname']."' WHERE `PID` = '".$_POST['old_pid']."'");
			if($_POST['edit_type'] != null)
				mysqli_query($con, "UPDATE `employeeInfo` SET `type` = '".$_POST['edit_type']."' WHERE `PID` = '".$_POST['old_pid']."'");
			mysqli_query($con, "UPDATE `employeeInfo` SET `PID` = '".$_POST['edit_pid']."' WHERE `PID` = '".$_POST['old_pid']."'");
			//update hoursByDay
			mysqli_query($con, "UPDATE `hoursByDay` SET `PID` = '".$_POST['edit_pid']."' WHERE `PID` = '".$_POST['old_pid']."'");
			//update actSchedule
			mysqli_query($con, "UPDATE `actSchedule` SET `PID` = '".$_POST['edit_pid']."' WHERE `PID` = '".$_POST['old_pid']."'");
		}
	}

	//the go back/logout bar
	echo "<div><strong class='login'>Currently logged in as " . $employee_info[1] . " " . $employee_info[2] . ". <button type='button' onclick='logout()'>Log Out</button></strong>" .
		"<button onclick='goBack()'>Back to Administrator Overview Page</button></div>";

?>


	<div id="add_employee">
	<h3>Add Employee</h3>
	<form id="new_employee_form" action="admin_add_edit_employees.php" method="post">
		<span class="input_span">First Name:</span><input type="text" name="new_Fname" value="<?php echo $new_Fname; ?>">
		<br>
		<span class="input_span">Last Name:</span><input type="text" name="new_Lname" value="<?php echo $new_Lname; ?>">
		<br>
		<span class="input_span">PID:</span><input maxlength="9" type="text" name="new_pid" value="<?php echo $new_pid; ?>">
		<br>
		<span class="input_span">Employee Type:</span><select name="new_type">
								<option <?php echo $grad_selected; ?> value='grad'>Graduate Tutor</option>
								<option <?php echo $ugrad_selected; ?> value='ugrad'>Undergraduate Tutor</option>
								<option <?php echo $admin_selected; ?> value='admin'>Adminstrator</option>
							</select>
		<br>
		<button id="submit" type="submit">Add</button>
	</form>
	</div>

	<div id="select_employee">
	<h3>Edit Employee</h3>
	<form id="select_employee_form" action="admin_add_edit_employees.php" method="post">
		<strong>Please note that you cannot edit your own information</strong><br>
		<select name='employee_pid'>
			<?php
				if(!$result = mysqli_query($con, "SELECT * FROM `employeeInfo`")) {
					echo mysqli_error($con);
				}
				
				while($row = mysqli_fetch_array($result)) {
					$type;
					switch($row[3]) {
						case 'grad':
							$type = 'Graduate Tutor';
							break;
						case 'ugrad':
							$type = 'Undergraduate Tutor';
							break;
						case 'admin':
							$type = 'Administrator';
							break;
					}
					if($row[0] != $_SESSION['pid'])	//make sure this person isn't the current user before adding them to the dropdown
						echo "<option value=".$row[0].">".$row[2].", ".$row[1]." (".$type.")</option>\n";
				}
			?>
		</select>
		<button submit='submit'>Go</button>
		<br>
	</form>
	</div>
	
	<div id="edit_employee" hidden>
		<h2>Edit Employee:</h2>
	<?php
//this stuff only appears when they start editing somebody
	if($_POST['employee_pid'] != null) {

		$employee = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$_POST['employee_pid']."'"));
		
		echo "<form id='delete_employee_form' action='admin_add_edit_employees.php' method='POST'><strong>".$employee[1]." ".$employee[2]."</strong>";
		echo "<input type='hidden' name='delete_pid' value='".$employee[0]."'><button type='submit'>Delete Employee</button></form>";

		switch($employee[3]) {
			case 'grad':
				$grad_selected = 'selected';
				break;
			case 'ugrad':
				$ugrad_selected = 'selected';
				break;
		}

	?>
		<br>
		<form id="edit_employee_form" action="admin_add_edit_employees.php" method="post">
			<input type='hidden' name='old_pid' value='<?php echo $employee[0] ?>'>
			
			<span class="input_span">First Name:</span><input type="text" name="edit_Fname" value="<?php echo $employee[1]; ?>">

			<span class="input_span">Last Name:</span><input type="text" name="edit_Lname" value="<?php echo $employee[2]; ?>">

			<span class="input_span">PID:</span><input maxlength="9" type="text" name="edit_pid" value="<?php echo $employee[0]; ?>">
			<?php if($employee[3] != 'admin') { ?>
			<span class="input_span">Employee Type:</span><select name="edit_type">
										<option <?php echo $grad_selected; ?> value='grad'>Graduate Tutor</option>
										<option <?php echo $ugrad_selected; ?> value='ugrad'>Undergraduate Tutor</option>
									</select>
			<?php } ?>
			<button id="submit" type="submit">Submit Information</button>
		</form>
		<br>
	<?php 
	}
	?>

	</div>
</body>
</html>
