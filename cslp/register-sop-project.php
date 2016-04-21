<!doctype html>
<html lang="en">
<head>
  <title>Register | College-Based Research and Social Outreach</title>
  <meta charset="utf-8">
  <meta name="description" content="Index">
  <meta name="author" content="EFSTorralba">
  <link rel="stylesheet" href="resources/css/normalize.css">
  <link rel="stylesheet" href="resources/css/skeleton.css">
  <link rel="shortcut icon" href="resources/img/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="resources/js/jquery-latest.js"></script>
  <script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active-href');
            }
        });
    });
  </script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
    <?php include_once("includes/top.php"); ?>
	<?php include("query.php"); ?>
    <?php if(isset($_SESSION['login']) != 1) die("Restricted Access. Login is required!"); ?>
<form name="register" action="register-sop-project-.php" method="POST">
	<legend>Register Project</legend>
	<a href="register-title.php">Research - Thesis</a>&nbsp;|&nbsp;
	<a href="register-sop-project.php">Research - Social Outreach</a>&nbsp;|&nbsp;
	<a href="register-researcher.php">Researcher - Thesis</a>&nbsp;|&nbsp;
	<a href="register-sop-researcher.php">Researcher - Social Outreach</a>&nbsp;|&nbsp;
	<a href="register-adviser.php">Advisers</a>&nbsp;|&nbsp;
	<a href="register-sop-partner.php">Partners</a>&nbsp;|&nbsp;
	<a href="#">CCS Area</a>&nbsp;|&nbsp;
	<a href="#">Theme</a></br></br>
	<div class="row">
		<label class="one-third column tar">Social Outreach Project Name:</label>
		<div class="two-thirds column">
		<div class="row normal">				
		<input class="u-block u-full-width" name="project" type="text" required>
		</div>
		</div>
	</div>
	<div class="row">
	<label class="one-third column tar">Partner:</label>
	<div class="two-thirds column">
	<select class="u-full-width" name="partner" size=8 style="height: 100%;" required>
		<option value="" selected="selected"></option>
		<?php 
		$query="SELECT `id`, `partner` FROM `rso-partners` ORDER BY `partner` ASC;";
		$query=mysqli_query($conn, $query); 
		while($row=mysqli_fetch_row($query)){ 
			echo "<option value=\"$row[0]\"> $row[1] </option>"; 
		} 
		?>
	</select>
	</div>
	</div>
	<div class="row">
	<label class="one-third column tar">Adviser:</label>
	<div class="two-thirds column">
	<select class="two-thirds column" name="adviser" required>
		<option value="" selected="selected"></option>
		<?php
		$query="SELECT `id`, CONCAT(`last_name`, ' ', `first_name`, ' ',`middle_name`) FROM `rso-advisers`;"; 
		$query=mysqli_query($conn, $query); 
		while($row=mysqli_fetch_row($query)){ 
		echo "<option value=\"$row[0]\"> $row[1] </option>"; } ?>
	</select>
	</div>
	</div>
	<div class="row">
	<label class="one-third column tar">Year:</label>
	<div class="two-thirds column">
	<select class="one-third column" name="year" required>
		<option value="" selected="selected"></option>
		<?php 
		$query="SELECT `id`, `year` FROM `rso-years`;"; 
		$query=mysqli_query($conn, $query); 
		while($row=mysqli_fetch_row($query)){ 
		echo "<option value=\"$row[0]\"> $row[1] </option>"; } ?>
	</select>
	</div>
	</div>
	<div class="row">
		<div class="two-thirds offset-by-one-third column">
			<input type="submit" value="Submit">
		</div>
	</div>
</form>
    <?php include_once("includes/bottom.php"); ?>
</body>
</html>