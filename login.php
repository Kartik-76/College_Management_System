<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <h2>Login Page</h2><br>
    
    <div class="login">
    <h4>
        <?php

        error_reporting(0);
        session_start();
        session_destroy();

        echo $_SESSION['loginMessage'];
        
        
        ?>
    </h4>
        <form  action="logincheck.php" method="POST" id="login">
            <label><b>User Name
                </b>
            </label>
            <input type="text" id="Uname" name="username" placeholder="Username">
            <br><br>
            <label><b>Password
                </b>
            </label>
            <input type="Password" name="Pass" id="Pass" placeholder="Password">
            <br><br>
            <input type="submit" name="log" id="log" value="LogIn ">
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span>
            <br><br>
            Forgot <a href="#">Password</a>
        </form>
    </div>
</body>

</html>