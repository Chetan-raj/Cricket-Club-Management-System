<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket_club_management") or die(mysqli_error($con));

    $teamID=$_POST['teamid'];
    $teamName=$_POST['teamName'];
    $teamCaptain=$_POST['captainName'];
    $headCoach=$_POST['coachName'];

    $query="insert into teams(team_id,team_name,team_captain,head_coach) values('$teamID','$teamName','$teamCaptain','$headCoach')";  
    

    if(mysqli_query($con,$query))
    {
         echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addteamdetails.php");
    	mysqli_error($con);
    }
    ?>