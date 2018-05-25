<?php
			//Get the latitudes and longitudes from the database
			$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//Fetch the data from the database
			$statement = $pdo->prepare("SELECT address, latitude, longitude FROM items WHERE name='".$_GET["name"]."'");
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
			var lat2=";echo $latitude; echo";			
			var lng2=";echo $longitude; echo";	
			var lat1=position.coords.latitude;
			var lng1=position.coords.longitude;
			var R=6371e3;
			var hotspot={lat:lat2, lng:lng2};
			var mylocation={lat:lat1,lng:lng1};
			var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 10,
				  center:  hotspot
				})
			var marker = new google.maps.Marker({
				  position: hotspot,
				  map: map
				});
		}
		getLocation();</script>";
		?>