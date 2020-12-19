<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding player details</title>
     <link rel="stylesheet" type="text/css" href="styleaddplayerdetails.css">
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
      <h1>Add Player Details</h1>
      <form method="POST" action="insertplayer.php">
          <p>Player ID</p>
          <input type="number" name="playerID" placeholder="Enter PlayerID" required>
          <p>Club ID</p>
          <input type="number" name="clubID" placeholder="Enter ClubID" required>
          <p>First Name</p>
          <input type="text" name="firstName" placeholder="Enter Player's First Name" required>
          <p>Middle Name</p>
          <input type="text" name="middleName" placeholder="Enter Player's Middle Name" >
          <p>Last Name</p>
          <input type="text" name="lastName" placeholder="Enter Player's Last Name" required>
          <p>Date Of Birth</p>
          <input type="date" min="1984-01-01" max="2009-01-01" name="DOB" placeholder="Enter Player's DOB" required>
          
          <input type="submit" name="sumbit" value="Add">
      </form>
       
   </div>
    
</body>
</html>

