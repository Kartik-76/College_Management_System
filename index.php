<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message']){
        $message = $_SESSION['message'];
        echo "<script type = 'text/javascript'>
        alert('$message');
        </script>";
    }



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <!-- Navigation Bar  -->
    <nav class="navbar">
        <div class="container-left">
            DPU

        </div>
        <div class="container-right">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="login.php" target="_blank">Login</a></li>
            </ul>

        </div>

    </nav>

    </nav>

    <!-- Body or college area  -->
    <section id="home">
        <h1>We Belive in excellence</h1>
    </section>

    <!-- Courses Offered -->
    

    <div id="services-container">
        <h1>Courses Offered</h1>
        <div id="courses">
            <div class="box">
                <img src="Engineering.jpg" alt="Engineering" >
                <h2>Engineering</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa repudiandae quas nam pariatur.</p>
            </div>
            <div class="box">
                <img src="MBA.jpg" alt="Engineering" >
                <h2>MBA</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa repudiandae quas nam pariatur.</p>
            </div>
            <div class="box">
                <img src="ph.jpg" alt="Engineering" >
                <h2>B-Pharma</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa repudiandae quas nam pariatur.</p>
            </div>
        </div>

    </div>

    <!-- Top Recuriter -->
    <div id="recuriter-section">
        <h1>Our Top Recuriters</h1>
        <div id="recuriter">
            <div class="recuriter-name">
                <img src="accenture.png" alt="Accenture" >
            </div>
            <div class="recuriter-name">
                <img src="cognizant.jpg" alt="Accenture" >
            </div>
            <div class="recuriter-name">
                <img src="IBM.png" alt="Accenture" >
            </div>
            <div class="recuriter-name">
                <img src="infosys.jpg" alt="Accenture" >
            </div>
            <div class="recuriter-name">
                <img src="tcs.jpg" alt="Accenture" >
            </div>
            <div class="recuriter-name">
                <img src="wipro.png" alt="Accenture" >
            </div>
            
        </div>
    </div>

    


    <div class="form">
        <h1>Admission Enquiry</h1>
        <form action="data_check.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email">
            </div>
            
            <div class="form-group">
                <input type="number" name="phone" placeholder="Enter your Contact Number">
            </div>
            <div class="form-group">
                <textarea name="message"  cols="50" rows="5" placeholder="Enter Your Query"></textarea>
            </div>
            <button class="btn" name="apply">Submit</button>

        </form>

    </div>

    <!-- Footer -->
    <div class="footer">
    <p>&reg; All Right Reserved  to Dr. DY Patil Institute of Technology</p>
      <a href="https://www.linkedin.com/in/kartik-gandhi-311b18216/"
        >Website Developed and Maintained by : Kartik Gandhi</a
      >
    </div>



</body>

</html>