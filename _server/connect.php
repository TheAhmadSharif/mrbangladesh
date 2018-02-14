<?php 
		$connection = mysqli_connect("localhost", "root", "admin", "mrBD");
	 	$sql = "SELECT * FROM info ORDER BY total_score DESC";
	 	$result = mysqli_query($connection, $sql);

 ?>
