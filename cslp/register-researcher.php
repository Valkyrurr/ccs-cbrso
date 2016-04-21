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
  <script type="text/javascript" src="resources/js/clone-form-td.js"></script>
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
	<form name="register" class="form-horizontal" action="register-researcher-.php" method="post" onsubmit="return validateForm()">
		<legend>Register Researcher</legend>
		<a href="register-title.php">Research - Thesis</a>&nbsp;|&nbsp;
		<a href="register-sop-project.php">Research - Social Outreach</a>&nbsp;|&nbsp;
		<a href="register-researcher.php">Researcher - Thesis</a>&nbsp;|&nbsp;
		<a href="register-sop-researcher.php">Researcher - Social Outreach</a>&nbsp;|&nbsp;
		<a href="register-adviser.php">Advisers</a>&nbsp;|&nbsp;
		<a href="register-sop-partner.php">Partners</a>&nbsp;|&nbsp;
		<a href="#">CCS Area</a>&nbsp;|&nbsp;
		<a href="#">Theme</a></br></br>
		<!-- Textarea -->
		<div class="row">
		  <label class="one-third column tar" for="title">Research Title:</label>
		  <div class="two-thirds column">
			<select id="title" name="title" class="u-full-width" size="8" style="height: 100%;">
			<option value="" selected="selected"></option>
				<?php
					include("query.php");
					$query = mysqli_query($conn, "SELECT `rso-research-titles`.id, `rso-research-titles`.research_title FROM `rso-research-titles` ORDER BY `rso-research-titles`.research_title;");
					if(mysqli_num_rows($query)>0){				
						while($row=mysqli_fetch_row($query)){
							echo "<option value='$row[0]'>".$row[1]."</option>";
						}
					}else{
					}
				?>
			</select>
		  </div>
		<div id="entry1" class="row clone-this">
			<label id="reference" name="reference" class="clone-reference one-third column tar">Researcher #1:</label>
			<div class="two-thirds column" style="border-bottom: 1px solid #D1D1D1; margin-bottom: 1rem;">
			  <div class="row normal">
			  <label class="one-third column tar" for="first_name1">First name:</label>
			  <input class="two-thirds column" id="first_name1" name="first_name1" type="text" required>
			  </div>
			  <div class="row normal">
			  <label class="one-third column tar" for="middle_name1">Middle name:</label>
			  <input class="two-thirds column" id="middle_name1" name="middle_name1" type="text">
			  </div>
			  <div class="row normal">
			  <label class="one-third column tar" for="last_name1">Last name:</label>
			  <input class="two-thirds column" id="last_name1" name="last_name1" type="text" required>
			  </div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="two-thirds offset-by-one-third column tar">
			<button type="button" id="btnAdd" name="btnAdd" class="btn btn-info">+</button>
			<button type="button" id="btnDel" name="btnDel" class="btn btn-danger">-</button>
			</div>
		</div>
		<div class="row">
			<div class="two-thirds offset-by-one-third column tar">
				<input type="submit" value="Submit">
			</div>
		</div>
	</form>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>