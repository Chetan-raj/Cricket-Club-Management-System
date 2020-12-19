<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket_club_management") or die(mysqli_error($con));

    $clubID=$_POST['clubid'];
    $clubName=$_POST['clubName'];
    $president=$_POST['presidentName'];
    $teamID=$_POST['teamid'];
   
  

    $query="insert into club(club_id,club_name,president,team_id) values('$clubID','$clubName','$president','$teamID')";  
    

    if(mysqli_query($con,$query))
    {
         echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addclubdetails.php");
    	mysqli_error($con);
    }
    ?>