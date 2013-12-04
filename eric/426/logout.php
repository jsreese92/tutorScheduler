<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['salt']);

setcookie('426CalendarApp', '', time()-60);

echo "<script>location.href='../426';</script>";
?>