<!DOCTYPE html>
<html lang="en">
<head>
  <title>Linkorage</title>
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
  
  include("connections.php");
  echo "<br>";
  
  
  $view_query = mysqli_query($connections, "SELECT * FROM tbl_aihelpersrecord");
 
	echo "<div class='container'>";
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Name</th>";
				echo "<th></th>";
				echo "</tr>";
		  
				if ($row = mysqli_fetch_assoc($view_query)) {
					// output data of each row
					while($row = mysqli_fetch_assoc($view_query)) {
            $db_link = $row["link"];
            $db_detail = $row["detail"];
            $db_name = $row["name"];
            echo "<tr>
                      <td class=detailtext>$db_name</td>
                     <td class=detailtext>$db_detail</td>
                     <td class=linktext><a href='$db_link' target='_blank'>Visit</a></td>
                  </tr>";
					}
				} else {
					echo "0 results";
				}
				
				echo "</table>";
				
			
  // Close connection
  mysqli_close($connections);
  ?>


</body>
</html>