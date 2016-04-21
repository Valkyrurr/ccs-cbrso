<?php
	$servername = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "rso";
		
	$conn = mysqli_connect($servername, $db_user, $db_pass, $db_name);
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>