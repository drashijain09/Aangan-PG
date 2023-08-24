<?php 

include_once("header.php");

$query = "select * from addroom  order by name";
$data=mysqli_query($conn,$query);

?>

<h2 class="pt-5 pb-5" style="text-align:center">Room Booked Details</h2>



<div class="container pt-5 ">
<table class="table table-dark">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Duration</th>
        <th>City</th>
        <th>Organisation</th>
        <th>Type of Room Book</th>
</tr>
<?php
while($record=mysqli_fetch_array($data))
{
    echo "<tr>";
    echo "<td>".$record["name"]."</td>";
    echo "<td>".$record["email"]."</td>";
    echo "<td>".$record["phone"]."</td>";
    echo "<td>".$record["duration"]."</td>";
    echo "<td>".$record["city"]."</td>";
    echo "<td>".$record["org"]."</td>";
    echo "<td>".$record["roomtype"]."</td>";
    
    echo "</tr>";

}
?>
</table>
</div>

<?php
include_once("footer.php");

?>