
<?php 
	$connection = mysqli_connect("localhost", "root", "admin", "mrBD");
	

	if ($connection === false) {
		die ("Error:" . mysqli_connect_error());
	}

	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$district = $_POST['district'];
	$feedback = $_POST['feedback'];
	$total_score = $_POST['total_score'];
	
	$sql = "INSERT INTO info(ID, Full_Name, email, phone_number, district, feedback, total_score) VALUES (NULL, '$full_name', '$email','$phone_number', '$district', '$feedback', '$total_score')";

	if (mysqli_query($connection, $sql)) {

		echo "Added Successfully";
		echo "<br>";
		echo $feedback;
	}
	else 
	{
		mysqli_error($connection);
	}

	mysqli_close($connection);
	header( "refresh:2;url=index.php" );


 ?>



