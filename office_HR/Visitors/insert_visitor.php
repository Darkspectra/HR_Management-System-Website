<?php
// we need to connect to the data base
require_once('../HR/db_connect.php');


// we need to check if the input in the form text field is not empty
if (isset($_POST['name']) && isset($_POST['nid']) && isset($_POST['email']) && isset($_POST['contact'])){
	// write the query to check if the username and password exists in our database

	$n = $_POST['name'];
	$d = $_POST['nid'];
	$k = $_POST['email'];
	$c = $_POST['contact'];

	$sql = "INSERT INTO visitor_user VALUES( '$n', '$d','$k','$c','NULL')";

	//Execute the query
	$result = mysqli_query($conn, $sql);

	//check if insertion is happening in the database
	# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
	if (mysqli_affected_rows($conn)){
		#echo "Inserted Successfully";
		header('Location: visitor_queries.php'); 
	}
	else {
		#echo "insertion Failed";
		header('Location: add_visitor.php');
	}
}



if (isset($_POST['ask'])){
	// write the query to check if the username and password exists in our database

	$n = $_POST['ask'];

	$sql = "UPDATE visitor_user SET ask_questions='$n' WHERE ask_questions='NULL'";


	//Execute the query
	$result = mysqli_query($conn, $sql);

	//check if insertion is happening in the database
	# The 'mysqli_affected_rows(connection)' means the number of rows affected. -1 indicates that the query returned an error
	if (mysqli_affected_rows($conn)){
		header('Location: visitor_queries.php?Submitted'); 
	}
	else {
		header('Location: visitor_queries.php?Error');
	}
}





if(isset($_POST['submit'])) {
	$file=$_FILES['file'];
	
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt= strtolower(end($fileExt));
	
	$allowed=array('jpg','jpeg','png','pdf');
	
	if(in_array($fileActualExt, $allowed)){ 
	   if ($fileError === 0) {
		   if($fileSize<1000000){
		 	  $fileNameNew =uniqid('',true).".".$fileActualExt;
			  $fileDestination='uploads/'.$fileNameNew;
			  if (move_uploaded_file($fileTmpName,$fileDestination)) {
				  echo "Your CV has been uploaded succesfully!";
			  }
			  /* header("Location: visitor_queries.php?uploadsuccess"); */
		    } else {
				echo "Your file is too big!";
            }
		} else {
			echo "There was an error in uploading your file!!";
		}
	} else{
		echo "You can not upload this type file!!";
	}
}




?>