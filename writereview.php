<?php
	if(isset($_POST["submitreview"])){
		if (isset($_SESSION["username"])){
			if ($_SESSION['loggedin']==true){
				$username = $_SESSION['username'];
				date_default_timezone_get('Australia/Brisbane');
				$date=date("Y-m-d H:i:s");
				try {
					$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = $pdo->prepare("INSERT INTO reviews (title, review, username, rating, name, date_posted) VALUES ('".$_POST["title"]."','".$_POST["comment"]."','".$username."','".$_POST["rating"]."','".$_GET["name"]."','".$date."')");
					// use exec() because no results are returned
					$sql->execute();
				}
				catch(PDOException $e){
					echo $e;
				}
				$conn = null;
			}
			else{
				echo"You must be logged in to submit a review!";
			}
		}
	}
?>