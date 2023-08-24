<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "aangan");
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
                <li class="nav-item"><a class="nav-link" href="settings.php">Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

          
            </ul>
        </div>                    
    </nav> 
  </section>



<?php


$query = "select * from room";
$data=mysqli_query($conn,$query);

?>


<div class="container pt-5 pb-5">
            <h2 class="text-center">Guest Rooms</h2>
            <hr width="40%" color="black">
            
            
        
            <div class="row">   
        <?php    
        while ( $record = mysqli_fetch_array($data))
        {
        ?>
            <div class="col-4 pt-3">
            <div class="card">
                <div class="card-body text-center">
                     <div class="card-header"><img src="<?php echo $record['image'];?>" class="img-thumbnail" height="250px"  width="185px">
                    </div>
                     
                    <p class="card-text"><h5><?php echo $record['type'];?></h5>
                    <p><?php echo $record['detail'];?></p>

                    <P><?php echo "Price - " . $record['price'];?></p>

                    <button type="button" class="btn-info"> Know More</button>
                    <a href='addroom.php' class='btn btn-primary btn-sm'>Add Room</a>
                
                </div>
            </div>
        </div>

    <?php
        }
    ?>
    </div>
    </div>


  

    <?php
    include_once("footer.php");
    ?>