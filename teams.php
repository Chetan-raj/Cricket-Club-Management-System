<?php
include_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Player Details</title>
 <link rel="stylesheet" type="text/css" href="styleteams.css">
</head>
<body>
  <header>
      <div class="row">
          <ul class="main-nav">
             <li><a href="http://localhost//DBMSMiniProject/index.php"> HOME </a></li>
             <li><a href="http://localhost//DBMSMiniProject/players.php"> PLAYERS </a></li>
             <li><a href="http://localhost//DBMSMiniProject/club.php"> CLUB </a></li>
             <li class="active"><a href="http://localhost//DBMSMiniProject/teams.php"> TEAMS </a></li>
             <li><a href="http://localhost//DBMSMiniProject/payment.php"> PAYMENT </a></li>
             <li><a href="http://localhost//DBMSMiniProject/matches.php"> RESULTS </a></li>
             <li><a href="http://localhost//DBMSMiniProject/playerhistory.php"> PLAYER HISTORY </a></li>
             <li><a href="http://localhost//DBMSMiniProject/admin.php"> ADMIN </a></li>
              
          </ul>
      </div>
</header>

   <div class="loginbox">
      <img src="teamsicon.jpg" class="avatar">
      <h1>Team Details</h1>
      <form method="POST" action="teamdetails.php">
          <p>Team ID</p>
          <input type="text" name="teamid" placeholder="Enter TeamID" required>
          <input type="submit" name="submit" value="Submit">
      </form>
       
   </div>
    
</body>
</html>