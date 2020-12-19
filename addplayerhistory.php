<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding player history</title>
    <link rel="stylesheet" type="text/css" href="styleaddplayerhistory.css">
</head>
<body>
   <header>
      <div class="row">
          <ul class="main-nav">
            <li><a href="http://localhost//DBMSMiniProject/addplayer.php"> BACK </a></li>
             <li><a href="http://localhost//DBMSMiniProject/index.php"> SIGN OUT </a></li>
             
          </ul>
      </div>
</header>
   <div class="loginbox">
      <img src="adminpic.png" class="avatar">
      <h1>Add Player History</h1>
      <form method="POST" action="inserthistory.php">
          <p>Player ID</p>
          <input type="number" name="playerid" placeholder="Enter PlayerID" required>
          <p>Role</p>
          <input type="text" name="role" placeholder="Enter Player's Role" required>
          <p>Total Runs</p>
          <input type="number" name="runs" placeholder="Enter Total Runs scored">
          <p>Total Wickets</p>
          <input type="number" name="wickets" placeholder="Enter Total Wickets taken">
          <p>Catches</p>
          <input type="number" name="catches" placeholder="Enter Total number of catches taken">
          <input type="submit" name="submit" value="Add">
          
      </form>
       
   </div>
    
</body>
</html>