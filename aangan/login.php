<?php 
include_once("header.php");
?>

<div class="container">
    <h1>Login</h1>
    <form method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="unm" placeholder="Enter your username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="pass" placeholder="Enter your password">
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>

    <br>
      <a href="signup.php" target="_blank"> New User </a>
                             
  </div>

<?php  
extract($_POST);
if(isset($_POST['login']))
{
  if(!empty($unm) and !empty($pass))
  {
  $query= "select * from user where email='$unm' and mob='$pass'";
  $data = mysqli_query($conn,$query);
  $count=mysqli_num_rows($data);
  $r=mysqli_fetch_assoc($data);
  $name=$r["name"];
  $id=$r["id"];
  $email=$r["email"];
  $pwd=$r["mob"];
  $type=$r["type"];
  $image=$r["image"];
  echo $type;
echo $email ;
echo $pwd;
echo $count;


if($count == 1 and $type==1)
{

  $_SESSION["id"]=$id;
  $_SESSION["name"]=$name;
  $_SESSION["image"]=$image;
  echo $_SESSION["name"],$_SESSION["image"];
header("location:dashboardadmin.php");
}

else if($count == 1 and $type==0)
{

  $_SESSION["id"]=$id;
  $_SESSION["name"]=$name;
  $_SESSION["image"]=$image;
  echo $_SESSION["name"],$_SESSION["image"];
header("location:dashboarduser.php");
}
else{
 header("location:login.php");
}
}
}

?>