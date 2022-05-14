<?php
// we need to connect to the data base
require_once('db_connect.php');


// we need to check if the input in the form text field is not empty
if (isset($_POST['nid']) && isset($_POST['age']) && isset($_POST['bankac']) && isset($_POST['cont']) && isset($_POST['fn']) && isset($_POST['mn']) && isset($_POST['ln'])){
	// write the query to check if the username and password exists in our database

	$n = $_POST['nid'];
	$a = $_POST['age'];
	$b = $_POST['bankac'];
	$c = $_POST['cont'];
	$f = $_POST['fn'];
	$m = $_POST['mn'];
	$l = $_POST['ln'];

	$sql = "INSERT INTO employee_user VALUES( '$n', '$a','$b','$c','$f','$m','$l')";

	//Execute the query
	$result = mysqli_query($conn, $sql);

	//check if insertion is happening in the database
	# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
	if (mysqli_affected_rows($conn)){
		#echo "Inserted Successfully";
		header('Location: show_employee.php'); 
	}
	else {
		#echo "insertion Failed";
		header('Location: add_employee.php');
	}
}


if (isset($_POST['dgname']) && isset($_POST['rseat']) && isset($_POST['bne'])){
	// write the query to check if the username and password exists in our database

	$n = $_POST['dgname'];
	$c = $_POST['cd'];
	$a = $_POST['rseat'];
	$b = $_POST['bne'];

	$sql = "INSERT INTO designation VALUES( '$n', '$c', '$a','$b')";

	//Execute the query
	$result = mysqli_query($conn, $sql);

	//check if insertion is happening in the database
	# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
	if (mysqli_affected_rows($conn)){
		#echo "Inserted Successfully";
		header('Location: show_designation.php'); 
	}
	else {
		#echo "insertion Failed";
		header('Location: add_designation.php');
	}
}


?>