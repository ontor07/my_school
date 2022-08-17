<?php
include("../database/connection.php");
$db = new database();
session_name("admin");
session_start();
if(isset($_SESSION['email']))
{
  echo "<script>location='../backend/'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Admin Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--Stylesheet-->
    
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>ADMIN LOGIN</h3>
        <?php
        $email= isset($_POST['email'])?$_POST['email']:'';
        $password=isset($_POST['password'])?$_POST['password']:'';
      if(isset($_POST["login"]))
      {
        $email = mysqli_real_escape_string($db->link,$email);
					$password = mysqli_real_escape_string($db->link,md5($password));
      
        $sql= $db->link->query("SELECT * FROM `create_admin` WHERE `email`='$email' AND `password`='$password' ");
        if(mysqli_num_rows($sql) > 0 )
        {
          
          $fetch=$sql->fetch_assoc();
          $_SESSION['admin_id']= $fetch['id'];
          $_SESSION['admin_name']= $fetch['user_name'];
          $_SESSION['email']=$fetch['email'];
          $_SESSION['image']= $fetch['image'];
          $_SESSION['type']= $fetch['user_type'];
          $_SESSION['admin_type']= $fetch['admin_type'];
          $_SESSION['message'];
          if($_SESSION['type'] == 1)
          {
            echo"<script>location='../backend/'</script>";
          }
          else
          {
            echo "<div class='alert alert-danger'>You Are Not Active User</div>";
          }
        }
        else
        {
          echo "<div class='alert alert-danger'>These Credential Does Not Match to Our Record</div>";
        }
      }
        ?>

        <label for="username">Email</label>
        <input type="text" placeholder="Email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <button type ="submit" name="login">Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>
</html>
