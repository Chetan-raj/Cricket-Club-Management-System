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
          <li><a href="http://localhost//DBMSMiniProject/payment.php"> BACK </a></li>
          </ul>
      </div>
        <div class="msg">
         <h1>PAYMENT DETAILS</h1>
          
      </div>
        
   <div class="forms">
   <img src="paymenticon.jpg" class="avatar">
   <h2>
   <?php
    

    $query = $_POST['paymentid'];

    $query = htmlspecialchars($query);

    $paymentInfo = "SELECT payment_date AS paymentDate, amount AS Amount, player_id AS playerID, club_id AS clubID
                    FROM payment WHERE payment_id = '$query'";

    $result4 = mysqli_query($conn, $paymentInfo);

    $info4 = mysqli_fetch_assoc($result4);

    if (!empty($info4['paymentDate']))
    {
        $paymentDate = $info4['paymentDate'];
        $Amount = $info4['Amount'];
        $playerID = $info4['playerID'];
        $clubID = $info4['clubID'];
        
        $nameInfo = "SELECT first_name AS firstName, middle_name AS middleName, last_name AS lastName
                    FROM player WHERE player_id = '$playerID'";
        
        $result10 = mysqli_query($conn, $nameInfo);

        $info10 = mysqli_fetch_assoc($result10);
        
        $name = $info10['firstName'];
        $name .= " " . $info10['middleName'];
        $name .= " " . $info10['lastName'];
        
        echo "Player Name: $name <br><br>";
        echo "Payment Date: $paymentDate <br><br>";
        echo "Amount Paid: $Amount <br><br>";
        echo "Player ID: $playerID <br><br>";
        echo "Club ID: $clubID <br><br>";
        
    }

    else
        {
            echo "<script type='text/javascript'>alert('PAYMENT DETAILS NOT FOUND');</script>";
        header("refresh: 0.01; url=payment.php");
    }
?> 
</h2>
        </div>
        </header>
        </body>
</html>