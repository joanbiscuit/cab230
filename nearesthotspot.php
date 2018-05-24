<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt0-G_rlX5XwmwOJfd_yYBesB_bZc3bfU">
</script>
</head>
<body>
<!--The wrapper wraps around the entire webpage to keep it a certain size-->
<div class="wrapper">	
	<!--The header class contains the name at the top of the page and the links to other pages-->
	<div class="header">
		<h1>Brisbane Hotspot Reviewer<h1>
		<hr>
	</div>
	<!--The links to other pages in the website-->
	<div class="topnav">
		<?php include 'topnav.php'?>
	</div>
	<!-- Search pages-->
	<div class="contents" method="get">
		<form>
			<h2>Nearest Hotspot</h2>
			<button name="search" class="searchbtn">Search</button>
		</form>
		<?php
		include 'nearesthotspotphp.php';
		?>
		<div id="map"></div>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>