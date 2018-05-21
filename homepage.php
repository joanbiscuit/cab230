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
		<a href="homepage.php">Homepage</a> 
		<a href="hotspots.php">Hotspots</a> 
		<a href="">Recent reviews</a> 
		<!--Dropdown for the search buttons-->
		<div class="dropdown">
			<button class="dropbtn">Search</button>
			<div class="dropdown-content">
				<a href="searchname.php">Keywords</a>
				<a href="nearesthotspot.php">Nearest hotspot</a>
		    </div>
		</div>
		<!--The links to login/signup are on the other side of the header-->
		<div class="login">
			<?php
			require 'loginout.php';
			IsLoggedIn();
			?>
		</div>	
	</div>
		<div class="contents">
			<?php
				require 'sessionstart.php';
			?>
		</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>
</html>