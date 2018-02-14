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

    <title>Result </title>
  </head>
  <body>


<?php  
$dbhost = 'localhost';  
$dbuser = 'root';  
$dbpass = ";  
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
$dbname = 'test';  
$connection = mysql_select_db($dbname);  
  
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM posts ORDER BY title ASC LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql);  
?>  
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><? echo $row["ID"]; ?></td>  
            <td><? echo $row["Full_Name"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
<?php  
$sql = "SELECT COUNT(id) FROM posts";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>

  	


















    
    
    <div class="container">
      <div class="row">
            <div class="col-md-12 order-md-1">

					<div class="table-responsive mt-30">
					  <table class="table">
							<thead>
								 <tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Score</th>
								 </tr>
							  </thead>
							  <tbody>
									<?php
     									 include 'connect.php';
											if (mysqli_num_rows($result) > 0 ) 
											{
										 			while ($data = $result->fetch_assoc()) 
										 			{	
										 				?>
										 				<tr>
										 					<td> <?php  echo $data['ID'] ?></td>
										 					<td> <?php  echo $data['Full_Name'] ?></td>
															<td> <?php  echo $data['total_score'] ?></td>
										 				<tr>
										 				<?php
										 			}
									 			}

									 	else {
									 			echo " Nothing Found";
									 		}
									 		mysqli_close($connection);

									  ?>


					  			</table>
							</div>
								
								<div class="pagination">
								  <a href="#">&laquo;</a>
								  <a href="#">1</a>
								  <a class="active" href="#">2</a>
								  <a href="#">3</a>
								  <a href="#">4</a>
								  <a href="#">5</a>
								  <a href="#">6</a>
								  <a href="#">&raquo;</a>
								</div>



               	
        		</div> <!-- End col 12 -->
      </div> <!-- End row -->
    </div>  <!-- End container -->
   

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/bootstrap4/popper.min.js"></script>
    <script src="assets/bootstrap4/bootstrap4.js"></script>
    <script src="assets/js/scripts.js"></script>


  </body>
</html>
