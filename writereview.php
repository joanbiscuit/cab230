<?php
	if(isset($_POST["submitreview"])){
		if (isset($_SESSION["username"])){
			if ($_SESSION['loggedin']==true){
				$email = $_SESSION['username'];
				try { 
					$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = $pdo->prepare("INSERT INTO reviews (title, review, email, rating, name, date_posted) VALUES ('".$_POST["title"]."','".$_POST["comment"]."','".$email."','".$_POST["rating"]."','".$_GET["name"]."',".date("Y-m-d").")");
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