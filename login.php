<?php
require 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Molin Kitchen | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require 'header.php'; ?>
    <div class="login-container">
        <br><br><br>
        <h3>LOGIN</h3>
        <p>Login to make a purchase.</p>
        <form method="post" action="login_submit.php">
            <div>
                <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>

        <div>Don't have an account yet? <a href="signup.php">Register</a></div>
        <br><br><br><br><br>
    </div>
</body>

</html>