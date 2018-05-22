<?php
	//Get the latitudes and longitudes from the database
	$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Fetch the data from the database
	$addressSelect = $pdo->prepare("SELECT address FROM items WHERE name='".$_GET["name"]."'");
	//fetch the reviews
	$reviewsSelect = $pdo->prepare("SELECT email, review, rating, date_posted, title FROM reviews WHERE name='".$_GET["name"]."'");
	$addressSelect->execute();
	$addressData=$addressSelect->fetchAll(PDO::FETCH_ASSOC);
	$reviewsSelect->execute();
	$reviewsData=$reviewsSelect->fetchAll(PDO::FETCH_ASSOC);
	//Print the title
	echo "<dic class='title'><h2>".$_GET["name"]."</h2>";
	//Average all the ratings
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
		echo "</div><p>Located at ".$addressData[0]['address']."</div>";
	}
	else{
		echo "This library has not been reviewed";
	}
	
	
	echo "<div id='map'></div>";

	foreach($reviewsData as $row){
		
		//Create the title and the start of the rating div
		echo "<div class='review'> 
			  <h3>".$row['title']."</h3> By ".$row['email']."
			  <div class='rating'>";
				for ($i=0; $i<round($row['rating'],0,PHP_ROUND_HALF_DOWN); $i+=1){
					echo "<span class='fa fa-star checked'></span>";
				}
				for ($i=round($row['rating'],0,PHP_ROUND_HALF_DOWN); $i<5; $i+=1){
					echo "<span class='fa fa-star'></span>";
				}
				
			  echo"</div>
			  <p>".$row['review']."</p>
			  </div><br>";	
	}
?>