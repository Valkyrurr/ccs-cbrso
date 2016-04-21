<?php
	if(!isset($_SESSION)){ session_start(); }
	echo $username = $_POST['username'];
	echo $password = $_POST['password'];
	echo $location = $_POST['location'];
	include("query.php");
	$query = mysqli_query($conn, "SELECT * FROM `rso-users` WHERE `rso-users`.username='".$username."';");
	if(mysqli_num_rows($query)>0){
		while($row=mysqli_fetch_row($query)){
			if(sha1($password)==$row[3]){
				$_SESSION['login'] = TRUE;
				$_SESSION['username'] = $username;
				$_SESSION['fullname'] = $row[1];
				$_SESSION['error'] = 0;
				header("Location: " . $location);	
			} else {
				$_SESSION['error'] = 1;
				header("Location: " . $location);
			}
		}
	} else {
		echo $_SESSION['error'] = 2;
		header("Location: " . $location);		
	}		
?>