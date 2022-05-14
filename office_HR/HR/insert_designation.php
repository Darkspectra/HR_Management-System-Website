<?php
// we need to connect to the data base
require_once('db_connect.php');


// we need to check if the input in the form text field is not empty
if (isset($_POST['hrid']) && isset($_POST['hrname']) && isset($_POST['hremail'])){
	// write the query to check if the username and password exists in our database

	$u = $_POST['hrid'];
	$p = $_POST['hrname'];
	$c = $_POST['hremail'];

	$sql = "INSERT INTO hr_register VALUES( '$u', '$p','$c')";
	$sql2 = "INSERT INTO hr_login VALUES( '$p', '$u')";

	//Execute the query
	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);

	//check if insertion is happening in the database
	# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
	if (mysqli_affected_rows($conn)){
		#echo "Inserted Successfully";
		header('Location: HR_login.php'); 
	}
	else {
		#echo "insertion Failed";
		header('Location: HR_register.php');
	}
}