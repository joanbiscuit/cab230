<?php
    session_start();
    $email = $_SESSION['username']
    $pdo = new PDO('mysql:host=localhost;dbname=hotspot_database', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try { 
        $conn = new PDO("mysql:host=$servername;", $title, $comment, $email, $rating, $name);
        // set the PDO error mode to exception
        $conn->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO reviews (title, comment, email, rating, name) VALUES ('".$_POST["title"]."','".$_POST["comment"]."','".$email."','".$_POST["rating"]."','".$_POST["name"]."')");
        // use exec() because no results are returned
        $sql->execute();
    }
    catch(PDOException $e)
    {
        echo $e;
    }
    $conn = null;
?>