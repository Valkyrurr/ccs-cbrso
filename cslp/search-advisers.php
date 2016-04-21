<!doctype html>
<html lang="en">
<head>
  <title>Search | College-Based Research and Social Outreach</title>
  <meta charset="utf-8">
  <meta name="description" content="Search">
  <meta name="author" content="EFSTorralba">
  <link rel="stylesheet" href="resources/css/normalize.css">
  <link rel="stylesheet" href="resources/css/skeleton.css">
  <link rel="stylesheet" href="resources/css/tablesorter.css">
  <link rel="shortcut icon" href="resources/img/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="resources/js/jquery-latest.js"></script> 
  <script type="text/javascript" src="resources/js/jquery.tablesorter.js"></script>
  <script type="text/javascript">
		$(document).ready(function(){ 
			$("#sortthis").tablesorter(); 
			} 
		);
  </script>
  <script>
		function goBack() {
		window.history.back();
  }
  </script>
</head>
<body>
	<?php include_once("includes/top.php"); ?>	
	<?php
	if(isset($_SESSION['keyword'])){
		$keyword = trim($_SESSION['keyword']);
	} else {
		$keyword = '';
	}
	include("query.php");
	echo "<a href='' onclick='goBack()'>Return to previous page</a>";
	$query = "SELECT `rso-advisers`.id, CONCAT(`rso-advisers`.last_name,', ', `rso-advisers`.first_name,' ',`rso-advisers`.middle_name) as adviser_name FROM `rso-advisers` WHERE ";
	if(!trim($keyword)){
			header("Location: index.php");
	} elseif($keyword == "--all"){
			$query = mysqli_query($conn, $query . "1;");
	} else{
			$query = mysqli_query($conn, $query . "CONCAT(`rso-advisers`.`first_name`, ' ', `rso-advisers`.`last_name`) LIKE '%".$keyword."%' ORDER BY adviser_name ASC;");	
	}
	if(mysqli_num_rows($query)>0){
		echo "</br>Search for \"" . preg_replace("/[^A-Za-z0-9]/", ' ', $keyword) . "\" found " . mysqli_num_rows($query) . " results!";
		echo "<table id='sortthis' class='tablesorter'><thead>";
		echo "<tr><th>Name</th><th>*</th></tr></thead><tbody>";
		while($row=mysqli_fetch_row($query)){
			echo "<tr><td>".$row[1]."</td><td align='center'><a href=view-papers.php?id=$row[0]>[VIEW]</a></td></tr>";
		}
		echo "</tbody></table>";
	}else{
		echo "</br>Search for \"" . preg_replace("/[^A-Za-z0-9]/", ' ', $keyword) . "\" found " . mysqli_num_rows($query) . " results!</br></br>";
	}		
	echo "<a href='' onclick='goBack()'>Return to previous page</a>";
	?>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>