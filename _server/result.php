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


<?php 
include 'connect.php';
try {

    // Find out how many items are in the table
    $total = $dbh->query('
        SELECT
            COUNT(*)
        FROM
            info
    ')->fetchColumn();

    // How many items to list per page
    $limit = 20;

    // How many pages will there be
    $pages = ceil($total / $limit);

    // What page are we currently on?
    $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
        'options' => array(
            'default'   => 1,
            'min_range' => 1,
        ),
    )));

    // Calculate the offset for the query
    $offset = ($page - 1)  * $limit;

    // Some information to display to the user
    $start = $offset + 1;
    $end = min(($offset + $limit), $total);

    // The "back" link
    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

    // The "forward" link
    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

    // Display the paging information
    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';

    // Prepare the paged query
    $stmt = $dbh->prepare('
        SELECT
            *
        FROM
            info
        ORDER BY
            total_score
        LIMIT
            :limit
        OFFSET
            :offset
    ');

    // Bind the query params
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    // Do we have any results?
    if ($stmt->rowCount() > 0) {
        // Define how we want to fetch the results
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $iterator = new IteratorIterator($stmt);

        // Display the results
        foreach ($iterator as $row) {
            echo '<p>', $row['name'], '</p>';
        }

    } else {
        echo '<p>No results could be displayed.</p>';
    }

} catch (Exception $e) {
    echo '<p>', $e->getMessage(), '</p>';
}

?>








               	
        		</div> <!-- End col 12 -->
      </div> <!-- End row -->
    </div>  <!-- End container -->
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/bootstrap4/popper.min.js"></script>
    <script src="assets/bootstrap4/bootstrap4.js"></script>
    <script src="assets/js/scripts.js"></script>

   <!--  <script src="assets/js/bootstrap3.min.js"></script> -->

  </body>
</html>
