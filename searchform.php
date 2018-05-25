<?php
	//Connect to the database and set error handling on
   $pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
		//Fetch the data from the database
		$searches = $pdo->prepare("SELECT name, address, picture, latitude, longitude FROM items WHERE name LIKE '%".$_GET["selectname"]."%' 
							AND suburb LIKE '%".$_GET["selectsuburb"]."%' AND suburb LIKE '%".$_GET["selectpostcode"]."%'");
		//Execute the query
		$searches->execute();
		//Return the data
		$searchesData=$searches->fetchAll(PDO::FETCH_ASSOC);
		//Create a div
		echo "<div class='contents'>";
		$listOfResults=array();
		foreach($searchesData as $individualResult){
			array_push($listOfResults,[$individualResult['name'],$individualResult['latitude'],$individualResult['longitude']]);
		}
		 echo "<div class='content'><br>
			<div id='map'></div>";
		//Echo the script start tag, and the declaration of the variable locations
		echo "
			<script type='text/javascript'>
			var locations=["; 
		//Echo the individual result for each result in the list	
		for($i=0;$i<sizeof($listOfResults);$i++){
			echo "[";
			foreach($listOfResults[$i] as $row){
				if (is_numeric($row)){
					echo $row.", ";
				}
				else{
					echo "\"".$row."\", ";
				}
			}
			//If we are not at the end of the list, continue adding a comma after the end of the table
			if ($i+1<sizeof($listOfResults)){
				echo $i."], ";
			}
			//If we are at the end of the list , there is no item next, so do not add a comma
			else{
				echo $i."]";
			}
		}
		//Close of the variable delcaration
		echo "];";

		//Create a map for all of the results to go into
		//Echo the javascript
		echo "
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 10,
				center: new google.maps.LatLng(-27.4698, 153.0251),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var infowindow = new google.maps.InfoWindow();

			var marker, i;

			for (i = 0; i < locations.length; i++) {  
				marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
				});	

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent('<a href=\"individual_result.php?name='+locations[i][0]+'\">'+locations[i][0]+'</a>');
          infowindow.open(map, marker);
        }
      })(marker, i));
    }";
		//Close off the javascript
		echo "</script>";
		echo "<h2>Search Results</h2>";
            foreach ($searchesData as $row){
                ?><div class='result'>
					<hr>
					<h3><?=$row["name"]?></h3>
					<img src="<?=$row["picture"]?>" alt="<?=$row["name"]?>"><br>
					<?php
					$reviewsSelect = $pdo->prepare("SELECT rating FROM reviews WHERE name=\"".$row['name']."\"");
					$reviewsSelect->execute();
					$reviewsData=$reviewsSelect->fetchAll(PDO::FETCH_ASSOC);
					$averageRating=0;
					foreach ($reviewsData as $rating){
						$averageRating+=$rating['rating'];
					}
					if (sizeof($reviewsData)!=0){
						$averageRating=$averageRating/sizeof($reviewsData); //length of ratings
						echo "<div class='rating'>Average rating:";
						for ($i=0; $i<round($averageRating,0,PHP_ROUND_HALF_DOWN); $i+=1){
							echo "<span class='fa fa-star checked'></span>";
						}
						for ($i=round($averageRating,0,PHP_ROUND_HALF_DOWN); $i<5; $i+=1){
							echo "<span class='fa fa-star'></span>";
						}
						echo"</div>";
					}
					else{
						echo "This hotspot has not been reviewed.";
					}
					?><p class="address"><?=$row["address"]?></p>
					<?php 
					echo "<a href='individual_result.php?name=".$row['name']."'>More details and reviews</a>"; ?>
            	</div><?php
		}
		echo "<form method='get' action='homepage.php'>";
		echo "<button type='submit' name='backsearch' class='backbtn'>Go back to Search Page</button>";
		echo "</form>";
		echo "</div>";
	} catch (PDOException $e) {
        echo $e->getMessage();
    }    
?>