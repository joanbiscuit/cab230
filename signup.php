<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Brisbane Hotspot Reviewer</title>
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
<!--The wrapper wraps around the entire webpage to keep it a certain size-->
<div class=wrapper">	
	<!--The header class contains the name at the top of the page and the links to other pages-->
	<div class="header">
		<h1>Brisbane Hotspot Reviewer</h1>
		<hr>
		<!--The links to other pages in the website-->
		<div class="links">
			<a href="homepage.php">Homepage</a> <a href="">Hotspots</a> <a href="">Recent reviews</a> 
			<!--Dropdown for the search buttons-->
			<div class="dropdown">
				<a href="">Search</a>
				<div class="dropdown-content">
					<a href="searchname.php">Keywords</a>
					<a href="nearesthotspot.php">Nearest hotspot</a>
			    </div>
			</div>
		</div>
		<!--The links to login/signup are on the other side of the header-->
		<div class="login">
			<a href="login.php">Log in</a> <a href="signup.php">Sign up</a>
		</div>
	</div>
	<form onsubmit="ValidateSignup()">
  		<div class="container">
    			<h1>Sign Up</h1>
  			<p>Please fill in this form to create an account.</p>
    			<hr>

    			<label for="email"><b>Email</b></label>
    			<input type="text" placeholder="Enter Email" id="email" required><br>

   			<label for="psw"><b>Password</b></label>
    			<input type="password" placeholder="Enter Password" id="psw" required><br>

    			<label for="psw-repeat"><b>Repeat Password</b></label>
    			<input type="password" placeholder="Repeat Password" id="psw-repeat" required><br>
				
				<label for="bday"><b>Birthday</b></label>
				<input type="date" placeholder="dd/mm/yyyy" id="bday" required><br>
    			<label>
      				<input type="checkbox" checked="checked" id="remember" style="margin-bottom:15px"> Remember me
    			</label><br>
			
    			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>

    			<div class="clearfix">
      				<button type="button" class="cancelbtn">Cancel</button>
      				<button type="submit" class="signupbtn">Sign Up</button>
   			</div>
  		</div>
	</form>

	<!--The footer of the webpage-->
	<div class="footer">
	<p>Webpage created by Jean-Luc Danoy and Azure Hutchings, 2018.</p>
	</div>
</div>
</body>