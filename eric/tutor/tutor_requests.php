<?php
	include "./../common/session_validator.php";
	$con = getDatabaseConnection();

	$employee_info = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `employeeInfo` WHERE `PID` = '".$_SESSION['pid']."'"));

	if($employee_info[3] == 'admin') {
		echo "<script type = 'text/javascript'>location.href='http://$_SERVER[HTTP_HOST]/common/onyen_validator.php'</script>";
		exit();
	}	
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Schedule Request</title>
	<link rel="stylesheet" type="text/css" href="./../common/stylesheet.css">
	<script type="text/javascript" src="./../common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="tutor_requests.js"></script>
</head>
<body>


<?php

//IF WE GOT TO THE PAGE VIA THE SUBMIT BUTTON, UPDATE THE DATABASE!
	if($_POST['submit_checkbox']==true) {
		
		function getVal($val) {
			return $_POST[$val];
		}

		$day_array = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");
	
		for($d=0; $d<7; $d++) {
			$day = $day_array[$d];
			for($h=7; $h<=23; $h++) {
				if($h<10) {
					mysqli_query($con, "UPDATE `hoursByDay` SET `h0".$h."`='".getVal($day.'0'.$h.'_val')."'"."where `PID` = '".$employee_info[0]."' and `day`='".$day."'");
				}else {
					mysqli_query($con, "UPDATE `hoursByDay` SET `h".$h."`='".getVal($day.$h.'_val')."'"."where `PID` = '".$employee_info[0]."' and `day`='".$day."'");
				}
				
			}
		}
		echo "<div id=success>Successfully Submitted Requests!</div>";
	}

	//the go back/logout bar
	echo "<div><strong class='login'>Currently logged in as " . $employee_info[1] . " " . $employee_info[2] . ". <button type='button' onclick='logout()'>Log Out</button></strong>" .
		"<button onclick='goBack()'>Back to Administrator Overview Page</button></div>";
?>
	
	<p>To use this form, simply select the desired availability in the dropdown in the upper-left corner of the table,
		and start clicking spots on the table to assign each time-block to the selected availability! To undo or deselect
		a time-block, simply click it again until it turns white.  <strong>NOTE</strong> that you may want to leave blocks
		for lunch/dinner as 'Prefer Not' or 'Can Work' sections</p>
	<p>
		<span class='busy'>'Busy'</span> indicates that you absolutely CANNOT work during the shift that starts at the
			hour listed. Use this option for things like classes, other jobs, etc. Cells marked 'Busy' will be black. <br>
		<span class='prefer_no'>'Prefer Not'</span> indicates that you <em>could</em> work at this time, but would
			<em>strongly prefer</em> to not have to work if it can be avoided. These cells will be red.<br>
		<span class='can'>'Can Work'</span> indicates that you can easily work this time and be ok, but it isn't the
			<em>ideal</em> time for you. These cell will be highlighted yellow.<br>
		<span class='perfect'>'Perfect'</span> indicates that this is the <em>perfect</em> time slot for you to work, and
			you would be happy having a shift at this time. These cells will be displayed in green.
	</p>
	<p>
		While the scheduling software does its best to give everybody the optimum schedule, please note that there are times
		at which point it will be <em>impossible</em> for us to keep everybody happy. The schedule you are about to submit
		is a <strong>request,</strong> and in no way guarantees that your assigned shifts will perfectly reflect it.
	</p>
	
	<form id="request_form" action="tutor_requests.php" method="post">
		<div id="request_div">
		<table id="requests_table">
			<thead>
				<tr><th>
						<select id="avail">
							<option value="busy">Busy</option>
							<option value="prefer_no">Prefer Not</option>
							<option value="can">Can Work</option>
							<option value="perfect">Perfect</option>
						</select>
					</th>
					<th class="na">Sunday</th>
					<th class="na">Monday</th>
					<th class="na">Tuesday</th>
					<th class="na">Wednesday</th>
					<th class="na">Thursday</th>
					<th class="na">Friday</th>
					<th class="na">Saturday</th></tr>
			</thead>
			<tbody>
