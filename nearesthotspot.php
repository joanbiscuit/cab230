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
<div class=wrapper">	
	<!--The header class contains the name at the top of the page and the links to other pages-->
	<div class="header">
		<h1>Brisbane Hotspot Reviewer</h1>
		<hr>
		<!--The links to other pages in the website-->
		<div class="links">
			<a href="homepage.php">Homepage</a> <a href="">Hotspots</a> <a href="">Recent reviews</a> 
			<!--Dropdown for the search buttons-->
			<div class="dropdown">
				<a href="">Search</a>
				<div class="dropdown-content">
					<a href="searchname.php">Keywords</a>
					<a href="nearesthotspot.php">Nearest hotspot</a>
			    </div>
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
	<!-- Search pages-->
	<div class="content" method="get">
		<form>
			<button name="search">Search</button>
		</form>
		<?php
		include 'nearesthotspotphp.php';
		?>
		
		
		<div id="map"></div>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<p>Webpage created by Jean-Luc Danoy and Azure Hutchings, 2018.</p>
	</div>
</div>
</body>