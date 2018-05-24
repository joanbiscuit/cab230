<?php
   	$pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
   	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
		$sql = $pdo->prepare("SELECT DISTINCT suburb FROM items ORDER BY suburb");
		echo "<select name = 'selectsuburb' id='selectsuburb'>";
			echo "<option disable selected value> -- select an option -- </option>
				";
			$sql->execute();
			$data = $sql->fetchAll();
			foreach ($data as $row){
            	?><option value="<?php echo $row['suburb']?>"><?=$row["suburb"]?></option>
            	<?php
        	}
        echo "</select><br>";
	} catch (PDOException $e) {
	    echo $e->getMessage();
	}
?>