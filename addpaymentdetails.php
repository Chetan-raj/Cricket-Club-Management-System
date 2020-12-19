<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding payment details of a new player</title>
    <link rel="stylesheet" type="text/css" href="styleaddpaymentdetails.css">
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
      <h1>Add Payment Details</h1>
      <form method="POST" action="insertpayment.php">
          <p>Payment ID</p>
          <input type="number" name="paymentid" placeholder="Enter PaymentID" required>
          <p>Amount</p>
          <input type="number" name="amount" placeholder="Enter Payment Amount" required>
          <p>Player ID</p>
          <input type="number" name="playerid" placeholder="Enter PlayerID" required>
          <p>Club ID</p>
          <input type="number" name="clubid" placeholder="Enter ClubID" required>
          <p>Payment Date</p>
          <input type="date" min="2018-01-01" name="paydate" placeholder="Enter Payment Date" required>
          <input type="submit" name="submit" value="Add">
          
      </form>
       
   </div>
    
</body>
</html>