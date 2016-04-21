<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }
	
	$sqlstring = "INSERT INTO `rso-researchers`(`id`, `first_name`, `middle_name`, `last_name`, `thesis_id`) VALUES ";
	$id = $_POST['title'];
	$flag = 1;
	for($x=1; $x<=5; $x++){
		if(isset($_POST['last_name'.$x])){
			${'first_name'.$x} = $_POST['first_name'.$x];
			${'middle_name'.$x} = $_POST['middle_name'.$x];
			${'last_name'.$x} = $_POST['last_name'.$x];
			
			$sqlstring = $sqlstring."(NULL, '".${'first_name'.$x}."', '".${'middle_name'.$x}."', '".${'last_name'.$x}."', NULLIF('".$id."',''))";
			if(isset($_POST['last_name'.++$x])){
				$sqlstring = $sqlstring.", ";
				--$x;
			}
		}else{
			$sqlstring = $sqlstring.";";
			break;
		}
	}
	$query = mysqli_query($conn, $sqlstring);
	if($query){				
		header( "refresh:3; url= register.php");
		echo "Record registered successfully.";
	}
?>