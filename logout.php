<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
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
	<div class="contents">
	<?php
		$_SESSION['loggedin']=false;
		$_SESSION['username']=null;
		$_SESSION['email']=null;
	?>
	You have successfully logged out.
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>
</html>