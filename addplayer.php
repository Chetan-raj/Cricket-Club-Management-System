<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding player</title>
    <link rel="stylesheet" type="text/css" href="styleaddplayer.css">
</head>
<body>
   <header>
      <div class="row">
          <ul class="main-nav">
            <li><a href="http://localhost//DBMSMiniProject/playerregister.php"> BACK </a></li>
             <li><a href="http://localhost//DBMSMiniProject/index.php"> SIGN OUT </a></li>
             
             
          </ul>
      </div>
</header>
   <div class="loginbox">
      <img src="adminpic.png" class="avatar">
      <h1>Welcome Admin</h1>
      <form method="POST" action="addplayerdetails.php">
          <input type="submit" name="submit3" value="Add Player Details">
          
      </form>
      <form method="POST" action="addpaymentdetails.php">
      <input type="submit" name="submit4" value="Add Payment Details">
       </form>
       <form method="POST" action="addplayerhistory.php">
      <input type="submit" name="submit5" value="Add Player History">
       </form>
       
   </div>
    
</body>
</html>