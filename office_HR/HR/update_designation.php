
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
		<?php
		// we need to connect to the data base
		require_once('db_connect.php');

		$ids = $_GET['id'];
		$showquery = "SELECT * FROM designation WHERE designation_code={$ids}";
		$showdata = mysqli_query($conn,$showquery);
		$array = mysqli_fetch_array($showdata);


		// we need to check if the input in the form text field is not empty
		if (isset($_POST['dgname']) && isset($_POST['cd']) && isset($_POST['rseat']) && isset($_POST['bne'])){
			// write the query to check if the username and password exists in our database

			$n = $_POST['dgname'];
			$c = $_POST['cd'];
			$a = $_POST['rseat'];
			$b = $_POST['bne'];

			$sql = "UPDATE designation SET designation_name='$n', no_seat=$a, benefits='$b'";

			//Execute the query
			$result = mysqli_query($conn, $sql);

			//check if insertion is happening in the database
			# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
			if ($result) {
				header('Location: show_designation.php');
				?>
				<script>
					alert("Updated Successfully");
				</script>
				<?php
			} else {
				?>
				<script>
					alert("Error!");
				</script>
				<?php
			}
		}

		?>
	<section id="section1">
		<div class="title"> Employee info </div>

		<form action="" class="form_design" method="post">
			Designation_Name: <input type="text" name="dgname" value="<?php echo $array[0]; ?>"> <br>
			Code: <input type="text" name="cd" value="<?php echo $array[1]; ?>"> <br>
			Available_Seat: <input type="text" name="rseat" value="<?php echo $array[2]; ?>"> <br>
			Benefits: <input type="text" name="bne" value="<?php echo $array[3]; ?>"> <br>
			<br>
			<input type="submit" name="submit" value="Update">
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