<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket_club_management") or die(mysqli_error($con));

    $playerID=$_POST['playerid'];
    $role=$_POST['role'];
    $totalRuns=$_POST['runs'];
    $totalWickets=$_POST['wickets'];
    
    $totalCatches=$_POST['catches'];
  

    $query="insert into player_history(player_id,role,total_runs,total_wickets,catches) values('$playerID','$role','$totalRuns','$totalWickets','$totalCatches')";  
    

    if(mysqli_query($con,$query))
    {
         echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addplayerhistory.php");
    	mysqli_error($con);
    }
    ?>