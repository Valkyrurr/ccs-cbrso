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
				header:{
					0:{ sorter: false},
					1:{ sorter: false}
				}
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
	$query = mysqli_query($conn, "SELECT `rso-research-titles`.research_title, CONCAT(`rso-researchers`.last_name,', ',`rso-researchers`.first_name,' ',`rso-researchers`.middle_name) FROM `rso-researchers` LEFT JOIN `rso-research-titles` ON `rso-researchers`.thesis_id=`rso-research-titles`.id WHERE `rso-researchers`.thesis_id=".$id.";");
	if(mysqli_num_rows($query)>0){
		echo "<table id='sortthis' class='tablesorter'><thead>";
		echo "<tr><th>Research Title</th><th>Researchers</th></tr></thead><tbody>";
		$flag = 1;
		while($row=mysqli_fetch_row($query)){
			if($flag==1){
				$flag=0;
				echo "<tr><td rowspan='10'>".$row[0]."</td></tr>";/* * * * */
			}
			echo "<tr><td>".$row[1]."</td></tr>";
		}
		echo "</tbody></table>";
	}else{
		header('Location: search-what.php');
	}
	echo "<a href='' onclick='goBack()'>Return to previous page</a>";
	?>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>