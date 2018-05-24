<?php
	if(isset($_POST["button"])){
		//Set the database connection details
		$servername = "localhost";
		$dbname="hotspot_database";
		$username = "root";
		$pword = "";
		//Hash the password to test it against the stored hash
		$password=hash('SHA256',$_POST["password"]);
		try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pword);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//Create an SQL statement that retrieves the email and password
				$sql = $conn->prepare("SELECT password, email, username FROM members WHERE email='".$_POST["email"]."'");
				// use execute() because no results are returned
				$sql->execute();
				//Save the result into a variable
				$result=$sql->fetchAll(PDO::FETCH_ASSOC);
				//Check to see whether the fetch returned an array or not
				if ($result != null){
					//If the password matches, log in
					if($result[0]['password']==$password){
						if (session_status() == PHP_SESSION_NONE){
							session_start();
						}
						$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $result[0]['username'];
						$_SESSION['email'] = $result[0]['email'];
					}
					//If the password does not match, return an error
					else{
							echo"<div class='error'>Your username or password is incorrect</div><br>";
					}
				}
				//If the username does not match, return an error
				else{
					echo"<div class='error'>Your username or password is incorrect</div><br>";
				}
			}
			//If we can't connect to the database return this error
			catch(PDOException $e)
				{
				echo $e;
				}
			$conn = null;	
	}
	?>