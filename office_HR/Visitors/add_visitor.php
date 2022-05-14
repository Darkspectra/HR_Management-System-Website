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
				<a href="../Log_in/log_in_as.php" style="margin-left: 35px;"> <h1> Home </h1> </a>
			</div>
			<div class="col-md-10" style="text-align: right">
				<a href="show_designation_visitor.php" style="margin-left: 20px;"> Available_Designation  </a> 
			</div>
		</div>
</section>
	
	<section id="section1">
		<div class="title"> Welcome To SMIN Technology LTD </div>

		<form action="insert_visitor.php" class="form_design" method="post" enctype="multipart/form-data">
			Name: <input type="text" name="name"> <br>
			NID: <input type="text" name="nid"> <br>
			Email: <input type="text" name="email"> <br>
			Contact No: <input type="text" name="contact"> <br>
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