<!-- 7:00AM HOUR BEGINS HERE -->
				<tr id="07">
					<td class="na"><strong>7:00AM</strong></td>
					<td id="sun07"></td>
					<td id="mon07"></td>
					<td id="tue07"></td>
					<td id="wed07"></td>
					<td id="thu07"></td>
					<td id="fri07"></td>
					<td id="sat07"></td>
				</tr>
<!-- 8:00AM HOUR BEGINS HERE -->
				<tr id="08">
					<td class="na"><strong>8:00AM</strong></td>
					<td id="sun08"></td>
					<td id="mon08"></td>
					<td id="tue08"></td>
					<td id="wed08"></td>
					<td id="thu08"></td>
					<td id="fri08"></td>
					<td id="sat08"></td>
				</tr>
<!-- 9:00AM HOUR BEGINS HERE -->
				<tr id="09">
					<td class="na"><strong>9:00AM</strong></td>
					<td id="sun09"></td>
					<td id="mon09"></td>
					<td id="tue09"></td>
					<td id="wed09"></td>
					<td id="thu09"></td>
					<td id="fri09"></td>
					<td id="sat09"></td>
				</tr>
<!-- 10:00AM HOUR BEGINS HERE -->
				<tr id="10">
					<td class="na"><strong>10:00AM</strong></td>
					<td id="sun10"></td>
					<td id="mon10"></td>
					<td id="tue10"></td>
					<td id="wed10"></td>
					<td id="thu10"></td>
					<td id="fri10"></td>
					<td id="sat10"></td>
				</tr>
<!-- 11:00AM HOUR BEGINS HERE -->
				<tr id="11">
					<td class="na"><strong>11:00AM</strong></td>
					<td id="sun11"></td>
					<td id="mon11"></td>
					<td id="tue11"></td>
					<td id="wed11"></td>
					<td id="thu11"></td>
					<td id="fri11"></td>
					<td id="sat11"></td>
				</tr>
<!-- 12:00PM HOUR BEGINS HERE -->
				<tr id="12">
					<td class="na"><strong>12:00AM</strong></td>
					<td id="sun12"></td>
					<td id="mon12"></td>
					<td id="tue12"></td>
					<td id="wed12"></td>
					<td id="thu12"></td>
					<td id="fri12"></td>
					<td id="sat12"></td>
				</tr>
<!-- 1:00PM HOUR BEGINS HERE -->
				<tr id="13">
					<td class="na"><strong>1:00PM</strong></td>
					<td id="sun13"></td>
					<td id="mon13"></td>
					<td id="tue13"></td>
					<td id="wed13"></td>
					<td id="thu13"></td>
					<td id="fri13"></td>
					<td id="sat13"></td>
				</tr>
<!-- 2:00PM HOUR BEGINS HERE -->
				<tr id="14">
					<td class="na"><strong>2:00PM</strong></td>
					<td id="sun14"></td>
					<td id="mon14"></td>
					<td id="tue14"></td>
					<td id="wed14"></td>
					<td id="thu14"></td>
					<td id="fri14"></td>
					<td id="sat14"></td>
				</tr>
<!-- 3:00PM HOUR BEGINS HERE -->
				<tr id="15">
					<td class="na"><strong>3:00PM</strong></td>
					<td id="sun15"></td>
					<td id="mon15"></td>
					<td id="tue15"></td>
					<td id="wed15"></td>
					<td id="thu15"></td>
					<td id="fri15"></td>
					<td id="sat15"></td>
				</tr>
<!-- 4:00PM HOUR BEGINS HERE -->
				<tr id="16">
					<td class="na"><strong>4:00PM</strong></td>
					<td id="sun16"></td>
					<td id="mon16"></td>
					<td id="tue16"></td>
					<td id="wed16"></td>
					<td id="thu16"></td>
					<td id="fri16"></td>
					<td id="sat16"></td>
				</tr>
