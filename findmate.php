<?php

	include ('Api/connection.php');

	$location = $_POST['location'];

	$in_date =$_POST['in_date'];

	$out_date=$_POST['out_date'];

	$sql = "SELECT * FROM( SELECT * FROM tour  INNER JOIN users  ON tour.u_id = users.User_ID ) AS  T
            WHERE T.tour_name = '$location' AND T.Start_Date <= '$in_date' AND T.End_Date >= '$out_date'";

           // echo $sql.'<br>';
      $result= $conn->query($sql);      
      	while($row= mysqli_fetch_assoc($result)){

   
            if(mysqli_num_rows( $result) >0){

                             
                              echo ($name="Name: ". $row['Username'] 
                            
                               .$tname="    place: " .$row['tour_name']
                             
                               .$des= "     Description: ".$row['tour_description']
                             
                               .$indate="   From: ". $row['Start_Date']
                             
                               .$outdate="  To: ".$row['End_Date']);
               
            }
            else{
                  echo "<script> alert('There is no tours.  ');
                  location='index.php';
                  </script>";
      
            }
      }
            //echo "<script>alert('done');window.location.replace('mates.php')</script>";
?>