<?php
include_once("header.php");

$id=$_GET["id"];
echo $id;

$query="delete from room where room_id=$id";
$res=mysqli_query($conn,$query);
header("location:dashboardadmin.php");
?>