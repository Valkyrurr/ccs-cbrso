<!doctype html>
<html lang="en">
<head>
  <title>Register | College-Based Research and Social Outreach</title>
  <meta charset="utf-8">
  <meta name="description" content="Index">
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
	<?php if(isset($_SESSION['login']) != 1) die("Restricted Access. Login is required!"); ?>
	<?php
		if(isset($_POST['search'])) $search = $_POST['search'];
		include("query.php");
		echo "<a href='' onclick='goBack()'>Return to previous page</a>";
		
		$query = "SELECT `rso-projects`.id, `rso-projects`.project_title, `rso-partners`.partner, CONCAT(`rso-advisers`.last_name,', ', `rso-advisers`.first_name,' ',`rso-advisers`.middle_name), `rso-years`.year FROM `rso-projects` 
		LEFT JOIN `rso-partners` ON `rso-projects`.partner_id = `rso-partners`.id
		LEFT JOIN `rso-advisers` ON `rso-projects`.adviser_id = `rso-advisers`.id
		LEFT JOIN `rso-years` ON `rso-projects`.year_id = `rso-years`.id
		WHERE";
		$subquery = "SELECT CONCAT(`rso-researchers`.first_name,' ',`rso-researchers`.middle_name,' ',`rso-researchers`.last_name) FROM `rso-researchers` LEFT JOIN `rso-projects` ON `rso-researchers`.outreach_id=`rso-projects`.id WHERE `rso-researchers`.outreach_id=";
		if(!trim($search)){
			header("Location: social-outreach.php");
		} elseif($search == "--all") {
			$query = mysqli_query($conn, $query . " 1 ORDER BY `rso-projects`.project_title ASC;");
		} else {
			$search = explode(" ", $search);
			foreach($search as $key=>$value){
				$search[$key] = $value . "*";
			}
			$search = implode(" ", $search);
			$query = mysqli_query($conn, $query . " MATCH(`rso-projects`.project_title) AGAINST('".$search."' IN BOOLEAN MODE);");
		}
		if(mysqli_num_rows($query)>0){
		echo "</br>Search for \"" . preg_replace("/[^A-Za-z0-9]/", ' ', $search) . "\" found " . mysqli_num_rows($query) . " results!";
		echo "<table id='sortthis' class='tablesorter'><thead>";
		echo "<tr><th>Social Outreach Program</th><th>Partner</th><th>Adviser</th><th>Year</th><th>Researchers</th></tr></thead><tbody>";
		while($row=mysqli_fetch_row($query)){
			$subsql = mysqli_query($conn, $subquery . $row[0] . ";");
			echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td>
			<td><table id='subtable'>";
			while($subrow=mysqli_fetch_row($subsql)){
				echo "<tr><td>".$subrow[0]."</td></tr>";
			}
			echo "</table></td></tr>";
		}
		echo "</tbody></table>";
		}else{
			echo "</br>Search for \"" . preg_replace("/[^A-Za-z0-9]/", ' ', $search) . "\" found " . mysqli_num_rows($query) . " results!</br></br>";
		}
		echo "<a href='' onclick='goBack()'>Return to previous page</a>";
	?>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>