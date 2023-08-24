<?php 

include_once("header.php");

$query = "select * from user_qry order by firstname";
$data=mysqli_query($conn,$query);

?>

<h2 class="pt-5 pb-5" style="text-align:center">View Queries</h2>



<div class="container pt-5 ">
<table class="table table-dark">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Message</th>
</tr>
<?php
while($record=mysqli_fetch_array($data))
{
    echo "<tr>";
    echo "<td>".$record["firstname"]."</td>";
    echo "<td>".$record["lastname"]."</td>";
    echo "<td>".$record["address"]."</td>";
    echo "<td>".$record["email"]."</td>";
    echo "<td>".$record["mobile"]."</td>";
    echo "<td>".$record["message"]."</td>";
    
    echo "</tr>";

}
?>
</table>
</div>

<?php
include_once("footer.php");

?>