<?php
session_start();

if (isset($_SESSION["remember"])) {
    header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            margin-top: 100PX;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="login.php" method="POST">
        <label for="" style="font-family:arial;"><b>Username</b></label><br>
        <input type="text" name="username" placeholder="Enter Username" style="margin-bottom: 10px;width:300px;height:40px;"><br>
        <label for="" style="font-family:arial;"><b>Password</b></label><br>
        <input type="password" name="password" placeholder="Enter Password" style="margin-bottom: 10px;width:300px;height:40px;"><br>
        <button type="submit" style="width: 100%;background-color:green;color:white;border:1px;height:40px;">Login</button>
        <input type="checkbox" name="remember" style="margin-top: 10px;font-family:arial;">Remember Me
    </form>
    </div>
</body>
</html>