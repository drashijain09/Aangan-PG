<?php 

include_once("header.php");

$query = "select * from room  order by type";
$data=mysqli_query($conn,$query);

?>

<h2 class="pt-5 pb-5" style="text-align:center">Room Details</h2>



<div class="container pt-5 ">
<table class="table table-dark">
    <tr>
        <th>Type</th>
        <th>Detail</th>
        <th>Price</th>
        <th>Description</th>
        <th><?php echo "<a href='add.php' class='btn btn-danger'>Add"?></th>
</tr>
<?php
while($record=mysqli_fetch_array($data))
{
    echo "<tr>";
    echo "<td>".$record["type"]."</td>";
    echo "<td>".$record["detail"]."</td>";
    echo "<td>".$record["price"]."</td>";
    echo "<td>".$record["description"]."</td>";
    echo "<td><a href='update.php?id=$record[room_id]' class='btn btn-primary'>Update</td>"; 
    echo "<td><a href='delete.php?id=$record[room_id]' class='btn btn-danger'>Delete</td>"; 
    echo "</tr>";

}
?>
</table>
</div>

<?php
include_once("footer.php");

?>