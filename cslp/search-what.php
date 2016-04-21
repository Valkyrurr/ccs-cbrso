<?php
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	unset($_SESSION['array']);
	if(isset($_POST['keyword'])) $_SESSION['keyword'] = $_POST['keyword'];
	if(isset($_POST['keyword'])) $_SESSION['address'] = $_POST['address'];
	if(isset($_POST['keyword'])) $_SESSION['category'] = $_POST['category'];
	
	if($_SESSION['category']==1){
		header('Location: search-titles.php');
	}
	elseif($_SESSION['category']==2){
		header('Location: search-advisers.php');
	}
	elseif($_SESSION['category']==3){
		header('Location: search-researchers.php');
	}
	elseif($_SESSION['category']==4){
		header('Location: search-areas.php');
	}
	elseif($_SESSION['category']==5){
		header('Location: search-themes.php');
	}
	else {
		echo "HELLO WORLD!";
	}
?>