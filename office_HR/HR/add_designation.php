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
				<a href="show_designation.php" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>
	
	<section id="section1">
		<div class="title"> </div>

		<form action="insert_employee.php" class="form_design" method="post">
			Designation Name: <input type="text" name="dgname"> <br>
			Code: <input type="text" name="cd"> <br>
			Remaining Seats: <input type="text" name="rseat"> <br>
			Benefits: <input type="text" name="bne"> <br>
			<input type="submit" value="Submit"> <br>
			<br>
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