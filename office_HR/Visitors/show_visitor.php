<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="About the site">
	<meta name="author" content="Author name">
	<title>HR_office</title>

	<!-- core CSS-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

</head>



<body>
<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="../HR/employee_management.php" style="margin-left: 20px;"> Back  </a>
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title">  </div>
		<table border='1' width="300px" style="margin-left: 34%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
				<th class='deli'> Name </th>
				<th class='deli'> NID </th>
				<th class='deli'> Email </th>
				<th class='deli'> Contact_No </th>
				<th class='deli'> Questions </th>
			</tr>

			<!-- write php code to fetch data from database and will show in the rows of the table-->

			<?php

			require_once("../HR/db_connect.php");
			$sql = "SELECT * FROM visitor_user";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) !=0 ){
				//here we will print every row that is returned by our query $sql
				# mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both and Returns an array of strings that corresponds to the fetched row
				while ($row = mysqli_fetch_array ($result)) {
					//here we have to write some HTML code, so we will close PHP tag

			?>
			<tr class='row' style="padding: 5px;">
				<td class='col-md-3'> <?php echo $row[0]; ?> </td>
				<td class='col-md-3'> <?php echo $row[1]; ?> </td>
				<td class='col-md-3'> <?php echo $row[2]; ?> </td>
				<td class='col-md-3'> <?php echo $row[3]; ?> </td>
				<td class='col-md-3'> <?php echo $row[4]; ?> </td>
			</tr>

			<?php
				}
			}
			?>

		</div>

	</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/wow.min.js"></script>

</body>
</html>