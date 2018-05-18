<!DOCTYPE html>
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
		<!--The links to other pages in the website-->
	</div>
	<div class="topnav">
		<a href="homepage.php">Homepage</a> 
		<a href="">Hotspots</a> 
		<a href="">Recent reviews</a> 
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
			require 'loginout.php';
			IsLoggedIn();
			?>
		</div>	
	</div>
	<div>
		<form>
		Welcome to the Brisbane Hotspot Reviewer!
		<?php
			require 'sessionstart.php';
		?>
		</form>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<table class="table">
			<tr>
				<th>
					<a class="links" href="homepage.php">Homepage</a>
				</th>
				<th>
					<a class="links">Hotspots</a>
				</th>
				<th>
					<a class="links">Recent Reviews</a>
				</th>
				<th>
					<a class="links">Search</a>
				</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="searchname.php">Keywords</a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<a href="nearesthotspot.php">Nearest Hotspot</a>
				</td>
			</tr>
			<tr>
				<td colspan="4">&copy; 2018 Brisbane Hotspot Reviewer</td>
			</tr>
	</div>
</div>
</body>
</html>