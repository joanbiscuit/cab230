<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
<script type="text/javascript" src="javascript.js"></script>
</head>
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
	<!-- Search inputs-->
	<body>
		<form onsubmit="searchPageValidate();" method="get" action="results.php" class="contents">
			<h2>
				Search Keywords
			</h2>
			Name: <input type="text" name="selectname"><br>
			Suburb:<br>
			<!-- Dropdown Menu Options-->
			<div class = suburboption>
				<?php include 'select_options.php';?>
			</div>
			Postcode: 
			<input type="text" name="selectpostcode"><br>
			Rating: <br>
			<input type="number" id="rating" min="1" max="5" step="0.01"><br>
			<button type="submit" name="submitsearch" class="searchbtn">Search!</button>
		</form>
	</body>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</html>