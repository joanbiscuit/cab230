<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
<!--The wrapper wraps around the entire webpage to keep it a certain size-->
<div class="wrapper">	
	<!--The header class contains the name at the top of the page and the links to other pages-->
	<div class="header">
		<h1>Brisbane Hotspot Reviewer</h1>
		<hr>
	</div>
	<!--The links to other pages in the website-->
	<div class="topnav">
		<a href="homepage.php">Homepage</a> 
		<a href="hotspots.php">Hotspots</a> 
		<a href="">Recent reviews</a> 
		<!--Dropdown for the search buttons-->
		<div class="dropdown">
			<button class="dropbtn">Search</button>
			<div class="dropdown-content">
				<a href="searchname.php">Keywords</a>
				<a href="nearesthotspot.php">Nearest hotspot</a>
		    </div>
		</div>
		<!--The links to login/signup are on the other side of the header-->
		<div class="login">
			<?php
			require 'loginout.php';
			IsLoggedIn();
			?>
		</div>
	</div>
	<form onsubmit="ValidateSignup();" method="post">
  		<div class="contents">
    		<h2>SIGN UP</h2>
  			<p>Please fill in this form to create an account.</p>
    		<hr>
	   		<label for="email">Email:</label><br>
    		<input type="text" placeholder="Enter Email" id="email" name="email" value="<?php
				if (isset($_POST['email'])){	
					echo htmlspecialchars($_POST['email']);
				}?>"
				required><br>

				<label for="psw">Password:</label><br>
    			<input type="password" placeholder="Enter Password" id="psw" name="password" value="<?php
				if (isset($_POST['email'])){	
					echo htmlspecialchars($_POST['password']);
				}?>" required><br>

    			<label for="psw-repeat">Repeat Password:</label><br>
    			<input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw-repeat" value="<?php
				if (isset($_POST['email'])){	
					echo htmlspecialchars($_POST['psw-repeat']);
				}?>"required><br>
				
				<label for="bday">Date of Birth:</label><br>
				<input type="date" placeholder="dd/mm/yyyy" id="bday" name="dob" value="<?php
				if (isset($_POST['email'])){	
					echo htmlspecialchars($_POST['dob']);
				}?>"required><br>
    			<label>
      			<input type="checkbox" checked="checked" id="remember" style="margin-bottom:15px"> Remember me
    			</label><br>
    			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>
				<button type="submit" name="button" class="submitbtn">Sign Up</button>
				<div class="container">  
					<button type="button" class="cancelbtn">Cancel</button>
					<span class="link">Already got an account <a href="login.php">login?</a></span>
				</div>
  		</div>
	</form>
	<!--Validate SignUp page-->
	<?php
		require 'validatesignup.php';
	?>
	<!--The footer of the webpage-->
	<div class="footer">
		<!--Links of all the Webpages-->
		<p>&copy; 2018 Brisbane Hotspot Reviewer</p>
	</div>
</div>
</body>