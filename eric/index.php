<!DOCTYPE html>

<?php
	$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$target_url = "http://$_SERVER[HTTP_HOST]/common/onyen_validator.php";
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Writing Center</title>
	<link rel="stylesheet" type="text/css" href="./common/stylesheet.css">
	<script type="text/javascript" src="./common/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
</head>
<body>
<form id='login_form' action="https://onyen.unc.edu/cgi-bin/unc_id/authenticator.pl" method='post'>
	<input type="hidden" name="targetpass" value="<?php echo $target_url; ?>">
	<input type="hidden" name="targetfail" value="<?php echo $actual_url; ?>">
	<input type="hidden" name="title" value="Writing Center Login">
	<input type="hidden" name="textpass" value="Successfully logged in. Click to continue.">
	<input type="hidden" name="textfail" value="Failed to log in. Click to return.">
	<input type="hidden" name="getpid" value="pid">
</form>

</body>
</html>