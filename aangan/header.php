<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "aangan");

include_once("fileupload.php");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Paying Guest</title>
    </head>
  <body>


    <!-- Navigation Bar  -->

    <section>    
     <nav class="navbar navbar-expand-md bg-dark navbar-dark">
     <a class="navbar-brand" href="#">
                <img src="Images/logo1.jpg" alt="logo" style="width: 100px;">
            </a>


    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsiblenavbar">
            <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="collapsiblenavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php"> About us</a></li>
                <li class="nav-item"><a class="nav-link" href="contactus.php"> Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#ourservices"> Our services</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php"> Login/Signup</a></li>
                <li class="nav-item"><a class="nav-link"><form method="post"><input type="submit" value="Logout" name="logoutbtn"/></form></a></li>

          
            </ul>

        </div>                   
    </nav> 
  </section>

  <?php
extract($_POST);
if(isset($logoutbtn))
{
  session_unset();
  session_destroy();
  header("location:index.php");
}

  ?>