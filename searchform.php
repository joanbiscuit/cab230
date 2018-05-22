<?php
	//Connect to the database and set error handling on
   $pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
		
		//Fetch the data from the database
		$searches = $pdo->prepare("SELECT name, address FROM items WHERE name LIKE '%".$_GET["selectname"]."%' 
							AND suburb LIKE '%".$_GET["selectsuburb"]."%' AND suburb LIKE '%".$_GET["selectpostcode"]."%'");
		//Execute the query
		$searches->execute();
		//Return the data
		$searchesData=$searches->fetchAll(PDO::FETCH_ASSOC);

		//Create a div
        echo "<div class='content'><br>";
            foreach ($searchesData as $row){
                ?><div class='result'>
                    <h2><?=$row["name"]?></h2>
                    <div class="rating">
                       <?php
					   $reviewsSelect = $pdo->prepare("SELECT email, review, rating, date_posted, title FROM reviews WHERE name='".$row['name']."'");
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
						}
						else{
							echo "This library has not been reviewed";
						}?>
                    </div>
                    <p class="address"><?=$row["address"]?></p>
                    <?php echo "<a href='individual_result.php?name=".$row['name']."'>More details and reviews</a></div></div>"; ?>
                </div><br><?php
            }
            echo "</div>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }    
?>