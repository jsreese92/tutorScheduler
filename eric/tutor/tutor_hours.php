<?php
/*
	This page simply displays the hours currently given by the database. It prints the current schedule and open hours in hidden tables and the javascript will be used to fill out the
	display for the user. No user interaction can be done here.
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
	<meta charset="UTF-8">
	<title>View Schedule</title>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="tutor_hours.js"></script>
</head>
<body>


<?php
	//the go back/logout bar
	echo "<div><strong class='login'>Currently logged in as " . $employee_info[1] . " " . $employee_info[2] . ". <button type='button' onclick='logout()'>Log Out</button></strong>" .
		"<button onclick='goBack()'>Back to Tutor Overview Page</button></div>";
?>
	
	<div id="view_schedule_div">
	
	
	
	
	
	</div>
	
	
	
	
	<!--Insert table from actual hours table-->
	<table id="tutor_schedule_result" hidden>
	<tbody>
	<?php
		if(!$result = mysqli_query($con, "SELECT * FROM `actSchedule` WHERE `PID` = ".$employee_info[0])){
			echo "Error ";
			echo mysqli_error($con);
		}
		
		//populate the table with the values from the database
		while($row = mysqli_fetch_array($result)) {
			echo "<tr class='".$row[1]."'>";
			echo "<td>".$row[1]."</td>";
			for($i=7; $i<24; $i++) {
				if($i < 10) {
					echo "<td class='".$row[1]."0".($i)."'>".$row[$i+2]."</td>";
				}else echo "<td class='".$row[1].($i)."'>".$row[$i+2]."</td>";
			}
			echo "</tr>\n";
		}
	?>
	</tbody>
	</table>
	<!--Insert table from open hours database-->
	<table id="hours_database_result" hidden>
	<tbody>
	<?php
	
		function numToClass($val) {
			if($val==1) { 
				return 'open';
			}else return 'closed';
		}
	
		if(!$result = mysqli_query($con, "SELECT * FROM `openHours`")){
			echo "Error ";
			echo mysqli_error($con);
		}
		
		//populate the table with the values from the database
		while($row = mysqli_fetch_array($result)) {
			echo "<tr class='".$row[0]."'>";
			for($i=1; $i<18; $i++) {
				if($i < 4) {
					echo "<td class='0".($i+6)."'>".numToClass($row[$i])."</td>";
				}else echo "<td class='".($i+6)."'>".numToClass($row[$i])."</td>";
			}
			echo "</tr>\n";
		}
	
	?>

</body>
</html>