<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt0-G_rlX5XwmwOJfd_yYBesB_bZc3bfU"></script>
<script type="text/javascript" src="javascript.js"></script>
<title>Brisbane Hotspot Reviewer</title>
</head>
<?php
include 'individualhotspot.php';
?>
<body onload="getLocation();">
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
	<!--Content in the webpage-->
	<div class="contents">
		<?php include 'individualhotspotcontent.php' ?>
		<div class="writereview">
			<form method="post">
				Title:
				<input type="text" name="title"><br>
				Review:
				<textarea name="comment"></textarea><br>
				Star rating:
				<input type="number" name="rating" min="0" max="5" step="0.5">
				<button type="submit" name="submitreview" class="searchbtn">Post review</button>
			</form>
			<?php include 'writereview.php'?>
		</div>
	</div>

	<!--The footer of the webpage-->
	<div class="footer">
		&copy; 2018 Brisbane Hotspot Reviewer		
	</div>
</div>
</body>