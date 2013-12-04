<?php
$con = mysqli_connect('localhost', 'jonesep', '', 'calendar');

header("Content-type: application/json");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//got here via post means we want to add a new user
	$new_username = mysqli_real_escape_string($con, $_POST['new_username']);
	$new_password = mysqli_real_escape_string($con, $_POST['new_password']);
	
	//check if the username is already in the database
	$result = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '".$new_username."'");
	if(mysqli_num_rows($result) != 0) {
		header("HTTP/1.1 409 Username already exists");
		exit();
	}
	
	//insert into database
	$password_salt = md5($new_username . substr(md5(rand()), 0, 32));
	mysqli_query($con, "INSERT INTO `users` 
						(`id`, `passwordHash`, `salt`, `username`)
						VALUES (0, '".md5($new_password . $password_salt)."', '".$password_salt."', '".$new_username."')");
	if(mysqli_error($con)) {
		header("HTTP/1.1 500 Query error");
		exit();
	}
	print(json_encode(true));
	
	exit();
}else if($_SERVER['REQUEST_METHOD'] == 'GET') {
	//else they used get, so we'll log them in
	session_start();

	$username = mysqli_real_escape_string($con, $_GET['username']);
	$password = mysqli_real_escape_string($con, $_GET['password']);
	
	$user_info = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '".$username."'");
	if(mysqli_num_rows($user_info) != 1) {
		header("HTTP/1.1 404 Username not found");
		unset($_SESSION['username']);
		unset($_SESSION['salt']);
		exit();
	}
	
	$user_info = mysqli_fetch_array($user_info);
	if($user_info['passwordHash'] != md5($password . $user_info['salt'])) {
		header("HTTP/1.1 401 Incorrect username or password");
		unset($_SESSION['username']);
		unset($_SESSION['salt']);
		exit();
	}
	
	//create cookie
	$_SESSION['username'] = $username;
	$_SESSION['salt'] = substr(md5(rand()), 0, 32);
	
	$cookie_val = md5($_SESSION['username'] . $_SERVER['REMOTE_ADDR'] . $_SESSION['salt']);
	setcookie('426CalendarApp', $cookie_val);
	print(json_encode(true));
	
	exit();
}else {
	header("HTTP/1.1 400 Only accept GET and POST");
	exit();
}


?>