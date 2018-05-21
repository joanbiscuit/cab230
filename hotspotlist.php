<?php
	//Connect to the database and set error handling on
   $pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
		//Fetch the data from the database
		$statement = $pdo->prepare("SELECT name, address FROM items");
		//Execute the query
		$statement->execute();
		//Return the data
		$data=$statement->fetchAll(PDO::FETCH_ASSOC);
		//Create a div
            foreach ($data as $row){
                ?><div class='result'>
                    <h3><?=$row["name"]?></h3>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="address"><?=$row["address"]?></p>
                    <?php echo "<a href='individual_result.php?name=".$row['name']."'>More details</a>"; ?>
                    <hr>
                </div><?php
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }    
?>