<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding club</title>
    <link rel="stylesheet" type="text/css" href="styleplayerregister.css">
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
      <form method="POST" action="addclubdetails.php">
          <input type="submit" name="submit6" value="Add Club Details">
          
      </form>
      <form method="POST" action="addteamdetails.php">
      <input type="submit" name="submit4" value="Add Team Details">
       </form>
       
   </div>
    
</body>
</html>