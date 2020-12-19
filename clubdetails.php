<?php
    include_once "connection.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>styling retrieved data</title>
        <link rel="stylesheet" type="text/css" href="styleclubdetails.css">
    </head>
    <body>
       <header>
      <div class="row">
          <ul class="main-nav">
          <li><a href="http://localhost//DBMSMiniProject/club.php"> BACK </a></li>
          </ul>
      </div>
        <div class="msg">
         <h1>CLUB DETAILS</h1>
          
      </div>
        
   <div class="forms">
   <img src="clubicon.jpg" class="avatar">
   <h2>
    
    <?php

    $query = $_POST['clubid'];

    $query = htmlspecialchars($query);

    $clubInfo = "SELECT club_name AS clubName, president AS President, team_id AS teamid, no_of_players AS Num
                    FROM club WHERE club_id = '$query'";

    $result2 = mysqli_query($conn, $clubInfo);

    $info2 = mysqli_fetch_assoc($result2);

    if (!empty($info2['clubName']))
    {
        $name = $info2['clubName'];
        $President = $info2['President'];
        $teamid = $info2['teamid'];
        $Num = $info2['Num'];

        echo "Club Name: $name <br><br>";
        echo "Club President: $President <br><br>";
        echo "Team ID: $teamid <br><br>";
        echo "Number of Players: $Num <br><br>";
        
    }

    else
        {
            echo "<script type='text/javascript'>alert('CLUB NOT FOUND');</script>";
        header("refresh: 0.01; url=club.php");
    }
?> 
       </h2>
        </div>
        </header>
        </body>
</html>