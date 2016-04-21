<?php if(session_status() == PHP_SESSION_NONE) { session_start(); } ?>
<header class="header">
<div class="container">
	<div></div>
	<img src="resources/img/logo.png">
	<nav>
		<a href="">Home</a>
		<a href="">About</a>
		<a href="">Programs Offered</a>
		<a href="">Student's Corner</a>
		<a href="">Downloadables</a>
		<a href="index.php">CBRSO</a>
	</nav>
</div>
</header>
<div class="main container">
	<div class="sidebar">
	<div>
	<h6>Search CBRSO</h6>
	<form action="search-what.php" method="POST">
		<div><input class="u-max-full-width" type="text" name="keyword" value="<?php if(isset($_SESSION['keyword'])) echo $_SESSION['keyword']; ?>" required></div>
		<div><input id="rb1" type="radio" name="category" value="1" <?php if(isset($_SESSION['category']) && $_SESSION['category'] == 1) echo 'checked'; ?> required/><label for="rb1">Thesis Title</label></div>
		<div><input id="rb2" type="radio" name="category" value="2" <?php if(isset($_SESSION['category']) && $_SESSION['category'] == 2) echo 'checked'; ?> required/><label for="rb2">Adviser Name</label></div>
		<div><input id="rb3" type="radio" name="category" value="3" <?php if(isset($_SESSION['category']) && $_SESSION['category'] == 3) echo 'checked'; ?> required/><label for="rb3">Researcher Name</label></div>
		<div><input id="rb4" type="radio" name="category" value="4" <?php if(isset($_SESSION['category']) && $_SESSION['category'] == 4) echo 'checked'; ?> required/><label for="rb4">CCS Area</label></div>
		<div><input id="rb5" type="radio" name="category" value="5" <?php if(isset($_SESSION['category']) && $_SESSION['category'] == 5) echo 'checked'; ?> required/><label for="rb5">Thematic Area</label></div><br>
		<input type="hidden" name="address" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
		<input class="button-primary u-full-width" type="submit" value="Submit">
	</form>
	</div>
	<div style="display: <?php echo isset($_SESSION['login']) == 1 ? 'none':'block' ?>">
		<h6>Login CBRSO</h6>
		<form action="login.php" method="POST"> 
			Username:<input class="u-max-full-width" type="text" name="username">
			Password:<input class="u-max-full-width" type="password" name="password">
			<?php 
				if(isset($_SESSION['error'])){
					if($_SESSION['error']===1){ 
						echo "<p class='warning'>Invalid password!</p>"; 
					} elseif($_SESSION['error']===2){
						echo "<p class='warning'>Invalid username!</p>";
					}
				}
			?>	
			<input type="hidden" name="location" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
			<input class="button-primary u-full-width" type="submit" value="Login">
		</form>
	</div>
	<?php 
	if(isset($_SESSION['login']) == TRUE){
		echo "<div><h6>Register</h6>";
		echo "<form action='logout.php' method='POST'>";
		echo "<ul><li><a href='register.php'>Registration Page</a></li>
		<li><a href='social-outreach.php'>Social Outreach</a>
		<li><a href='#'>Logs</a></ul>";
		echo "<input class='button-primary u-full-width' type='submit' value='Logout ".$_SESSION['username']."'></form></div>";
	}
	?>
	</div><!--
	--><div class="content">