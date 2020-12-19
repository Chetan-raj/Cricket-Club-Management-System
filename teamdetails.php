<?php
    include_once "connection.php";
?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>styling retrieved data</title>
        <link rel="stylesheet" type="text/css" href="styleteamdetails.css">
    </head>
    <body>
       <header>
      <div class="row">
          <ul class="main-nav">
          <li><a href="http://localhost//DBMSMiniProject/teams.php"> BACK </a></li>
          </ul>
      </div>
        <div class="msg">
         <h1>TEAM DETAILS</h1>
          
      </div>
        
   <div class="forms">
   <img src="teamsicon.jpg" class="avatar">
   <h2>
   <?php
    

    $query = $_POST['teamid'];

    $query = htmlspecialchars($query);

    $teamInfo = "SELECT team_name AS teamName, team_captain AS teamCaptain, head_coach AS headCoach
                    FROM teams WHERE team_id = '$query'";

    $result3 = mysqli_query($conn, $teamInfo);

    $info3 = mysqli_fetch_assoc($result3);

    if (!empty($info3['teamName']))
    {
        $name = $info3['teamName'];
        $teamCaptain = $info3['teamCaptain'];
        $headCoach = $info3['headCoach'];


        echo "Team Name: $name <br><br>";
        echo "Team Captain: $teamCaptain <br><br>";
        echo "Head Coach: $headCoach <br><br>";
        
    }
       else
        {
            echo "<script type='text/javascript'>alert('TEAM NOT FOUND');</script>";
        header("refresh: 0.01; url=teams.php");
    }
?>
</h2>
        </div>
        </header>
        </body>
</html> 