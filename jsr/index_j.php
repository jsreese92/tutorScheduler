<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
	<title>Schedule Request</title>
	<link rel="stylesheet" type="text/css" href="scheduling.css">
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="script_j.js"></script>
</head>
<body>
	
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
	
	<form id="request_form" action="setAvailability.php" method="post">
		<table>
			<thead>
				<tr><th>
						<select id="avail">
							<option value="busy">Busy</option>
							<option value="prefer_no">Prefer Not</option>
							<option value="can">Can Work</option>
							<option value="perfect">Perfect</option>
						</select>
					</th><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr>
			</thead>
			<tbody>

<!-- 9:00AM HOUR BEGINS HERE -->
				<tr id="09">
					<td class="na"><strong>9:00AM</strong></td>
					<td id="td_sun09" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon09">
						<select name="mon09">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue09">
						<select name="tue09">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed09">
						<select name="wed09">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu09">
						<select name="thu09">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri09">
						<select name="fri09">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 10:00AM HOUR BEGINS HERE -->
				<tr id="10">
					<td class="na"><strong>10:00AM</strong></td>
					<td id="td_sun10" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon10">
						<select name="mon10">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue10">
						<select name="tue10">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed10">
						<select name="wed10">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu10">
						<select name="thu10">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri10">
						<select name="fri10">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 11:00AM HOUR BEGINS HERE -->
				<tr id="11">
					<td class="na"><strong>11:00AM</strong></td>
					<td id="td_sun11" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon11">
						<select name="mon11">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue11">
						<select name="tue11">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed11">
						<select name="wed11">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu11">
						<select name="thu11">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri11">
						<select name="fri11">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 12:00PM HOUR BEGINS HERE -->
				<tr id="12">
					<td class="na"><strong>12:00AM</strong></td>
					<td id="td_sun12" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon12">
						<select name="mon12">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue12">
						<select name="tue12">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed12">
						<select name="wed12">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu12">
						<select name="thu12">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri12">
						<select name="fri12">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 1:00PM HOUR BEGINS HERE -->
				<tr id="13">
					<td class="na"><strong>1:00PM</strong></td>
					<td id="td_sun13" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon13">
						<select name="mon13">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue13">
						<select name="tue13">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed13">
						<select name="wed13">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu13">
						<select name="thu13">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri13">
						<select name="fri13">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 2:00PM HOUR BEGINS HERE -->
				<tr id="14">
					<td class="na"><strong>2:00PM</strong></td>
					<td id="td_sun14" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon14">
						<select name="mon14">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue14">
						<select name="tue14">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed14">
						<select name="wed14">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu14">
						<select name="thu14">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri14">
						<select name="fri14">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 3:00PM HOUR BEGINS HERE -->
				<tr id="15">
					<td class="na"><strong>3:00PM</strong></td>
					<td id="td_sun15" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon15">
						<select name="mon15">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue15">
						<select name="tue15">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed15">
						<select name="wed15">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu15">
						<select name="thu15">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri15">
						<select name="fri15">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
				</tr>
<!-- 4:00PM HOUR BEGINS HERE -->
				<tr id="16">
					<td class="na"><strong>4:00PM</strong></td>
					<td id="td_sun16" class="na">
						<span>N/A</span>
					</td>
					<td id="td_mon16">
						<select name="mon16">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue16">
						<select name="tue16">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed16">
						<select name="wed16">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu16">
						<select name="thu16">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri16" class="na">
						<span>N/A</span>
					</td>
				</tr>
<!-- 5:00PM HOUR BEGINS HERE -->
				<tr id="17">
					<td class="na"><strong>5:00PM</strong></td>
					<td id="td_sun17">
						<select name="sun17">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_mon17">
						<select name="mon17">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue17">
						<select name="tue17">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed17">
						<select name="wed17">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu17">
						<select name="thu17">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri17" class="na">
						<span>N/A</span>
					</td>
				</tr>
<!-- 6:00PM HOUR BEGINS HERE -->
				<tr id="18">
					<td class="na"><strong>6:00PM</strong></td>
					<td id="td_sun18">
						<select name="sun18">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_mon18">
						<select name="mon18">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue18">
						<select name="tue18">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed18">
						<select name="wed18">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu18">
						<select name="thu18">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri18" class="na">
						<span>N/A</span>
					</td>
				</tr>
<!-- 7:00PM HOUR BEGINS HERE -->
				<tr id="19">
					<td class="na"><strong>7:00PM</strong></td>
					<td id="td_sun19">
						<select name="sun19">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_mon19">
						<select name="mon19">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_tue19">
						<select name="tue19">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_wed19">
						<select name="wed19">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_thu19">
						<select name="thu19">
							<option value="0">Busy</option>
							<option value="1">Prefer Not</option>
							<option value="2">Can Work</option>
							<option value="3">Perfect</option>
						</select>
					</td>
					<td id="td_fri19" class="na">
						<span>N/A</span>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<button type="submit">Submit</button>
	</form>	
</body>
</html>
