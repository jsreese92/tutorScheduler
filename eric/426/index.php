<?php
	$con = mysqli_connect('localhost', 'jonesep', '', 'calendar');
?>

<html>
<head>
	<title>Testing</title>
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
</head>

<body>
<div>
	<strong>New User:</strong><br>
	<form name='new_user'>
	Username:<input type='text' name='new_username' maxlength='32'><br>
	Password:<input type='password' name='new_password_first'><br>
	Repeat password:<input type='password' name='new_password_second'><br>
	<button type='submit'>Submit</button>
	</form>
</div>
<br>
<div>
	<form name='existing_user'>
	<strong>Existing User:</strong><br>
	Username:<input type='text' name='username'><br>
	Password:<input type='password' name='password'><br>
	<button type='submit'>Submit</button>
	</form>
</div>
<br><br>
<select name='uid'>
<?php
	$result = mysqli_query($con, "SELECT * FROM `users`");
	while($next_user = mysqli_fetch_array($result)) {
		echo "<option data-id='".$next_user['id']."'>".$next_user['username']."</option>";
	}
?>
</select>
<br>
<button onclick='submitted()'>Submit</button>

</body>
</html>