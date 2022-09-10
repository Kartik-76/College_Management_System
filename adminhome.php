<?php

    session_start();
    if (!isset($_SESSION['username'])) 
    {
        header("location:login.php");
    }

    else if($_SESSION['Usertype']=='student')
    {
        header("location:login.php");
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="adminhome.css">
</head>
<body>
    

    <?php
    include 'admin_sidebar.php';

    ?>
    <div class="content">
        <h1>Dr. DY Patil Institute of Technology</h1>
        <p>Welcome to Dr. D. Y. Patil Institute of Technology (DIT), Pimpri, Pune. The oldest campus of Dr. D. Y. Patil group of Institutions. This campus is started in year 1983 and further nurtured by our visionary Chairman Hon’ble Dr. P. D. Patil with the vision “Empowerment through knowledge” “Better Education Better World”. The institute is being progressed under the dynamic leadership of Hon’ble Dr. Somnath Patil.</p>
        <p>
        Institute has well maintained lawns, trees and handy plantations leading to a healthy and pleasant environment. This institute is in the heart of the city. Walkable distance from public transports such as Bus, Railway and Metro.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, suscipit tempora distinctio possimus non reiciendis vero officia repellendus praesentium laboriosam sunt necessitatibus ab eos sint ut qui optio odio modi expedita voluptatibus ad voluptatem facilis rem.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, suscipit tempora distinctio possimus non reiciendis vero officia repellendus praesentium laboriosam sunt necessitatibus ab eos sint ut qui optio odio modi expedita voluptatibus ad voluptatem facilis rem.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, suscipit tempora distinctio possimus non reiciendis vero officia repellendus praesentium laboriosam sunt necessitatibus ab eos sint ut qui optio odio modi expedita voluptatibus ad voluptatem facilis rem.</p>

    </div>

    
</body>
</html>