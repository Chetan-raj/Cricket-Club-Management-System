<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "cricket_club_management") or die(mysqli_error($con));

    $playerID=$_POST['playerID'];
    $firstName=$_POST['firstName'];
    $middleName=$_POST['middleName'];
    $lastName=$_POST['lastName'];
    
    $dob=$_POST['DOB'];
    $clubID=$_POST['clubID'];
    $teamID=$_POST['clubID'];
  
     /*$date2 = date("d-m-Y");//today's date

        $date1 = new DateTime($dob);
        $date2 = new DateTime($date2);

        $interval = $date1->diff($date2);

        $age = $interval->y;

        if ($age > 35)
        {
            echo "<script type='text/javascript'>alert('Age of a player cannot be more than 35 years');</script>";
        header("refresh: 0.01; url=addplayerdetails.php");
    	mysqli_error($con);
        }

        if ($age < 7)
        {
            echo "<script type='text/javascript'>alert('Age of a player cannot be less than 7 years');</script>";
        header("refresh: 0.01; url=addplayerdetails.php");
    	mysqli_error($con);
        }*/
        $result=mysqli_query($con,"select * from club where club_id='$clubID' limit 1");

        if(mysqli_num_rows($result)==1)
        {
    $query="insert into player(player_id,first_name,middle_name,last_name,date_of_birth,club_id,team_id) values('$playerID','$firstName','$middleName','$lastName','$dob','$clubID','$teamID')";
    if(mysqli_query($con,$query))
    {
         echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    }
    else
    {
        echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=addplayerdetails.php");
    	mysqli_error($con);
    }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Club $clubID not formed');</script>";
        header("refresh: 0.01; url=addplayerdetails.php");
    	mysqli_error($con);
    }
    ?>