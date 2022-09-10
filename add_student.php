<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else if ($_SESSION['Usertype'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password="";
$db="collegeproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student']))
{
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $check="SELECT * FROM user WHERE Username = '$username'";
    $check_user = mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('Username Already Exist. Try using another username');
        </script>";
    }
    else{

    

    $sql="INSERT INTO user(Username,Phone,Email,Usertype,Password) VALUES ('$username','$user_phone','$user_email','$usertype','$user_password')";

    $result = mysqli_query($data,$sql);

    if ($result) {
        echo "<script type='text/javascript'>
        alert('Data Uploaded Successfully');
        </script>";
    }
    else{
        echo "Error Uploading data";
    }


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
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;

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
        input{
            margin: 5px;
            padding: 5px;
            width: 500px;


        }

        form{
            margin: 50px;

        }
    </style>
    <link rel="stylesheet" href="adminhome.css">
</head>

<body>


    <?php
    include 'admin_sidebar.php';

    ?>
    <div class="content">
        <center>
            <h1>Add Student</h1>
            <div>
                <form action="#" method="POST">
                    <div>
                        <label>Username</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label>phone</label>
                        <input type="number" name="phone">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="text" name="password">
                    </div>
                    <div>
                        <input type="submit" name="add_student" value="Add Student" class="btn">
                    </div>
                </form>
            </div>
        </center>


    </div>


</body>

</html>