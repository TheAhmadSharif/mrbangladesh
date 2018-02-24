<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta property="og:image" content="assets/images/mrBD.jpg" />
    <meta property="og:title" content="Mr. Bangladesh]" />
    <meta property="og:description" content="Mr. Bangladesh" />


    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="assets/images/logonew2.png" /> 
    <link rel="stylesheet" href="assets/bootstrap4/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!--[if IE]>
      <link href="assets/css/bootstrap-ie9.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/bootstrap3.css">
      <script src="assets/js/html5shiv@3.7.3.js"></script>
    <![endif]-->

    
  
    <title>Mr. Bangladesh</title>
  </head>
  <body>
  	<div class="container mt-30">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="mb-30">
  					<img rel="assets/images/mrBD.jpg" class="d-block mx-auto mb-4 thumbnail-img" src="assets/images/mrBD.jpg" alt="Mr Bangladesh"> 
  				</div>  <!-- End  -->
  				

  				<?php 
  				ini_set('display_errors', 'Off');
				
				include 'connect.php';

				$full_name = $_POST['full_name'];
				$email = $_POST['email'];
				$phone_number = $_POST['phone_number'];
				$district = $_POST['district'];
				$feedback = $_POST['feedback'];
				$total_score = $_POST['total_score'];
				
				$sql = "INSERT INTO info(ID, Full_Name, email, phone_number, district, feedback, total_score) VALUES (NULL, '$full_name', '$email','$phone_number', '$district', '$feedback', '$total_score')";

				if (mysqli_query($connection, $sql)) {
					echo "<h4 class='thankYou'>Thank you" . " <strong>" .$full_name. " </strong>"  . "for your participation !</h4>";
					echo "<br>";
				}
				else 
				{
					mysqli_error($connection);
                      echo "<h4 class='thankYou'>Something went wrong. Please try again.</h4>";
                      header( "refresh:10;url=index.php" );
				}

				mysqli_close($connection);


			 ?>

  			</div>  <!-- End col  -->
  		</div>  <!-- End row -->
  	</div> <!-- End container -->





  </body>
  </html>




