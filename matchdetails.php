<?php
    include_once "connection.php";
?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>styling retrieved data</title>
        <link rel="stylesheet" type="text/css" href="stylematchdetails.css">
    </head>
    <body>
       <header>
      <div class="row">
          <ul class="main-nav">
          <li><a href="http://localhost//DBMSMiniProject/matches.php"> BACK </a></li>
          </ul>
      </div>
        <div class="msg">
         <h1>SCORECARD</h1>
          
      </div>
        
   <div class="forms">
   <img src="matchesicon.jpg" class="avatar">
   <h2>
   <?php
    

    $query = $_POST['matchid'];

    $query = htmlspecialchars($query);

    $matchInfo = "SELECT *
                    FROM matches WHERE match_id = '$query'";

    $result5 = mysqli_query($conn, $matchInfo);

    $info5 = mysqli_fetch_assoc($result5);
    
    $resultInfo = "SELECT *
                    FROM plays_matches WHERE match_id = '$query'";

    $result8 = mysqli_query($conn, $resultInfo);

    $info8 = mysqli_fetch_assoc($result8);

    if (!empty($info5['team1']))
    {
        $Team1 = $info5['team1'];
        $Team2 = $info5['team2'];
        $dom = $info5['date_of_match'];
        $Venue = $info5['venue'];
        $BestPerformer = $info5['best_performer'];
        $Umpire = $info5['umpire'];
        $Result = $info8['result'];

        
        echo "   $Team1    vs    $Team2 <br><br>";
        echo "Played on: $dom <br><br>";
        echo "Venue: $Venue <br><br>";
        echo "Man of the Match: $BestPerformer <br><br>";
        echo "Umpire: $Umpire <br><br>";
        echo "Result: $Result <br><br>";
        
    }

    else
        {
            echo "<script type='text/javascript'>alert('MATCH NOT FOUND');</script>";
        header("refresh: 0.01; url=matches.php");
    }
?>
</h2>
        </div>
        </header>
        </body>
</html> 