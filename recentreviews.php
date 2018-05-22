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
	<?php include 'getrecentreviews.php'?>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		&copy; 2018 Brisbane Hotspot Reviewer		
	</div>
</div>
</body>
</html>