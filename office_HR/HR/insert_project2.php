
<?php
		require_once('db_connect.php');
		if (isset($_POST['pna']) && isset($_POST['pid']) && isset($_POST['empname']) && isset($_POST['empnid'])){
			// write the query to check if the username and password exists in our database

			$n = $_POST['pna'];
			$a = $_POST['pid'];
			$b = $_POST['empname'];
			$c = $_POST['empnid'];

			$sql = "INSERT INTO project VALUES( '$n', '$a','$b','$c')";

			//Execute the query
			$result = mysqli_query($conn, $sql);

			//check if insertion is happening in the database
			# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
			if (mysqli_affected_rows($conn)){
		#echo "Inserted Successfully";
		header('Location: show_project.php'); 
		} else {
			#echo "insertion Failed";
			header('Location: insert_project.php');
		}
	}
?>