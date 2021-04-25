<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="welcome.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        body{ font: 12px sans-serif; text-align: Left; }
    </style>
</head>
<body style="background-color:gray;">
<img src="/bilder/logo.png" alt="Why?">
    <div id="tekst1">
        <h1 class="my-5">Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Big Shop<br> We hope you have a great experience</h1>
    </div>
    <p>
    <a href="reset-password.php" class="button">Reset Your Password</a><br>
    <a href="logout.php" class="button">Sign Out of Your Account</a><br>
    <a href="index.html" class="button">Go back</a>
    </p>
</body>
</html>
