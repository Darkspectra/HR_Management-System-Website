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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="../Log_in/log_in_as.php" style="margin-left: 35px;"> Home </a>
			</div>
			<div class="col-md-10" style="text-align: right">
			<a href="HR_register.php" style="margin-left: 30px;"> Register </a>
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> LOG IN </div>

		<form action="HR_login_data.php" class="form_design" method="post">
			ID: <input type="text" name="hrid"> <br>
			Password: <input type="password" name="pass"> <br> <br>
			<input type="submit" value="Login">
		</form>
		<a href="forget_password.php" style="margin-left: 500px;"> Forget Password ? </a>
	</section>

<footer id="footer">

</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/wow.min.js"></script>

</body>
</html>