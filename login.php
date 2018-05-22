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
	</div>
	<!--The links to other pages in the website-->
	<div class="topnav">
		<?php include 'topnav.php' ?>
	</div>
	<div class="loginform">
		<form onsubmit="ValidateEmail()" method="post">
    			<b>Username</b><input type="text" placeholder="Enter Email" id="email" name="email" required><br>
    			<label for="psw"><b>Password</b></label>
    			<input type="password" placeholder="Enter Password" id="psw" name="password" required><br>
				<label><br>
      			<input type="checkbox" checked="checked" id="remember"> Remember me
				</label><br>
				<button type="submit" name="button">Login</button><br><?php include 'loginscript.php' ?><br>
				<button type="button" class="cancelbtn">Cancel</button><br>
				<span class="psw"><a href="#">Forgot password?</a></span>
		</form>
	</div>
	
	<!--The footer of the webpage-->
	<div class="footer">
		&copy; 2018 Brisbane Hotspot Reviewer		
	</div>
</div>
</body>