<?php session_start();
	$_SESSION['logged in'] = false;
	$_SESSION['username'] = "";
	header("Location: home.php");

?>