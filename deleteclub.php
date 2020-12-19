<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>deleting player details</title>
    <link rel="stylesheet" type="text/css" href="styledelete.css">
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
      <h1>Delete Club </h1>
      <form method="POST" action="deletingclub.php">
          <p>Club ID</p>
          <input type="number" name="clubid" placeholder="Enter ClubID" required>
          <input type="submit" name="submit" value="Delete">
          
      </form>
       
   </div>
    
</body>
</html>