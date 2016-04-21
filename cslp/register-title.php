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
	<?php if(isset($_SESSION['login']) != 1) die("Restricted Access. Login is required!"); ?>
	<form name="register" action="register-title-.php" method="POST">
		<legend>Register Research Title</legend>
		<a href="register-title.php">Research - Thesis</a>&nbsp;|&nbsp;
		<a href="register-sop-project.php">Research - Social Outreach</a>&nbsp;|&nbsp;
		<a href="register-researcher.php">Researcher - Thesis</a>&nbsp;|&nbsp;
		<a href="register-sop-researcher.php">Researcher - Social Outreach</a>&nbsp;|&nbsp;
		<a href="register-adviser.php">Advisers</a>&nbsp;|&nbsp;
		<a href="register-sop-partner.php">Partners</a>&nbsp;|&nbsp;
		<a href="#">CCS Area</a>&nbsp;|&nbsp;
		<a href="#">Theme</a></br></br>
		<!-- THESIS TITLE -->
		<div class="row">
		  <label class="one-third column tar" for="textarea">Thesis Title:</label>
		  <div class="two-thirds column">                     
			<textarea class="u-full-width" id="textarea" name="textarea" required></textarea>
		  </div>
		</div>
		<!-- THEME -->
		<div class="row">
		  <label class="one-third column tar" for="theme">Theme:</label>
		  <div class="two-thirds column">
			<select id="theme" name="theme" class="u-half-width">
				<option value="" selected="selected"></option>
				<?php
					include("query.php");
					$query = mysqli_query($conn, "SELECT * FROM `rso-themes`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							echo "<option value='$row[0]'>".$row[1]."</option>";
						}
					}
				?>
			</select>
		  </div>
		</div>
		<!-- CCS AREA -->
		<div class="row">
		  <label class="one-third column tar" for="area">CCS Area:</label>
		  <div class="two-thirds column">
			<select id="area" name="area" class="u-half-width">
			<option value="" selected="selected"></option>
				<?php
					include("query.php");
					$query = mysqli_query($conn, "SELECT * FROM `rso-areas`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							echo "<option value='$row[0]'>".$row[1]."</option>";
						}
					}
				?>	
			</select>
		  </div>
		</div>
		<!-- ADVISER -->
		<div class="row">
		  <label class="one-third column tar" for="adviser">Adviser:</label>
		  <div class="two-thirds column">
			<select id="adviser" name="adviser" class="u-half-width">
			<option value="" selected="selected"></option>
				<?php
					include("query.php");
					$query = mysqli_query($conn, "SELECT `id`,CONCAT(`last_name`,', ',`first_name`,' ',`middle_name`) FROM `rso-advisers`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							echo "<option value='$row[0]'>".$row[1]."</option>";
						}
					}
				?>
			</select>
		  </div>
		</div>
		<!-- YEAR OF PUBLICATION -->
		<div class="row">
		  <label class="one-third column tar" for="yop">Year of Publication:</label>
		  <div class="two-thirds column">
			<select id="yop" name="yop" class="u-half-width" required>
			<option value=""></option>
				<?php
					include("query.php");
					$query = mysqli_query($conn, "SELECT `rso-years`.id, `rso-years`.year FROM `rso-years`;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							echo "<option value='$row[0]'>".$row[1]."</option>";
						}
					}
				?>
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