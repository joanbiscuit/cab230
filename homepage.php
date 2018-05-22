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
	</div>
	<!--The links to other pages in the website-->
	<div class="topnav">
		<?php include 'topnav.php' ?>
	</div>
	<div class="content">
	<div class="homepage">
		 <div class='search'>
			<p>Search for any hotspot around Brisbane</p><br>
			<form onsubmit='searchPageValidate();' method='get' action='results.php'>
				Name: <input type='text' name='selectname'><br>
				Suburb: 
				<!-- Dropdown Menu Options-->
				<?php include 'select_options.php';?>
				Postcode: <input type="text" name="selectpostcode"><br>
				Rating: <input type="number" id="rating" min="1" max="5" step="0.01"><br>
				<button type="submit" name="submitsearch">Search!</button>
			</form>
			<form method="get" action="results.php">
				<button type="submit" name="nearestsearch">Nearest Hotspot</button>
			</form>
		 </div>
		</div>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		&copy; 2018 Brisbane Hotspot Reviewer		
	</div>
</div>
</body>
</html>