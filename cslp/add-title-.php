<?php
	include("query.php");
	session_start();
	
	if(isset($_SESSION['array'])) {echo "HEELOOO";}
	$id = $_SESSION['temp'];
	
	$sqlstring = "UPDATE `rso-researchers` SET thesis_id=".$id." WHERE id IN (";
	for($x=0; $x<count($_SESSION['array']); $x++){
		$sqlstring=$sqlstring.(string)$_SESSION['array'][$x];				
		if(count($_SESSION['array'])-1==$x){
			$sqlstring=$sqlstring.")";
		}else{
			$sqlstring=$sqlstring.",";
		}
	}
	
	$query = mysqli_query($conn, $sqlstring);
	if($query){				
		header('Location: add-title-success.php');
		unset($_SESSION['array']);
		unset($_SESSION['temp']);
	}
?>