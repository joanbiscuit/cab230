<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
<a href="http://docs.jquery.com/Events/ready#fn"></a>
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
		<?php include 'topnav.php'?>
	</div>
	<!--Content in the webpage-->
	<div class="contents">
		<form onsubmit="searchPageValidate();" method="get" action = "results.php">
			<h2>Search Keywords</h2>
			Name: <input type="text" name="selectname"></br>
			Suburb: <br>
			<!-- Dropdown Menu Options-->
			<div class="suburboption">
				<?php include 'select_options.php';?>
			</div>
			Postcode:
			<input type="text" name="selectpostcode"><br>
			Rating: <br>
			<input type = "number" id="rating" min="0" max="5" step="0.5"><br>
			<button type = "submit" name ="submitsearch" class="searchbtn">Search</button>
		</form>
		<form method="get" action="nearesthotspot.php">
			<button type="submit" name="nearestsearch" class="searchbtn">Nearest Hotspot</button>
		</form>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>
</html>