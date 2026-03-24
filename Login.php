<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<?php include("view/template/Header.php"); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background: #f0f2f5;
}

.page-wrapper{
    min-height: 100vh;
    display:flex;
    flex-direction:column;
}

.content{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-container {
    background: #fff;
    padding: 40px 30px;
    border-radius: 10px;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
    margin-top: 20px;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.error-msg{
    background:#ffe0e0;
    color:#c00;
    padding:10px;
    border-radius:5px;
    text-align:center;
    margin-bottom:15px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 10px 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-group input:focus {
    border-color: #46a92e;
    outline: none;
}

.btn {
    width: 100%;
    padding: 12px;
    background: #4daf39;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background: #3cae3e;
}

.footer-text {
    text-align: center;
    margin-top: 15px;
    color: #777;
    font-size: 14px;
}
</style>

</head>

<body>

<div class="page-wrapper">

<div class="content">

<div class="login-container">

<h2>Login</h2>

<?php
if(isset($_SESSION['error'])){
    echo "<div class='error-msg'>".$_SESSION['error']."</div>";
    unset($_SESSION['error']);
}
?>

<form method="post" action="LoginProcess.php">

<div class="form-group">
<label>Email</label>
<input type="email" name="email" placeholder="Enter your email" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" placeholder="Enter your password" required>
</div>

<button type="submit" class="btn">Login</button>

</form>

<div class="footer-text">
Don't have an account? <a href="index.php">Register</a>
</div>

</div>

</div>

<?php include("view/template/Footer.php"); ?>

</div>

</body>
</html>