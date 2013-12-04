<?php
require_once('authenticate.php');

echo "<span class='logout'>Currently logged in as <span class='username'>".$_SESSION['username']."</span>. Click to logout.</span>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="calendar.js"></script>	
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Calendar</title>
</head>
<body>
<div id='page_container_div'>
	<div id="month_div"></div>
	<br>
	<div id="day_div"></div>
	<div id="event_div"></div>
</div>
</body>
</html>