
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
				<a href="assign_project.php" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right">
			</div>
		</div>
</section>
			<?php
		// we need to connect to the data base
		require_once('db_connect.php');

		$ids = $_GET['id'];
		$showquery = "SELECT * FROM employee_user WHERE NID={$ids}";
		$showdata = mysqli_query($conn,$showquery);
		$array = mysqli_fetch_array($showdata);

		?>
	<section id="section1">
		<div class="title"> Employee info </div>

		<form action="insert_project2.php" class="form_design" method="post">
			Project_name: <input type="text" name="pna"> <br>
			Project_ID: <input type="text" name="pid"> <br>
			Employee_name: <input type="text" name="empname" value="<?php echo $array[6]; ?>"> <br>
			Employee_NID: <input type="text" name="empnid" value="<?php echo $array[0]; ?>"> <br>
			<br>
			<input type="submit" name="submit" value="Assign">
		</form>
	</section>

<footer id="footer">

</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/wow.min.js"></script>

</body>
</html>