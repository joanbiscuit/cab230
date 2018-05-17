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
		if(isset($_GET["search"])){
			//Get the latitudes and longitudes from the database
			$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Fetch the data from the database
			$statement = $pdo->prepare("SELECT latitude, longitude FROM items");
			$statement->execute();
			$data=$statement->fetchAll(PDO::FETCH_ASSOC);
			//Split up the data into two seperate arrays
			$latitude=array();	
			$longitude=array();
			//Push the data into the arrays
			foreach($data as $row){
				array_push($latitude, $row['latitude']);
				array_push($longitude, $row['longitude']);
			}
			
			$latitude=implode(", ", $latitude);
			$longitude=implode(",", $longitude);
			//Run the javascript
			echo"<script type='text/javascript'>
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(nearestHotspot);
			} else {
				window.alert('no geolocation active');
					}
			}
		function nearestHotspot(position){
			
			var lat2=[";echo $latitude; echo"];			
			var lng2=[";echo $longitude; echo"];	
			var i=0;
			var lat1=position.coords.latitude;
			var lng1=position.coords.longitude;
			var R=6371e3;
			var distanceBetweenYouAndHotspot=1000000000; //Really large distance so all hotspots will be closer than this
			var newLat=0;
			var newLng=0;

			for (i=0; i<lat2.length;i++){

				var phi1=lat1*Math.PI/180;
				var phi2=lat2[i]*Math.PI/180;
				var deltaPhi=(lat2[i]-lat1)*Math.PI/180;
				var deltaLambda=(lng2[i]-lng1)*Math.PI/180;
				var a=Math.sin(deltaPhi/2)*Math.sin(deltaPhi/2)+Math.cos(phi1)*Math.cos(phi2)*Math.sin(deltaLambda/2)*Math.sin(deltaLambda/2);
				var c=2*Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
				var d= R*c;
				if (d<distanceBetweenYouAndHotspot){
					newLat=lat2[i];
					newLng=lng2[i];
				}
			}
			var hotspot={lat:newLat, lng:newLng};
			var mylocation={lat:lat1,lng:lng1};
			var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 10,
				  center:  hotspot
				})
			var marker = new google.maps.Marker({
				  position: hotspot,
				  position: mylocation,
				  map: map
				});
		}
		getLocation();</script>";
		}
		?>
		
		
		<div id="map"></div>
	</div>
	<!--The footer of the webpage-->
	<div class="footer">
		<p>Webpage created by Jean-Luc Danoy and Azure Hutchings, 2018.</p>
	</div>
</div>
</body>