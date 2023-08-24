<?php 

include_once("header.php");

$query = "select * from room  order by type";
$data=mysqli_query($conn,$query);

?>

<h2 class="pt-3 pb-5" style="text-align:center">Admin Page</h2>

<div class="container" style="text-align:center">
  <div class="row">
    <div class="col-sm">
      <form method="Post"><button type="submit" class= "btn btn-primary" name="viewroom"> View Room Details </button></form>
    </div>
    <div class="col-sm">
    <form method="Post"><button type="submit" class= "btn btn-primary" name="bookroom"> View Book Room</button></form>
    </div>
    <div class="col-sm">
    <form method="Post"><button type="submit" class= "btn btn-primary" name="query1"> View Queires </button></form>
    </div>
  </div>
</div>

<div class="container pt-5 pb-5" style="text-align:center">
<img src="Images/admin.png" style="height:600px">
</div>

<?php

extract($_POST);
if(isset($viewroom))
{
    header("location:viewroom.php");
}


?>


<?php

extract($_POST);

if(isset($bookroom))
{
    header("location:viewbook.php");
}


?>

<?php
extract($_POST);
if(isset($query1))
{
    header("location:viewqry.php");
}

?>

<?php
include_once("footer.php");

?>