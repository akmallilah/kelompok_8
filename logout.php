<?php 
session_start();
if(!isset($_SESSION["admin"])) {
	header("location: login.php");
}

unset($_SESSION['admin']);
header('location: login.php');

 ?>
