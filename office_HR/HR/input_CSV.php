<?php
// we need to connect to the data base
require_once('../HR/db_connect.php');

if(isset($_POST['csv'])) {
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileOpen=fopen($fileTmpName, 'r');
	while ($row=fgetcsv($fileOpen)) {
		$value= "'". implode("','", $row) . "'";
		$sql="INSERT INTO employee_user VALUES(". $value .")";
		$result = mysqli_query($conn, $sql);
	}

	//check if insertion is happening in the database
	# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
	if (mysqli_affected_rows($conn)){
		header('Location: ../HR/employee_management.php?Emported'); 
	} else {
		header('Location: ../HR/employee_management.php?Error');
	}
}


?>