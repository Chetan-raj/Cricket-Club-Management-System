<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding club details</title>
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
      <h1>Add Club Details</h1>
      <form method="POST" action="insertclub.php">
          <p>Club ID</p>
          <input type="number" name="clubid" placeholder="Enter ClubID" required>
          <p>Club Name</p>
          <input type="text" name="clubName" placeholder="Enter Club Name" required>
          <p>President Name</p>
          <input type="text" name="presidentName" placeholder="Enter President Name" required>
          <p>Team ID</p>
          <input type="number" name="teamid" placeholder="Enter TeamID" required>
          <input type="submit" name="sumbit" value="Add">
      </form>
       
   </div>
    
</body>
</html>

