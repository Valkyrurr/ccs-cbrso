<?php
	include("query.php");
	session_start();
	if(empty($thisArray)){
		$thisArray = array();
	}
	if(isset($_SESSION['array'])){
		$thisArray = $_SESSION['array'];
		unset($_SESSION['array']);
	}
	$thisArray[] = $_GET['id'];
	$id = $_SESSION['temp'];
	$_SESSION['array'] = array_unique($thisArray);
	header('Location: add-title.php?id='.$id.'');
?>