<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }

	$project = $_POST['project'];
	$partner = $_POST['partner'];
	$adviser = $_POST['adviser'];
	$year = $_POST['year'];

	$query = "INSERT into `rso-projects` VALUES (NULL, '".$project."', '".$partner."', '".$adviser."', '".$year."');";
	echo $query;
	$query = mysqli_query($conn, $query);
	
	if($query){				
		header("refresh:3; url= register.php");
		echo "Record registered successfully.";
	}
?>