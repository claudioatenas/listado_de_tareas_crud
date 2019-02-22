<?php
	
include("db.php");

	if (isset($_POST['save_task'])){
		$title = $_POST['title'];
		$description = $_POST['description'];

		$query = "INSERT INTO task(title, description) values ('$title', '$description')";
		$result = mysqli_query($con, $query);
		if (!$result){
			die("Query failed");
		}

		$_SESSION['message'] = 'task saved succesfully';
		$_SESSION['message_type'] = 'success';

		header("location: index.php"); 
	}

?>