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
  <script>
		function goBack() {
		window.history.back();
  }
  </script>
</head>
<body>
	<?php include_once("includes/top.php"); ?>
		<form name="register" action="edit-title-.php" method="POST">
			<?php 
			include("query.php");
			echo "<a href='' onclick='goBack()'>Return to previous page</a>";
			?>		
			<label for="textarea">Thesis Title:</label>
			<?php
			$id = $_GET['id'];
			$query = mysqli_query($conn, "SELECT * FROM `rso-research-titles` WHERE id=".$id.";");
			while($row=mysqli_fetch_row($query)){
				$theme = $row[2];
				$area = $row[3];
				$adviser = $row[4];
				$year = $row[5];
				echo '<textarea class="form-width-1-2" id="textarea" name="textarea" required>'.$row[1].'</textarea>';
			}
			?>
			<label for="theme">Theme:</label>
			<select id="theme" name="theme" class="form-width-1-3">
				<option value="" selected="selected"></option>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `rso-themes`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							if($row[0]===$theme){
								echo "<option value='$row[0]' selected/>".$row[1]."</option>";
							}else{
								echo "<option value='$row[0]'>".$row[1]."</option>";
							}
						}
					}else{
					}
				?>
			</select>
			<label for="area">CCS Area:</label>
			<select id="area" name="area" class="form-width-1-3">
				<option value="" selected="selected"></option>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `rso-areas`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							if($row[0]===$area){
								echo "<option value='$row[0]' selected/>".$row[1]."</option>";
							}else{
								echo "<option value='$row[0]'>".$row[1]."</option>";
							}
						}
					}else{
					}
				?>	
			</select>
			<label for="adviser">Adviser:</label>
			<select id="adviser" name="adviser" class="form-width-1-3">
				<option value="" selected="selected"></option>
				<?php
					$query = mysqli_query($conn, "SELECT `id`,CONCAT(`last_name`,', ',`first_name`,' ',`middle_name`) FROM `rso-advisers`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							if($row[0]===$adviser){
								echo "<option value='$row[0]' selected/>".$row[1]."</option>";
							}else{
								echo "<option value='$row[0]'>".$row[1]."</option>";
							}
						}
					}else{
					}
				?>
			</select>
			<label for="year">Year of Publication:</label>
			<select id="year" name="year"  class="form-width-1-3" required>
				<option value=""></option>
				<?php
					$query = mysqli_query($conn, "SELECT `rso-years`.id, `rso-years`.year FROM `rso-years`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							if($row[0]===$year){
								echo "<option value='$row[0]' selected/>".$row[1]."</option>";
							}else{
								echo "<option value='$row[0]'>".$row[1]."</option>";
							}
						}
					}else{
					}
				?>
			</select>
			<?php echo "<input type='hidden' name='id' value=$id>" ?></br>
			<input type="hidden" name="location" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
			<input class="button-primary u-max-full-width" type="submit" value="Submit">
		</form>	
	<?php include_once("includes/bottom.php"); ?>	
</body>
</html>