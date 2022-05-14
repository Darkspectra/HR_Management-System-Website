<?php
		// we need to connect to the data base
		require_once('db_connect.php');

		$ids = $_GET['id'];
		$delquery = "DELETE FROM employee_user WHERE NID=$ids";
		$result = mysqli_query($conn, $delquery);
		header('Location: employee_management.php');
?>