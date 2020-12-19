<?php
    
include_once "connection.php";

    if(isset($_POST['username'])){
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $result=mysqli_query($conn,"select * from admin where User='$uname' AND Password='$password' limit 1");
        
        if(mysqli_num_rows($result)==1){
            header("Location: playerregister.php");
            exit();
        }
        else{
            echo "<script type='text/javascript'>alert('INCORRECT USERNAME OR PASSWORD');</script>";
        header("refresh: 0.01; url=admin.php");
    	mysqli_error($con);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
  <header>
      <div class="row">
          <ul class="main-nav">
             <li><a href="http://localhost//DBMSMiniProject/index.php"> HOME </a></li>
             <li><a href="http://localhost//DBMSMiniProject/players.php"> PLAYERS </a></li>
             <li><a href="http://localhost//DBMSMiniProject/club.php"> CLUB </a></li>
             <li><a href="http://localhost//DBMSMiniProject/teams.php"> TEAMS </a></li>
             <li><a href="http://localhost//DBMSMiniProject/payment.php"> PAYMENT </a></li>
             <li><a href="http://localhost//DBMSMiniProject/matches.php"> RESULTS </a></li>
             <li><a href="http://localhost//DBMSMiniProject/playerhistory.php"> PLAYER HISTORY </a></li>
             <li class="active"><a href="http://localhost//DBMSMiniProject/admin.php"> ADMIN </a></li>
              
          </ul>
      </div>
</header>

   <div class="loginbox">
      <img src="adminpic.png" class="avatar">
      <h1>Login Here</h1>
      <form method="POST" action="">
          <p>Username</p>
          <input type="text" name="username" placeholder="Enter Username" required>
          <p>Password</p>
          <input type="password" name="password" placeholder="Enter Password" required>
          <input type="submit" name="submit" value="Login">
      </form>
       
   </div>
    
</body>
</html>