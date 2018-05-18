<?php
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
		echo $_SESSION['username'].",";
	}
?>
