<?php
echo"<a href='homepage.php'>Homepage</a> 
		<a href=''>Hotspots</a> 
		<!--The links to login/signup are on the other side of the header-->
		<div class='login'>";
		//If the session has not been started
		if (session_id()==''){
			session_start();
		}
		//Check if the user is logged in
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
			echo "<a href='logout.php'>Logout</a>";
		}
		else{
			echo "<a href='login.php'>Log in</a> <a href='signup.php'>Sign up</a>";
		}
		echo"</div>	";
?>