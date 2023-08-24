<?php 

include_once("header.php");

extract($_POST);
if(isset($_POST['signup']))
{
  if(!empty($name) and !empty($email) and !empty($mob) and !empty($dob))
  {

  
  $name=$_POST["name"];
  $email=$_POST["email"];
  $mob=$_POST["mob"];
  $dob=$_POST["dob"];

$query="insert into user(name,email,mob,dob)  values ('$name','$email','$mob','$dob')";
$data=mysqli_query($conn,$query);
  }
}

?>
<div class="container pt-3">
<form method="POST">
  
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" >
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" >
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="mob" name="mob">
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob">
      </div>
      <button type="submit" class="btn btn-primary" name="signup">Submit</button>

    </form>
</div>