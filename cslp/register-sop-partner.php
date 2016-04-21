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
    <form name="register" action="register-sop-partner-.php" method="POST">
        <legend>Register Partner</legend>
		<a href="register-title.php">Research - Thesis</a>&nbsp;|&nbsp;
		<a href="register-sop-project.php">Research - Social Outreach</a>&nbsp;|&nbsp;
		<a href="register-researcher.php">Researcher - Thesis</a>&nbsp;|&nbsp;
		<a href="register-sop-researcher.php">Researcher - Social Outreach</a>&nbsp;|&nbsp;
		<a href="register-adviser.php">Advisers</a>&nbsp;|&nbsp;
		<a href="register-sop-partner.php">Partners</a>&nbsp;|&nbsp;
		<a href="#">CCS Area</a>&nbsp;|&nbsp;
		<a href="#">Theme</a></br></br>
		<div class="row">
			<label class="one-third column tar">Partner:</label>
			<div class="two-thirds column">
			<div class="row normal">
				<input class="u-block u-full-width" id="partner" name="partner" type="text" required>
			</div>
			<div class="row normal">
				<label class="u-block" for="address">Address:</label>
				<input class="u-block u-full-width" id="address" name="address" type="text" required>
			</div>
			</div>
		</div>
		<div class="row">
			<label class="one-third column tar">Contact Details:</label>
			<div class="two-thirds column">
			<div class="row normal">
				<label class="u-block" for="first_name">Firstname:</label>
				<input class="u-block" id="first_name" name="first_name" type="text">
			</div>
			<div class="row normal">
				<label class="u-block" for="middle_name">Middlename:</label>
				<input class="u-block" id="middle_name" name="middle_name" type="text">
			</div>
			<div class="row normal">
				<label class="u-block" for="last_name">Lastname:</label>
				<input class="u-block" id="last_name" name="last_name" type="text">
			</div>
			<div class="row normal">
				<label class="u-block" for="contact_num">Contact Number:</label>
				<input class="u-block" id="contact_num" name="contact_num" type="number">
			</div>
			<div class="row normal">
				<label class="u-block" for="email">E-Mail:</label>
				<input class="u-block" id="email" name="email" type="email">
			</div>
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