<?php

include_once("header.php");

$query = "select * from user where id = '$_SESSION[id]'";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($data);
?>


<section>
    <br>
<h1 style="text-align:center">update profile</h1>
</section>



<section style="pt-5">
    <form method="post" enctype="multipart/form-data">
    <table border="2px" width="500px" align="center" bgcolor="silver" cellpadding="10px" >
        <tr><td>User Name</td><td><input type="text" name="unm" value="<?php echo $row['name']; ?>"/></td></tr>
        <tr><td>Mobile number</td><td><input type="text" name="mob" value="<?php echo $row['mob']; ?>"/></td></tr>
        <tr><td>User Email</td><td><input type="email" name="mailid" value="<?php echo $row['email']; ?>"/></td></tr>
        <tr><td>Date of birth</td><td><input type="date" name="dob" value="<?php echo $row['dob']; ?>"/></td></tr>
        <tr><td align="center" colspan=2><input type="submit" name="updBtn" value="Update"></td></tr>
    </table>
    </form>
</section>

<?php
extract($_POST);
if(isset($updBtn))
{
$qry = "update user set name = '$unm', email='$mailid', mob='$mob', dob='$dob'  where id=$_SESSION[id]";
$c=mysqli_query($conn,$qry);
if($c)
    echo "Update Successful";

}


?> 

<?php
include 'footer.php';
 ?>