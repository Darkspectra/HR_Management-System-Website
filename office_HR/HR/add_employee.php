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
				<a href="employee_management.php" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-10" style="text-align: right">
			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Add New Employee </div>

		<form action="insert_employee.php" class="form_design" method="post">
			NID: <input type="text" name="nid"> <br>
			Age: <input type="text" name="age"> <br>
			Bank_Account_No: <input type="text" name="bankac"> <br>
			Contact_No: <input type="text" name="cont"> <br> <br> <br> <br>
			First_Name: <input type="text" name="fn"> <br>
			Middle_Name: <input type="text" name="mn"> <br>
			Last_Name: <input type="text" name="ln"> <br>
			<br>
			<input type="submit" value="Submit">
		</form>
	</section>

<footer id="footer">

</footer>

</body>
</html>