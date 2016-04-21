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
		$keyword = $_SESSION['keyword'];
	} else {
		$keyword = '';
	}
	include("query.php");
	echo "<a href='' onclick='goBack()'>Return to previous page</a>";
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT `rso-themes`.id, `rso-themes`.theme, `rso-research-titles`.research_title, `rso-research-titles`.id FROM `rso-themes` LEFT JOIN `rso-research-titles` ON `rso-themes`.id=`rso-research-titles`.theme_id WHERE `rso-research-titles`.theme_id=".$id.";");
	if(mysqli_num_rows($query)>0){
		echo "<table id='sortthis' class='tablesorter'><thead>";
		echo "<tr><th>Name</th><th>Thesis Title</th></tr></thead><tbody>";
		while($row=mysqli_fetch_row($query)){
			echo "<tr><td>".$row[1]."</td><td><a href='search-titles.php?viewid=$row[3]'>".$row[2]."</td></tr>";
		}
		echo "</tbody></table>";
	}else{
		header('Location: index.php');
	}
	echo "<a href='' onclick='goBack()'>Return to previous page</a>";
	?>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>