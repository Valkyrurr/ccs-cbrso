<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }
	
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	
	$query = mysqli_query($conn, "INSERT INTO `rso-advisers` VALUES (NULL, '".$first_name."', '".$middle_name."', '".$last_name."');");
	if($query){				
		header( "refresh:3; url= register.php");
		echo "Record registered successfully.";
	}
?>