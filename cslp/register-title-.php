<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }
	
	$query = mysqli_query($conn, "SELECT MAX(id) FROM `rso-research-titles`;");
		while($row=mysqli_fetch_row($query)){
			$reference = $row[0];
		}
	$title = $_POST['textarea'];
	$theme = $_POST['theme'];
	$area = $_POST['area'];
	$adviser = $_POST['adviser'];
	$yop = $_POST['yop'];
	
	$query = mysqli_query($conn, "INSERT INTO `rso-research-titles` VALUES (NULL, '".$title."', NULLIF('".$theme."',''), NULLIF('".$area."',''), NULLIF('".$adviser."',''), '".$yop."');");
	if($query){				
		header( "refresh:3; url= register.php");
		echo "Record registered successfully.";
	}
?>