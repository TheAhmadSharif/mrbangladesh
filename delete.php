<?php 

	$id = $_GET['ID'];
	echo "$id" . "<br>";
	include 'connect.php';
	$sql  = "DELETE FROM info WHERE ID='$id'";


	if (mysqli_query($connection, $sql)) {
		echo "Delete Successfully " . "$id" . " No from the Database.";
	}
	else {
		mysqli_error($connection);
	}

	mysqli_close($connection);

	header( "refresh:1;url=result.php" );

 ?>
