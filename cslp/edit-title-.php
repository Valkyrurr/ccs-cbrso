<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }
	
	$id = $_POST['id'];
	$text = $_POST['textarea'];
	$theme = $_POST['theme'];
	$area = $_POST['area'];
	$adviser = $_POST['adviser'];
	$year = $_POST['year'];
	$location = $_POST['location'];
	
	$query = mysqli_query($conn, "UPDATE `rso-research-titles` SET research_title='".$text."', theme_id=NULLIF('".$theme."',''), area_id=NULLIF('".$area."',''), adviser_id=NULLIF('".$adviser."',''), year_id='".$year."' WHERE id='".$id."';");
	if($query){				
		header( "refresh:3; url= search-what.php");
		echo "Record updated successfully.";
	}
?>