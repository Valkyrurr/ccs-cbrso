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
	<legend>Registration Page</legend>
	<a href="register-title.php">Research - Thesis</a>&nbsp;|&nbsp;
	<a href="register-sop-project.php">Research - Social Outreach</a>&nbsp;|&nbsp;
	<a href="register-researcher.php">Researcher - Thesis</a>&nbsp;|&nbsp;
	<a href="register-sop-researcher.php">Researcher - Social Outreach</a>&nbsp;|&nbsp;
	<a href="register-adviser.php">Advisers</a>&nbsp;|&nbsp;
	<a href="register-sop-partner.php">Partners</a>&nbsp;|&nbsp;
	<a href="#">CCS Area</a>&nbsp;|&nbsp;
	<a href="#">Theme</a></br></br>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>