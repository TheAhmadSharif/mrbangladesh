<?php 
		// ini_set('display_errors', 'On');
	 	$limit = 10;  
		$connection = mysqli_connect("localhost", "root", "admin", "mrBD");
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
		$start_from = ($page-1) * $limit;  
		$sql = "SELECT * FROM info ORDER BY total_score DESC LIMIT $start_from, $limit";
	 	$result = mysqli_query($connection, $sql);
	 	$count_sql = "SELECT COUNT(*) as total FROM info";
	 	$query_counut = mysqli_query($connection,$count_sql);
		$res = mysqli_fetch_object($query_counut);
		$total_records = $res->total;
		// echo $total_records;


 ?>

