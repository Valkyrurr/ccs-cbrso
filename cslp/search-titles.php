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
  <script>
		function confirmAction(){
			var answer = confirm("Are you sure you want to delete this record?");
			if(!answer){
				return false;
			}
		}
  </script>
</head>
<body>
	<?php include_once("includes/top.php"); ?>
	<?php
	if(isset($_SESSION['array'])){
		unset($_SESSION['array']);
	}
	if(isset($_SESSION['keyword'])){
		$keyword = trim($_SESSION['keyword']);
	} else {
		$keyword = '';
	}
	$confirm = "Do you really want to Delete this item?";
	echo "<a href='' onclick='goBack()'>Return to previous page</a>";	
	include("query.php");
	$query = "SELECT `rso-research-titles`.id, `rso-research-titles`.research_title, `rso-themes`.theme, `rso-areas`.areas, CONCAT(`rso-advisers`.last_name,', ', `rso-advisers`.first_name,' ',`rso-advisers`.middle_name), `rso-years`.year
	FROM `rso-research-titles`
	LEFT JOIN `rso-themes` ON `rso-research-titles`.theme_id=`rso-themes`.id 
	LEFT JOIN `rso-areas` ON `rso-research-titles`.area_id=`rso-areas`.id 
	LEFT JOIN `rso-advisers` ON `rso-research-titles`.adviser_id=`rso-advisers`.id
	LEFT JOIN `rso-years` ON `rso-research-titles`.year_id=`rso-years`.id
	WHERE";
	$subquery = "SELECT CONCAT(`rso-researchers`.first_name,' ',`rso-researchers`.middle_name,' ',`rso-researchers`.last_name) FROM `rso-researchers` LEFT JOIN `rso-research-titles` ON `rso-researchers`.thesis_id=`rso-research-titles`.id WHERE `rso-researchers`.thesis_id=";
	if(isset($_GET['viewid']) && !empty($_GET['viewid'])){
		$viewid = $_GET['viewid'];
		$query = mysqli_query($conn, $query . " `rso-research-titles`.id=".$viewid.";");
	}else{
		if(!trim($keyword)){
			header("Location: index.php");
		} elseif($keyword == "--all"){
			$query = mysqli_query($conn, $query . " 1 ORDER BY `rso-research-titles`.research_title ASC;");
		} else{
			$keyword = explode(" ", $keyword);
			foreach($keyword as $key=>$value){
				$keyword[$key] = $value . "*";
			}
			$keyword = implode(" ", $keyword);
			$query = mysqli_query($conn, $query . " MATCH(`rso-research-titles`.research_title) AGAINST('".$keyword."' IN BOOLEAN MODE);");
		}
	}
	if(mysqli_num_rows($query)>0){
		echo "</br>Search for \"" . preg_replace("/[^A-Za-z0-9]/", ' ', $keyword) . "\" found " . mysqli_num_rows($query) . " results!";
		echo "<table id='sortthis' class='tablesorter'><thead>";
		echo "<tr><th>Research Title</th><th>Theme</th><th>Area</th><th>Adviser</th><th>Year of Publication</th><th>Researchers</th>";
		if(isset($_SESSION['login']) == 1) echo "<th colspan='4'>*</th>";
		echo "</tr></thead><tbody>";
		while($row=mysqli_fetch_row($query)){		
			$subsql = mysqli_query($conn, $subquery . $row[0] . ";");
			echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>
			<td><table id='subtable'>";
			while($subrow=mysqli_fetch_row($subsql)){
				echo "<tr><td>".$subrow[0]."</td></tr>";
			}
			echo "</table></td>";
			if(isset($_SESSION['login']) == 1){
				echo "<td><a href='show-researchers.php?id=$row[0]'>[VIEW]</a></td><td><a href='add-title.php?id=$row[0]'>[ADD]</a></td><td><a href='edit-title.php?id=$row[0]'>[EDIT]</a></td><td><a href='delete-title.php?id=$row[0]' onclick='return confirmAction();' style='color:red;'>[DELETE]</a></td></tr>";
			}
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