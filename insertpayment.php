<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket_club_management") or die(mysqli_error($con));

    $paymentID=$_POST['paymentid'];
    $payDate=$_POST['paydate'];
    $amount=$_POST['amount'];
    $playerID=$_POST['playerid'];
    
    $clubID=$_POST['clubid'];
  

    $tdate = date("Y")."-".date("m")."-".date("d");
    if($payDate>$tdate)
    {
        echo "<script type='text/javascript'>alert('Invalid Date');</script>";
        header("refresh: 0.01; url=addpaymentdetails.php");
    	mysqli_error($con);
    }
    else
    {
    $query="insert into payment(payment_id,payment_date,amount,player_id,club_id) values('$paymentID','$payDate','$amount','$playerID','$clubID')";  
    

    if(mysqli_query($con,$query))
    {
         echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addpaymentdetails.php");
    	mysqli_error($con);
    }
    }
    ?>