<?php
	if(isset($_GET["submitsearch"])){
		try{
			$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$statement = $pdo->prepare("SELECT name, address FROM items WHERE name LIKE '%".$_GET["selectname"]."%' 
									AND suburb LIKE '%".$_GET["selectsuburb"]."%' AND suburb LIKE '%".$_GET["selectpostcode"]."%'");
			$statement->execute();
			$data=$statement->fetchAll(PDO::FETCH_ASSOC);
			print_r($data);
		}
		 catch(PDOException $e){
			echo $e->getMessage();
		}
}
?>