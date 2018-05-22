<html>
<?php
//If the session has not been started
if (session_id()==''){
	session_start();
}
//Function to check if the user is logged in
function IsLoggedIn(){
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
		echo "<a href='logout.php'>Logout</a>";
	}
	else{
		echo "<a href='login.php'>Log in</a> <a href='signup.php'>Sign up</a>";
	}
}
?>
</html>