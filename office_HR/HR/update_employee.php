
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
			<?php
		// we need to connect to the data base
		require_once('db_connect.php');

		$ids = $_GET['id']; //Fetch unique id
		$showquery = "SELECT * FROM employee_user WHERE NID={$ids}";
		$showdata = mysqli_query($conn,$showquery);
		$array = mysqli_fetch_array($showdata);


		// we need to check if the input in the form text field is not empty
		if (isset($_POST['nid']) && isset($_POST['age']) && isset($_POST['bankac']) && isset($_POST['cont']) && isset($_POST['fn']) && isset($_POST['mn']) && isset($_POST['ln'])){
			// write the query to check if the username and password exists in our database
		    
			$gtid = $_GET['id'];

			$n = $_POST['nid'];
			$a = $_POST['age'];
			$b = $_POST['bankac'];
			$c = $_POST['cont'];
			$f = $_POST['fn'];
			$m = $_POST['mn'];
			$l = $_POST['ln'];

			$sql = "UPDATE employee_user SET NID=$n, Age=$a, Bank_account_no=$b, Contact_no=$c, First_name='$f', Middle_name='$m', Last_name='$l' WHERE NID=$gtid";

			//Execute the query
			$result = mysqli_query($conn, $sql);

			//check if insertion is happening in the database
			# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
			if ($result) {
				header('Location: show_employee.php');
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
			NID: <input type="text" name="nid" value="<?php echo $array[0]; ?>"> <br>
			Age: <input type="text" name="age" value="<?php echo $array[1]; ?>"> <br>
			Bank_Account_No: <input type="text" name="bankac" value="<?php echo $array[2]; ?>"> <br>
			Contact_No: <input type="text" name="cont" value="<?php echo $array[3]; ?>"> <br>
			First_Name: <input type="text" name="fn" value="<?php echo $array[4]; ?>"> <br>
			Middle_Name: <input type="text" name="mn" value="<?php echo $array[5]; ?>"> <br>
			Last_Name: <input type="text" name="ln" value="<?php echo $array[6]; ?>"> <br>
			<br>
			<input type="submit" name="submit" value="Update">
		</form>
	</section>

<footer id="footer">

</footer>

</body>
</html>