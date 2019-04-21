<?php
	
	
	$conn = mysqli_connect("localhost","root","","travelmate");

	function getplace(){
		global $conn;
	$sql="SELECT * FROM place ";

	$result=$conn->query($sql);

	// echo $result;
	// die();

	while($row=mysqli_fetch_array($result)){
	    $img= $row['Image'];
		$name=$row['place_name'];
		//echo($img); 
		echo "<a href='#' class='tour-entry animate-box'>
					<div class='tour-img' style='background-image: url($img);'>
					</div>
					<span class='desc'>
						<p class='star'><span><h2>$name</h2></span></p>
					
						</span>
					</span>
				</a>";
	}
}
	
?>