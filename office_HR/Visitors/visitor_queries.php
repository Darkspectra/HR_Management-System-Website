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
				<a href="../Log_in/log_in_as.php"> HOME </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
<!-- 				<a href="#"> Home </a> 
				<a href="#" style="margin-left: 20px;"> Students </a>  -->
				<a href="show_designation_visitor.php" style="margin-left: 20px;"> Available_Designation  </a> 
			</div>
		</div>
</section>
	
	<section id="section1">
		<div class="title"> Welcome To SMIN Technology Ltd </div>

		<form action="insert_visitor.php" class="form_design" method="post" enctype="multipart/form-data">
			If you have any quaries drop it here: <input type="text" name="ask"> <br>
			<input type="submit" value="Submit"> <br>
			<br>
		</form>

		<form action="insert_visitor.php" class="form_design" method="post" enctype="multipart/form-data">
			We are hiring,  If you are interested to work with us please drop your CV here: <input type="file" name="file">
			<button type="submit" name="submit"> UPLOAD</button>
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