<!-- 5:00PM HOUR BEGINS HERE -->
				<tr id="17">
					<td class="na"><strong>5:00PM</strong></td>
					<td id="sun17"></td>
					<td id="mon17"></td>
					<td id="tue17"></td>
					<td id="wed17"></td>
					<td id="thu17"></td>
					<td id="fri17"></td>
					<td id="sat17"></td>
				</tr>
<!-- 6:00PM HOUR BEGINS HERE -->
				<tr id="18">
					<td class="na"><strong>6:00PM</strong></td>
					<td id="sun18"></td>
					<td id="mon18"></td>
					<td id="tue18"></td>
					<td id="wed18"></td>
					<td id="thu18"></td>
					<td id="fri18"></td>
					<td id="sat18"></td>
				</tr>
<!-- 7:00PM HOUR BEGINS HERE -->
				<tr id="19">
					<td class="na"><strong>7:00PM</strong></td>
					<td id="sun19"></td>
					<td id="mon19"></td>
					<td id="tue19"></td>
					<td id="wed19"></td>
					<td id="thu19"></td>
					<td id="fri19"></td>
					<td id="sat19"></td>
				</tr>
<!-- 8:00PM HOUR BEGINS HERE -->
				<tr id="20">
					<td class="na"><strong>8:00PM</strong></td>
					<td id="sun20"></td>
					<td id="mon20"></td>
					<td id="tue20"></td>
					<td id="wed20"></td>
					<td id="thu20"></td>
					<td id="fri20"></td>
					<td id="sat20"></td>
				</tr>
<!-- 9:00PM HOUR BEGINS HERE -->
				<tr id="21">
					<td class="na"><strong>9:00PM</strong></td>
					<td id="sun21"></td>
					<td id="mon21"></td>
					<td id="tue21"></td>
					<td id="wed21"></td>
					<td id="thu21"></td>
					<td id="fri21"></td>
					<td id="sat21"></td>
				</tr>
<!-- 10:00PM HOUR BEGINS HERE -->
				<tr id="22">
					<td class="na"><strong>10:00PM</strong></td>
					<td id="sun22"></td>
					<td id="mon22"></td>
					<td id="tue22"></td>
					<td id="wed22"></td>
					<td id="thu22"></td>
					<td id="fri22"></td>
					<td id="sat22"></td>
				</tr>
<!-- 11:00PM HOUR BEGINS HERE -->
				<tr id="23">
					<td class="na"><strong>11:00PM</strong></td>
					<td id="sun23"></td>
					<td id="mon23"></td>
					<td id="tue23"></td>
					<td id="wed23"></td>
					<td id="thu23"></td>
					<td id="fri23"></td>
					<td id="sat23"></td>
				</tr>
			</tbody>
		</table>
		</div>

		<br>
		<button id="submit" type="submit" onclick="submit_requests()">Submit</button>
		<button id="clear" type="button" onclick="clear_requests()">Clear All</button>
		<button id="reset" type="button" onclick="reset_requests()">Reset</button>
		
	</form>

<!--Insert table from student database-->
<table id="student_database_result" hidden=true>
<tbody>
<?php
	

	if(!$result = mysqli_query($con, "SELECT * FROM `hoursByDay` WHERE `PID` = ".$employee_info[0])){
		echo "Error ";
		echo mysqli_error($con);
	}
	
	//populate the table with the values from the database
	if($result)
	while($row = mysqli_fetch_array($result)) {
		echo "<tr class='".$row[1]."'>";
		for($i=7; $i<24; $i++) {
			if($i < 10) {
				echo "<td class='0".($i)." na'>".$row[$i+2]."</td>";
			}else echo "<td class='".($i)." na'>".$row[$i+2]."</td>";
		}
		echo "</tr>\n";
	}

?>
</tbody>
</table>

<!--Insert table from open hours database-->
<table id="hours_database_result" hidden=true>
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