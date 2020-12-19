<?php
    $con = mysqli_connect("localhost", "root","", "cricket_club_management") or die(mysqli_error($con));

    $player=$_POST['clubid'];
    $cid=$_POST['clubid'];
    $sql="CALL `sp_delete_club`('".$_POST['clubid']."')";

    
    

    if(mysqli_query($con,$sql)==true){
    $sql1 = "SELECT * from club where club_id like'$player'";
 	$res=mysqli_query($con,$sql1);
	    if(mysqli_num_rows($res)==0)
		{   
            //if(mysqli_query($con,$sql)){
           //$sql1 = "SELECT * from player where playername='$player'";
 
 	 //  if(mysqli_query($con,$sql1))
   		// {
    	 echo "<script type='text/javascript'>alert('Club deleted successfully!!');</script>";
      header("refresh: 0.01; url=playerregister.php");
    
}}
else{
	echo "<script language='javascript'>";
	echo "alert('ERROR IN DELETING')";
	echo "</script>";
    header("refresh: 0.01; url=deleteclub.php");
    
}
mysqli_close($con);
?>    
