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
			#cs {
				margin-left: 195px;
			}
			.num {
				margin-left: 800px;	
			}
		</style>

<section id="header">
		<div class="row">
			<div class="col-md-2" style="font-size: 40px;color:#F2674A;">
				<a href="../Log_in/HR_login.php"> Log out </a>
			</div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="../Visitors/show_visitor.php"> Visitor's_Inbox </a> 
				<a href="assign_project.php" style="margin-left: 20px;"> Assign_Projects </a>
				<a href="show_designation.php" style="margin-left: 20px;"> Vacancy </a>
				<a href="add_employee.php" style="margin-left: 20px;"> Insert  </a>
				<form action ="search.php" method="POST">
						<input type="text" id="tx" name="search"> <br>
						<input type="submit" value="Search">
				</form>

			</div>
		</div>
</section>

	<section id="section1">
		<div class="title"> Employee Information </div>
		<div class="num">
		<?php
		require_once("db_connect.php");
		$sql = "SELECT * FROM employee_user";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($result);
		echo '<h1> Employees number:' .$row. '</h1>';
		?>
		</div>
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


			<?php

			require_once("db_connect.php");

			$sql = "SELECT * FROM employee_user";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) !=0 ){
				$sql = "SELECT * FROM employee_user";
				$result = mysqli_query($conn, $sql);
				//here we will print every row that is returned by our query $sql
				# mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both and Returns an array of strings that corresponds to the fetched row
				while ($row = mysqli_fetch_array ($result)) {

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

		<form action="input_CSV.php" id="cs" method="post" enctype="multipart/form-data">
			Insert employee data as .CSV file: <input type="file" name="file">
			<button type="submit" name="csv"> Import</button>
		</form>

	</section>

<footer id="footer">

</footer>

</body>
</html>