<?php
include_once("header.php");
include_once("fileupload.php");

extract($_POST);
if(isset($insert))
{
    echo $imgpath=uploadProfileImage();
    if(!empty($type) and !empty($detail) and !empty($price))
    {

   
    $qry="insert into room set type='$type', detail='$detail',price='$price',image='$imgpath', description='$desc'";
    $data=mysqli_query($conn,$qry);
     header("location:dashboardadmin.php");
    }

}





?>




<section style="pt-5">
<div class="container pt-4 pb-4">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            Type<input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
            Detail<input type="text" class="form-control" name="detail">
        </div>
        <div class="form-group">
            Price<input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            Description<input type="text" class="form-control" name="desc">
        </div>
        <div class="form-group">
        Room Photo <input type="file" name="roomimg">
        </div>
        <input type="submit" value="Insert" name="insert" class="btn btn-primary">
    </form>
</div>
</section>





<?php
include_once("footer.php");
?>