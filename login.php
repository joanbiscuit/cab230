<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
<!--The wrapper wraps around the entire webpage to keep it a certain size-->
<div class="wrapper">	
	<!--The header class contains the name at the top of the page and the links to other pages-->
	<div class="header">
		<h1>Brisbane Hotspot Reviewer</h1>
		<hr>
	</div>
	<!--The links to other pages in the website-->
	<div class="topnav">
		<a href="homepage.php">Homepage</a> <a href="">Hotspots</a> <a href="">Recent reviews</a> 
		<!--Dropdown for the search buttons-->
		<div class="dropdown">
			<a href="">Search</a>
			<div class="dropdown-content">
				<a href="searchname.php">Keywords</a>
				<a href="nearesthotspot.php">Nearest hotspot</a>
			</div>
		</div>
		<!--The links to login/signup are on the other side of the header-->
		<div class="login">
			<?php
			include 'loginout.php';
			IsLoggedIn();
			?>
		</div>
	</div>
	<!-- Search pages-->
	<form onsubmit="ValidateEmail()" method="post">
 		<div class="contents">
			<h2>
				Log in
			</h2>
    		<b>Username</b><input type="text" placeholder="Enter Email" id="email" name="email" required><br>
    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" id="psw" name="password" required><br>
			<label><br>
      		<input type="checkbox" checked="checked" id="remember"> Remember me
			</label><br>
			<button type="submit" name="button">Login</button><br><?php include 'loginscript.php' ?><br>
			<button type="button" class="cancelbtn">Cancel</button><br>
			<span class="psw"><a href="#">Forgot password?</a></span>
  		</div>
	</form>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>