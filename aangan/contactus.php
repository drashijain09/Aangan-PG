<?php
include_once("header.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/8b419c6239.js" crossorigin="anonymous"></script>

    <style type="text/css">
        body{
          background: linear-gradient(white,lightblue);
        }

        #div1{
            background-image: url(Images/contactus.jpg);
            height: 350px;
            width: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        #divh2{
        position: absolute;
        top: 35%;
        left: 47%;
        background-color: black;
        color: white;
        }
    </style>
  </head>
  <body>
     <section class="pt-3">
        <div id="div1">
            <div id="divh2">
                <p style="font-size: 50px;">Contact Us</p>
            </div>
            

        </div>

     </section>

     <section>
        <div class="container pt-5 pb-5">
        <div class="card-deck pt-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-header"><img src="Images/loctionpin.jpg" class="rounded-circle" height="150px" width="150px"></div>
                    <p class="card-text"><h6 style="font-size: 25px;"><b>Aangan-A home away from home</b></h6>
                    <p style="font-size:18px;">Rusalli Chouraha,Near Karond Chouraha, Karond, Bhopal, Madhya Pradesh, 462038</p>
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body text-center">
                    <div class="card-header"><img src="Images/phone.jpg" class="rounded-circle" height="150px" width="150px"></div>
                    <p class="card-text"><h6 style="font-size: 32px;"><b>Phone</b></h6>
                        <p style="font-size:18px;">+91-9826058891 <br>+91-9111644510</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body text-center">
                    <div class="card-header"><img src="Images/email.png" class="rounded-circle" height="150px" width="150px"></div>
                    <p class="card-text"><h6 style="font-size: 32px;"><b>Email</b></h6>
                        <p style="font-size:18px;">aangan@gmail.com <br>drashijain161@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
     </section>


<section>
    <div>
        <hr>
        <h4 style="text-align: center;">Get in Touch</h4>
        <hr style="width: 50%; color: black;">


        <div class="container">
            <div class="col">
                <form method="Post">
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="txt1" ></label><input type="text" name="firstname" id="txt1" class="form-control" placeholder="First Name">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="txt2" ></label><input type="text" name="lastname" id="txt2" class="form-control" placeholder="Last Name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="txt3" ></label><input type="text" name="address" id="txt3" class="form-control" placeholder="Address">
                    </div>
                </div>
        
        
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="txt1" > </label><input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="txt2" ></label><input type="text" name="mobile" id="txt2" class="form-control" placeholder="Mobile Number">
                    </div>
                </div>
        
                    <div class="form-group col">
                        <label for="txt6" ></label><textarea id="text" rows="10" name="message" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-center"><button type="submit" class="btn-dark" name="sendmsg">Send Message</button> </div>
                        
                    </div>
    </form>      
        </div>
        </div>
    </div>
</section>



<?php
extract($_POST);
if(isset($sendmsg))
{
    
    if(!empty($firstname) and !empty($lastname) and !empty($address) and !empty($email) and !empty($mobile) and !empty($message))
    {

   
    $qry="insert into user_qry set firstname='$firstname',lastname='$lastname',address='$address',email='$email',mobile='$mobile',message='$message'";
   
    $data=mysqli_query($conn,$qry);
    header("location:index.php");
    }

}



?>


<?php
include_once("footer.php");
?>