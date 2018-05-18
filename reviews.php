<?php
	if(isset($_POST["submitreview"])){
    $email = $_SESSION['username'];
		if ($_SESSION['loggedin']==true){
			try { 
				$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = $pdo->prepare("INSERT INTO reviews (review, email, rating, name, date_posted) VALUES ('".$_POST["comment"]."','".$email."','".$_POST["rating"]."','".$_GET["name"]."',".date("Y-m-d").")");
				// use exec() because no results are returned
				$sql->execute();
			}
			catch(PDOException $e){
				echo $e;
			}
			$conn = null;
		}
	}
?>