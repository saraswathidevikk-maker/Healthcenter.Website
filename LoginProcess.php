<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
if ($email == $_SESSION['email'] && $password == $_SESSION['password']) {
    header("Location: Profile.php");
    exit();
} else {
    $_SESSION['error'] = "Invalid email or password!";
    header("Location: Login.php");
    exit();
}
?>