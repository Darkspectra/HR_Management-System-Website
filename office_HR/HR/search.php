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

		<style>
			table {
  			border-collapse: collapse;
  			width: 80%;
			}
			tr:hover {background-color: greenyellow;}

			.del {
				background-color: white;
			}
			.deli {
				background-color: coral;
			}
			#tx {
				width: 35%;
				margin-left: 20px;	
			}
		</style>

<section id="header">
		<div class="row">
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;">
				<a href="employee_management.php" style="margin-left: 35px;"> Back </a>
			</div>
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> </div>
			<div class="col-md-10" style="text-align: right">
			</div>
		</div>
</section>

	<section id="section1">

		<div class="title"> Search Result </div>
		<table border='1' width="300px" style="margin-left: 10%; margin-right: 10%; margin-top: 50px; margin-bottom: 50px; text-align: center; background: #66b3ff;">
			<tr class='row' style="padding: 5px;">
				<th class='deli'> NID </th>
				<th class='deli'> Age </th>
				<th class='deli'> Bank_Account_No </th>
				<th class='deli'> Contact_No </th>
				<th class='deli'> First_Name </th>
				<th class='deli'> Middle_Name </th>
				<th class='deli'> Last_Name </th>
				<th colspan="3" class='deli'> Action </th>
			</tr>

			<!-- write php code to fetch data from database and will show in the rows of the table-->


			<?php
			require_once("db_connect.php");

			if (isset($_POST['search'])){

				$n = $_POST['search'];
				$sql = "SELECT * FROM employee_user WHERE CONCAT(NID,Age,Bank_account_no,Contact_no,First_name,Middle_name,Last_name) LIKE '%$n%'";
				$result = mysqli_query($conn, $sql);
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
				<td class='col-md-3'> <?php echo $row[5]; ?> </td>
				<td class='col-md-3'> <?php echo $row[6]; ?> </td>
				<td class='del'> <a href="update_employee.php?id=<?php echo $row[0]; ?>" data-toggle="tooltip" data-placement="bottom" title="update">Update</a></td>
				<td class='del'> <a href="delete_employee.php?id=<?php echo $row[0]; ?>" data-toggle="tooltip" data-placement="bottom" title="delete">Delete</a></td>
			</tr>

			<?php
				}

			}
			?>


		</table>

	</section>

<footer id="footer">

</footer>

</body>
</html>

