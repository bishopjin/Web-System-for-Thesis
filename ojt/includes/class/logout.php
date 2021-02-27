<?php 
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['id']);
	unset($_SESSION['status']);
	header("location: ../../login.php");
?>