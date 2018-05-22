<?php
	try { 
		$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $pdo->prepare("SELECT title, review, rating, email, date_posted FROM reviews WHERE name='".$_GET['name']."'");
		// use exec() because no results are returned
		$sql->execute();
	}
	catch(PDOException $e){
		echo $e;
	}
	$conn = null;
?>