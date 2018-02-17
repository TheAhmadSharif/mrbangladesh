<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="assets/images/logonew2.png" /> 
    <link rel="stylesheet" href="assets/bootstrap4/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!--[if IE]>
      <link href="assets/css/bootstrap-ie9.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/bootstrap3.css">
      <script src="assets/js/html5shiv@3.7.3.js"></script>
    <![endif]-->

    <title>Result</title>
  </head>
  <body>

    
    
    <div class="container result_page">
      <div class="row">
            <div class="col-md-12 order-md-1">

					<div class="table-responsive mt-30">
					  <table class="table">
							<thead>
								 <tr>
									<th scope="col">#</th>
									<th scope="col">Full Name</th>
									<th scope="col">Email</th>
									<th scope="col">Phone No</th>
									<th scope="col">District</th>
									<th scope="col">Feedback</th>
									<th scope="col">Score</th>
								 </tr>
							  </thead>
							  <tbody>
									<?php
     									 include 'connect.php';
     									 	$i = 0;
											if (mysqli_num_rows($result) > 0 ) 
											{
										 			while ($data = $result->fetch_assoc()) 
										 			{	
										 				?>
										 				<tr>
										 					<td> <?php  echo  $i = $i +1 ?></td>
										 					<td> <?php  echo $data['Full_Name'] ?></td>

										 					<td> <?php  echo $data['email'] ?></td>

										 					<td> <?php  echo $data['phone_number'] ?></td>

										 					<td> <?php  echo $data['district'] ?></td>
										 					<td> <?php  echo $data['feedback'] ?></td>


															<td> <?php  echo $data['total_score'] ?></td>
										 				<tr>
										 				<?php
										 			}

									 		}

									 	else {
									 			echo " Nothing Found";
									 		}
									 		

									  ?>	
					  			</table>
							</div>
								
               	
        		</div> <!-- End col 12 -->
      </div> <!-- End row -->

      <div class="row">
									<div class="col-md-12">
										
								<?php  

									
									$total_pages = ceil($total_records / $limit);  
									$pagLink = "<div class='pagination'>";  
									for ($i=1; $i<=$total_pages; $i++) {  

										if($page == $i)
										    $class = 'active';
										else
										    $class = '';


									        $pagLink .= "<a href='result.php?page=".$i."' class='".$class."'>".$i."</a>";  
									             

									};  
									echo $pagLink . "</div>"; 
									 mysqli_close($connection); 
									?>
									</div>
								</div>


    </div>  <!-- End container -->
   

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/bootstrap4/popper.min.js"></script>
    <script src="assets/bootstrap4/bootstrap4.js"></script>


  </body>
</html>
