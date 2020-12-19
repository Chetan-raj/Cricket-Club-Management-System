<?php
    $con = mysqli_connect("localhost", "root","", "cricket_club_management") or die(mysqli_error($con));

    $player=$_POST['playerid'];
    $sql="delete from player where player_id like '$player'";
    $sql2="delete from payment where player_id like '$player'";
    $sql3="delete from player_history where player_id like '$player'";
    

    if(mysqli_query($con,$sql)==true){
    $sql1 = "SELECT * from player where player_id like'$player'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{   
            $sql2="delete from payment where player_id like '$player'";
            $sql3="delete from player_history where player_id like '$player'";
    
            mysqli_query($con,$sql2);
            mysqli_query($con,$sql3);
            
            
            //if(mysqli_query($con,$sql)){
           //$sql1 = "SELECT * from player where playername='$player'";
 
 	 //  if(mysqli_query($con,$sql1))
   		// {
    	 echo "<script type='text/javascript'>alert('player deleted successfully!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    
}}
else{
	echo "<script language='javascript'>";
	echo "alert('ERROR IN DELETING')";
	echo "</script>";
    header("refresh: 0.01; url=deleteplayer.php");
    
}
mysqli_close($con);
?>    
