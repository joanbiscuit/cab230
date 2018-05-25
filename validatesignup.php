<?php
require 'validateemail.php';
$errors=array();
$errors2=array();
//If the button has been pressed
if(isset($_POST["button"])){
	//Validate the email
	ValidateEmail($errors, $_POST,'email');
	//Return an error if the email is invalid (get rid of this once testing is over)
	if ($errors){
		echo "Errors:<br/>";
		foreach ($errors as $field => $error){
				echo "$field $error<br/>";
		}
	}
	else{	
		ValidatePassword($errors2, $_POST, 'password', 'psw-repeat');
		if ($errors2){
			echo "Errors:<br/>";
			foreach ($errors2 as $field2 => $error2){
				echo "$field2 $error2<br/>";
			}
		}
		else{
			$servername = "localhost";
			$dbname="hotspot_database";
			$username = "root";
			$pword = "";
			$password=hash('SHA256',$_POST["password"]);
			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pword);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = $conn->prepare("INSERT INTO members (email, password, birthday, username) VALUES ('".$_POST["email"]."','".$password."','".$_POST["dob"]."','".$_POST["username"]."')");
				// use exec() because no results are returned
				$sql->execute();
				if (session_status() == PHP_SESSION_NONE){
					session_start();
				}
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['email']=$_POST['email'];
				header("Location: homepage.php");
				}
			catch(PDOException $e)
				{
				echo $e;
				}
			$conn = null;	
		}
	} 
}
?> 