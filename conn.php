<?php
	$conn = mysqli_connect("localhost", "root", "", "db_user");
	
	if(!$conn){
		die("Error: Failed to connect!");
	}
?>