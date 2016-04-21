<?php
	include("query.php");
	if(session_status() == PHP_SESSION_NONE) { session_start(); }

	if(isset($_POST['partner'])) $partner = $_POST['partner'];
	if(isset($_POST['address'])) $address = $_POST['address'];
	if(isset($_POST['first_name'])) $first_name = $_POST['first_name']; else $first_name = '';
	if(isset($_POST['middle_name'])) $middle_name = $_POST['middle_name']; else $middle_name = '';
	if(isset($_POST['last_name'])) $last_name = $_POST['last_name']; else $last_name = '';
	if(isset($_POST['contact_num'])) $contact_num = $_POST['contact_num']; else $contact_num = '';
	if(isset($_POST['email'])) $email = $_POST['email']; else $email = '';
	
	$query = "INSERT INTO `rso-partners`(`partner`, `address`, `contact_id`) VALUES ('".$partner."', '".$address."'";
	$subquery = "INSERT INTO `rso-contacts` VALUES (NULL, NULLIF('".$first_name."',''), NULLIF('".$middle_name."',''), NULLIF('".$last_name."',''), NULLIF('".$contact_num."',''), NULLIF('".$email."',''));";
	
	echo $subquery . "<br>";
	$subquery = mysqli_query($conn, $subquery);
	$prev_id = mysqli_insert_id($conn);
	if(!empty($prev_id)){
		$query = $query . ", '".$prev_id."');";
	} else {	$query = $query . ", NULL);";	}
	echo $query;
	$query = mysqli_query($conn, $query);
	if($query){				
		header("refresh:3; url= register.php");
		echo "Record registered successfully.";
	}
?>