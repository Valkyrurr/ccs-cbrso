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
	<form class="form-bg" style="max-height: 100%;" action="social-outreach-.php" method="POST">	
	<legend>Social Outreach Search</legend>
		<div style="margin-top: 6.66rem">
			<input type="text" name="search" style="height: 6.66rem; font-size: 2.22rem; width: 50%; display: block; margin: 0 auto;" placeholder="Good Game Have Fun!" autofocus>		
			<input type="submit" value="Search" style="width: 50%; display: block; margin: 0 auto;">		
		</div>
	</form>
	<?php include_once("includes/bottom.php"); ?>
</body>
</html>