<?php
// we need to connect to the data base
require_once('../HR/db_connect.php'); # this requires to connect the class

// we need to check if the input in the form text field is not empty
if (isset($_POST['hrname']) && isset($_POST['hrpass'])){
	// write the query to check if the username and password exists in our database

	$u = $_POST['hrname'];
	$p = $_POST['hrpass']; # $_POST is to collect data from form data
	$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";

	//Execute the query
	# Specifies the MySQL connection to use and also Specifies the SQL query string
	$result = mysqli_query($conn, $sql); # mysqli_query(connection, query, resultmode)

	//check if it returns an empty set
	#Required. Specifies a result set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()
	if (mysqli_num_rows($result) !=0 ){ 
		#echo "LET HIM ENTER";
		header('Location: ../HR/employee_management.php'); # Specifies the header string to send
	}
	else {
		#echo "Username or Password is wrong";
		header('Location: HR_login.php');
	}
}

?>