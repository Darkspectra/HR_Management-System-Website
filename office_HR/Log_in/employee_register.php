<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="About the site">
	<meta name="author" content="Author name">
	<title>HR office</title>

	<!-- core CSS-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

</head>

<body>
<section id="header">
		<div class="row">  
			<span class="col-md-2" style="font-size: 40px; color:#F2674A;"> Register </span>
			<div class="col-md-10" style="text-align: right"> 
			</div>
		</div>
</section>


	<section id="section1">
		<div class="title"> Register </div>

		<form action="insert.php" class="form_design" method="post">
			Name: <input type="text" name="empname"> <br>
			NID: <input type="text" name="empnid"> <br>
			Designation: <input type="text" name="desig"> <br> <br>
			<input type="submit" value="Submit">
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