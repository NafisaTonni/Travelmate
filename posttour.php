<?php
include('Api/connection.php');
  
if(!isset($_SESSION))
{
	session_start();
}
	 $location= $_POST['location'];
	 $tourdes= $_POST['description'];
	 $startdate= $_POST['startdate'];
	 $enddate= $_POST['enddate'];
	 $user_id=$_SESSION['userid'];	
    /*$sql= "INSERT INTO tour(tour_name, tour_description,Start_Date,End_Date,user_id) VALUES ('$location','$tourdes','$startdate','$enddate','$user_id')"; */
	$sql= "INSERT INTO  tour(tour_name,tour_description,Start_Date,End_Date,u_id) VALUES ('$location','$tourdes','$startdate','$enddate','$user_id')";
	//echo("end");	
    $conn->query($sql);
?>