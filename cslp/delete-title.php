<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }
	
	$id = $_GET['id'];
	
	$query = mysqli_query($conn, "DELETE FROM `rso-research-titles` WHERE `rso-research-titles`.id=".$id.";");
	if($query){				
		header( "refresh:3; url= search-what.php");
		echo "Record DELETED successfully.";
	}
?>