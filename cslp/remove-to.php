<?php
	include("query.php");
	session_start();
	if(isset($_SESSION['array'])){
		$myArray = $_SESSION['array'];
		unset($_SESSION['array']);
	}
	$value = $_GET['id'];
	if(in_array($value, $myArray)){
		unset($myArray[array_search($value, $myArray)]);
	}
	$myArray = array_values($myArray);
	$id = $_SESSION['temp'];
	$_SESSION['array'] = $myArray;
	header('Location: add-title.php?id='.$id.'');
?>