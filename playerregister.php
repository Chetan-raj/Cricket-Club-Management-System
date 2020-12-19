<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registering players/clubs using buttons</title>
    <link rel="stylesheet" type="text/css" href="styleaddplayer.css">
    
</head>
<body>
   <header>
      <div class="row">
          <ul class="main-nav">
             <li><a href="http://localhost//DBMSMiniProject/index.php"> SIGN OUT </a></li>
             
          </ul>
      </div>
</header>
   <div class="loginbox">
      <img src="adminpic.png" class="avatar">
      <h1>Welcome Admin</h1>
      <form method="POST" action="addplayer.php">
          <input type="submit" name="submit1" value="Add Player">
          
      </form>
      <form method="POST" action="addclub.php">
      <input type="submit" name="submit2" value="Add Club">
       </form>
       
       <form method="POST" action="deleteplayer.php">
      <input type="submit" name="submit3" value="Delete Player">
       </form>
       
       <form method="POST" action="deleteclub.php">
      <input type="submit" name="submit4" value="Delete Club">
       </form>
       
   </div>
    
</body>
</html>