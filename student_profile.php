<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else if ($_SESSION['Usertype'] == 'admin') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "collegeproject";

$data = mysqli_connect($host, $user, $password, $db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE  Username='$name'";

$result=mysqli_query($data,$sql);
$info = mysqli_fetch_assoc($result);

if (isset($POST['update_profile'])) {
    $s_email = $_POST['email'];
    $s_phone = $_POST['phone'];
    $s_password = $_POST['password'];

    $sql2="UPDATE user SET Email='$s_email',Phone='$s_phone',Password='$s_password' WHERE Username='$name'";

    $result2=mysqli_query($data,$sql2);

    if($result2){
        header('location:student_profile.php');
    }

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php
    include 'student_css.php';


    ?>

    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;


        }

        .div_deg {
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;

        }

        .btn {
            margin: 0px 9px;
            padding: 3px 11px;
            color: white;
            background-color: black;
            font-size: 20px;
            border-radius: 15px;
            border-radius: 1px solid grey;
            margin-top: 33px;
        }

        .btn:hover {
            cursor: pointer;
            text-decoration: underline;
            color: skyblue;
        }
    </style>

</head>

<body>
    <?php
    include 'student_sidebar.php';




    ?>

    <div class="content">
        <center>

            <center>
                <h1>Update Profile</h1>
            </center>

            <form action="#" method="POST">

                <div class="div_deg">


                    <div>
                        <label>Email</label>
                        <input type="email" name="email"
                        value="<?php echo "{$info['Email']}"?>">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone"
                        value="<?php echo "{$info['Phone']}"?>">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="text" name="password"
                        value="<?php echo "{$info['Password']}"?>">
                    </div>
                    <div>

                        <input class="btn" type="submit" name="update_profile">
                    </div>
                </div>
            </form>
        </center>
    </div>






</body>

</html>