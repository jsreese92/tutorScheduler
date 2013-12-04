<?php
session_start();

if (!isset($_COOKIE['426CalendarApp']) || ($_COOKIE['426CalendarApp'] != md5($_SESSION['username'] . $_SERVER['REMOTE_ADDR'] . $_SESSION['salt']))) {
	echo "<script>location.href='../426'</script>";
	exit();
}

?>