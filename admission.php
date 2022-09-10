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

    $host = "localhost";
    $user ="root";
    $password="";
    $db="collegeproject";

    $data = mysqli_connect($host,$user,$password,$db);
    $sql = "SELECT * FROM admission";
    $result = mysqli_query($data,$sql);
      



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
        <center>
       <h1>Query For Admissions</h1>

       <br><br><br>

       <table border="1px">
           <tr>
               <th style="padding: 20px; font-size:15px;">Name</th>
               <th style="padding: 20px; font-size:15px;">Email</th>
               <th style="padding: 20px; font-size:15px;">Phone No</th>
               <th style="padding: 20px; font-size:15px;">Messgae</th>
           </tr>

           <?php
           while($info=$result->fetch_assoc())
            {
            ?>

           <tr>
               <td style="padding: 20px;">
                <?php echo"{$info['name']}"   ?>
            
                </td>
               <td style="padding: 20px;">
               <?php echo"{$info['email']}"   ?>
            </td>
               <td style="padding: 20px;">
               <?php echo"{$info['phone']}"   ?>
            
            </td>               
               <td style="padding: 20px;">
               <?php echo"{$info['message']}"   ?>
            </td>               
           </tr>

           <?php

           }

           ?>


       </table>

          



           
       
       </center>
    </div>

    
</body>
</html>