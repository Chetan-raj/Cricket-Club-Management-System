<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding team details</title>
     <link rel="stylesheet" type="text/css" href="styleaddclubdetails.css">
</head>
<body>
   <header>
      <div class="row">
          <ul class="main-nav">
            <li><a href="http://localhost//DBMSMiniProject/addclub.php"> BACK </a></li>
             <li><a href="http://localhost//DBMSMiniProject/index.php"> SIGN OUT </a></li>
             
          </ul>
      </div>
</header>
   <div class="loginbox">
      <img src="adminpic.png" class="avatar">
      <h1>Add Team Details</h1>
      <form method="POST" action="insertteam.php">
          <p>Team ID</p>
          <input type="number" name="teamid" placeholder="Enter TeamID" required>
          <p>Team Name</p>
          <input type="text" name="teamName" placeholder="Enter Team Name" required>
          <p>Captain Name</p>
          <input type="text" name="captainName" placeholder="Enter Captain Name" required>
          <p>Head Coach</p>
          <input type="text" name="coachName" placeholder="Enter Coach Name" required>
          <input type="submit" name="submit" value="Add">
      </form>
       
   </div>
    
</body>
</html>

