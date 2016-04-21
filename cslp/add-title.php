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
  <script type="text/javascript" src="resources/js/clone-form-td.js"></script>
  <script type="text/javascript">
		$(document).ready(function(){ 
			$("#sortthis").tablesorter(); 
			} 
		);
		$(document).ready(function(){ 
			$("#sortthat").tablesorter(); 
			} 
		);
  </script>
</head>
<body>
	<?php include_once("includes/top.php"); ?>
	<form name="register" action="add-title-.php" method="POST">
		<?php
			include("query.php");
			echo "<a href='search-titles.php'>Return to previous page</a>";
		?>
		<label for="textarea">Thesis Title:</label>                   
		<textarea class="u-full-width" id="textarea" name="textarea" disabled><?php
			$id = $_GET['id'];
			$_SESSION['temp'] = $id;
			$query=mysqli_query($conn, "SELECT `rso-research-titles`.research_title FROM `rso-research-titles` WHERE `rso-research-titles`.id='".$id."'");
			while($row=mysqli_fetch_row($query)){
				echo $row[0];
			};
		?></textarea>
		<?php 
			if(isset($_SESSION['array']) AND !empty($_SESSION['array'])){
				$sqlstring = "SELECT id, CONCAT(last_name,', ',first_name,' ',middle_name) FROM `rso-researchers` WHERE id IN(";
				echo '<input class="button-primary u-max-full-width u-pull-right" type="submit" value="Submit">';
				for($x=0;$x<count($_SESSION['array']);$x++){
					$sqlstring=$sqlstring.(string)$_SESSION['array'][$x];
					if(count($_SESSION['array'])-1==$x){
						$sqlstring=$sqlstring.")";
					}else{
						$sqlstring=$sqlstring.",";
					}	
				}
				$query=mysqli_query($conn, $sqlstring);
				echo "<table id='sortthat' class='tablesorter'><thead><tr><th>Name</th><th>*</th></tr></thead><tbody>";
				while($row=mysqli_fetch_row($query)){
					echo "<tr><td>".$row[1]."</td><td><a href='remove-to.php?id=$row[0]' class='btn btn-danger' role='button'>-</a></td></tr>";
				};
				echo "</tbody></table>";
			}
			$query = mysqli_query($conn, "SELECT `rso-researchers`.id, CONCAT(`rso-researchers`.last_name,', ', `rso-researchers`.first_name,' ', `rso-researchers`.middle_name) FROM `rso-researchers` ORDER BY `rso-researchers`.last_name");
			echo "<table id='sortthis' class='tablesorter'><thead><tr><th>Name</th><th>*</th></tr></thead><tbody>";
			while($row=mysqli_fetch_row($query)){
				echo "<tr><td>".$row[1]."</td><td><a href='add-to.php?id=$row[0]' class='btn btn-info' role='button'>+</a></td></tr>";
			}
			echo "</tbody></table>";
			echo "<a href='search-titles.php'>Return to previous page</a>";
		?>
		</form>
	
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>