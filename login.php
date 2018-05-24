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
		<?php include 'topnav.php' ?>
	</div>
	<!--Login Form-->
 	<div class="contents">
		<form onsubmit="ValidateEmail()" method="post">
			<h2>Login</h2>
			<?php include 'loginscript.php' ?>
			<label for="username">Username or Email:</label>
			<input type="text" placeholder="Enter your Email or Username" id="email" name="email" required><br>
    		<label for="psw">Password:</label>
    		<input type="password" placeholder="Enter Password" id="psw" name="password" required><br>
			<label><br>
      		<input type="checkbox" checked="checked" id="remember"> Remember me
			</label><br>
			<button type="submit" name="button" class="submitbtn">Login</button><br>
		</form>
		<div class="container">
			<form method="get" action="homepage.php">
				<button type="submit" class="cancelbtn">Cancel</button>
				<span class="link">Forgot <a href="#">password?</a></span>
			</form>
		</div>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>