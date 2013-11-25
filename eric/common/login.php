<?php
	$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$target_url = str_replace("login.php", "onyen_validator.php", $actual_url);
?>

<html>
<head>
	<title>Login</title>
</head>
<body>

<form action="https://onyen.unc.edu/cgi-bin/unc_id/authenticator.pl" method='post'>
	<input type="hidden" name="targetpass" value="<?php echo $target_url; ?>">
	<input type="hidden" name="targetfail" value="<?php echo $actual_url; ?>">
	<input type="hidden" name="title" value="Writing Center Login">
	<input type="hidden" name="textpass" value="Successfully logged in. Click to continue.">
	<input type="hidden" name="textfail" value="Failed to log in. Click to return.">
	<input type="hidden" name="getpid" value="pid">
	<button type="submit">Login via Onyen</button>
</form>

</body>
</html>