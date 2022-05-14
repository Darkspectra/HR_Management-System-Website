<?php
// we need to connect to the data base
require_once('../HR/db_connect.php'); # this requires to connect the class

// we need to check if the input in the form text field is not empty
if (isset($_POST['hrid']) && isset($_POST['pass'])){
	// write the query to check if the username and password exists in our database

	$u = $_POST['hrid'];
	$p = $_POST['pass']; # $_POST is to collect data from form data
	$sql = "SELECT * FROM hr_login WHERE id = '$u' AND password = '$p'";

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


if (isset($_POST['empname']) && isset($_POST['empnid']) && isset($_POST['desig'])){
	// write the query to check if the username and password exists in our database

	$u = $_POST['empname'];
	$p = $_POST['empnid'];
	$d = $_POST['desig']; # $_POST is to collect data from form data
	$sql = "SELECT * FROM employee_login WHERE Name = '$u' AND NID = '$p' AND Designation = '$d'";

	//Execute the query
	# Specifies the MySQL connection to use and also Specifies the SQL query string
	$result = mysqli_query($conn, $sql); # mysqli_query(connection, query, resultmode)

	//check if it returns an empty set
	#Required. Specifies a result set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()
	if (mysqli_num_rows($result) !=0 ){ 
		#echo "LET HIM ENTER";
		header('Location: ../Employee/employee_management.php'); # Specifies the header string to send
	}
	else {
		#echo "Username or Password is wrong";
		header('Location: HR_login.php');
	}
}

if (isset($_POST['hrid']) && isset($_POST['newpass'])){
	$e = $_POST['hrid'];
	$n = $_POST['newpass'];

	$sql = "UPDATE hr_register SET password=$n WHERE ID='$e'";
	$sql2 = "UPDATE hr_login SET password=$n";
	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);
	header('Location: HR_login.php');
}


?>