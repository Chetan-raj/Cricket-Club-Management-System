<?php
    include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>styling retrieved data</title>
    <link rel="stylesheet" type="text/css" href="styleplayerdetails.css">
</head>

<body>
    <header>
        <div class="row">
            <ul class="main-nav">
                <li><a href="http://localhost//DBMSMiniProject/players.php"> BACK </a></li>
            </ul>
        </div>
        <div class="msg">
            <h1>PLAYER DETAILS</h1>

        </div>

        <div class="forms">
            <img src="usericon.png" class="avatar">
            <h2>
                <?php
    

    $query = $_POST['playerid'];

    $query = htmlspecialchars($query);

    $playerInfo = "SELECT first_name AS firstName, middle_name AS middleName, last_name AS lastName, date_of_birth AS dob, club_id AS clubid, team_id AS teamid
                    FROM player WHERE player_id = '$query'";

    $result1 = mysqli_query($conn, $playerInfo);

    $info1 = mysqli_fetch_assoc($result1);

    if (!empty($info1['firstName']))
    {
        $name = $info1['firstName'];
        $name .= " " . $info1['middleName'];
        $name .= " " . $info1['lastName'];
        $dob = $info1['dob'];
        $clubid = $info1['clubid'];
        $teamid = $info1['teamid'];
        
        $date2 = date("d-m-Y");//today's date

        $date1 = new DateTime($dob);
        $date2 = new DateTime($date2);

        $interval = $date1->diff($date2);

        $Age = $interval->y;


        echo "Player Name: $name <br><br>";
        echo "Date of Birth: $dob <br><br>";
        echo "Age: $Age <br><br>";
        echo "Club ID: $clubid <br><br>";
        echo "Team ID: $teamid <br><br>";
        
    }

     else
        {
           echo "<script type='text/javascript'>alert('PLAYER NOT FOUND');</script>";
                 header("refresh: 0.01; url=players.php");
        
    }
?>
            </h2>
        </div>
    </header>
</body>

</html>
