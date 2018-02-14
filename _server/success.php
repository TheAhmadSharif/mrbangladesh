
<?php 
	$connection = mysqli_connect("localhost", "root", "admin", "mrBD");
	

	if ($connection === false) {
		die ("Error:" . mysqli_connect_error());
	}

	$Name = $_POST['full_name'];
	$total_score = $_POST['total_score'];

	echo $total_score; 

	echo "<br>";
	echo $Name;
	echo "<br>";
	
	$sql = "INSERT INTO info(ID, Full_Name, total_score) VALUES (NULL, '$Name', '$total_score')";

	if (mysqli_query($connection, $sql)) {

		echo "Added Successfully";
	}
	else 
	{
		mysqli_error($connection);
	}

	mysqli_close($connection);
	header( "refresh:5;url=index.php" );



 ?>



