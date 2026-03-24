<?php 
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['number'] = $_POST['number']; 
$_SESSION['password'] = $_POST['password']; 


header("Location: Login.php");
?>