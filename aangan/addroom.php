<?php

include_once("header.php");

?>


<h3 style="text-align:center"> Add room</h3>


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
        <input type="text" class="form-control" id="phone" name="phone">
      </div>
      <div class="form-group">
        <label for="duration">Duration of living</label>
        <input type="text" class="form-control" id="duration" name="duration">
      </div>
      <div class="form-group">
        <label for="city">City with you belong</label>
        <input type="text" class="form-control" id="city" name="city">
      </div>
      <div class="form-group">
        <label for="org">School/College/Oragnisation</label>
        <input type="text" class="form-control" id="org" name="org">
      </div>
      <div class="form-group">
        <label for="roomtype">Room Type</label>
        <input type="text" class="form-control" id="roomtype" name="roomtype">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>


<?php

extract($_POST);
if(isset($submit))
{
    if(!empty($name) and !empty($email) and !empty($phone) and !empty($duration) and !empty($city) and !empty($org) and !empty($roomtype))
    {
    $qry="insert into addroom set name='$name', email='$email',phone='$phone',duration='$duration', city='$city',org='$org',roomtype='$roomtype'";
    $data=mysqli_query($conn,$qry);
    header("location:dashboarduser.php");
    }

}
?>




<?php
include_once("footer.php");
?>


