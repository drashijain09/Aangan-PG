<?php
include_once("header.php");

$id=$_GET["id"];

$query="select * from room where room_id=$id";
$data=mysqli_query($conn,$query);
$record=mysqli_fetch_assoc($data);

extract($_POST);
if(isset($update))
{
    $qry="update room set type='$type', detail='$detail',price='$price' , description='$desc' where room_id=$id";
    $data=mysqli_query($conn,$qry);
     header("location:dashboardadmin.php");

}
?>


<section style="pt-5">
<div class="container pt-4">
    <form method="post">
        <div class="form-group">
            Type<input type="text" class="form-control" name="type" value="<?php echo $record['type']; ?>">
        </div>
        <div class="form-group">
            Detail<input type="text" class="form-control" name="detail" value="<?php echo $record['detail']; ?>" >
        </div>
        <div class="form-group">
            Price<input type="text" class="form-control" name="price" value="<?php echo $record['price']; ?>">
        </div>
        <div class="form-group">
            Description<input type="text" class="form-control" name="desc" value="<?php echo $record['description']; ?>">
        </div>
        
        <input type="submit" value="update" name="update" class="btn btn-primary">
    </form>
</div>
</section>

<?php
include_once("footer.php");
?>