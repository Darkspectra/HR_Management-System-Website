<?php
		// we need to connect to the data base
		require_once('db_connect.php');

		$ids = $_GET['id'];
		$delquery = "DELETE FROM project WHERE Project_ID=$ids";
		$result = mysqli_query($conn, $delquery);
		if ($result) {
			?>
				<script>
					alert("Deleted Successfully");
				</script>
			<?php			
		} else {
			?>
				<script>
					alert("Error!");
				</script>
			<?php
		}
		header('Location: show_project.php');
?>