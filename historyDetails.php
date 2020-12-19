<?php
    include_once "connection.php";
?>
  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>styling retrieved data</title>
        <link rel="stylesheet" type="text/css" href="stylehistoryDetails.css">
    </head>
    <body>
       <header>
      <div class="row">
          <ul class="main-nav">
          <li><a href="http://localhost//DBMSMiniProject/playerhistory.php"> BACK </a></li>
          </ul>
      </div>
        <div class="msg">
         <h1>CAREER INFO</h1>
          
      </div>
        
   <div class="forms">
   <img src="playerhistoryicon.png" class="avatar">
   <h2>
   <?php
    

    $query = $_POST['playerid'];

    $query = htmlspecialchars($query);

    $historyInfo = "SELECT *
                    FROM player_history WHERE player_id = '$query'";

    $result7 = mysqli_query($conn, $historyInfo);
   
    $info7 = mysqli_fetch_assoc($result7);

        $playerInfo = "SELECT first_name AS firstName, middle_name AS middleName, last_name AS lastName, date_of_birth AS dob, club_id AS clubid, team_id AS teamid
                    FROM player WHERE player_id = '$query'";

    $result6 = mysqli_query($conn, $playerInfo);

    $info6 = mysqli_fetch_assoc($result6);


    if (!empty($info6['firstName']))
    {
        $name = $info6['firstName'];
        $name .= " " . $info6['middleName'];
        $name .= " " . $info6['lastName'];
        $dob = $info6['dob'];
        $Role = $info7['role'];
        $totalRuns = $info7['total_runs'];
        $totalWickets = $info7['total_wickets'];
        $totalCatches = $info7['catches'];
        
        $date2 = date("d-m-Y");//today's date

        $date1 = new DateTime($dob);
        $date2 = new DateTime($date2);

        $interval = $date1->diff($date2);

        $Age = $interval->y;
        
        echo "Player Name: $name <br><br>";
        echo "Age: $Age <br><br>";
        echo "Role: $Role <br><br>";
        echo "Runs: $totalRuns <br><br>";
        echo "Wickets: $totalWickets <br><br>";
        echo "Catches: $totalCatches <br><br>";
        
    }
        else
        {
            echo "<script type='text/javascript'>alert('PLAYER NOT FOUND');</script>";
        header("refresh: 0.01; url=playerhistory.php");
    }
?> 
</h2>
        </div>
        </header>
        </body>
</html>