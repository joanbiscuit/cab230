function ValidateEmail()
{
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))
			{
				return (true)
			}
		else
			{
				alert("You have entered an invalid email address.")
				return (false)
			}
}


function ValidatePasswordSignup()
{
	var password = (document.getElementById("psw").value)
	var password2 = (document.getElementById("psw-repeat").value)
	if (password == password2 )
		{
			if ((/.*[A-Z]+.*/.test(password)) && (/.*[a-z]+.*/.test(password)) && (/.*[0-9]+.*/.test(password)))
			{
				if(password.length>=8)
				{
					return(true)
				}
				else 
				{
					alert("Your password must contain a minimum of 8 characters.")
				}
			}
			else
				{
					alert("Your password must contain at least one uppercase letter and a number.")
				}
		}
	else
		{
			alert("Your passwords do not match.")
			return (false)
		}
}

function ValidateSignup(){
	if (ValidateEmail() && ValidatePasswordSignup()){
		return(true);
	}
	else{
		return(false);	
	}
}
function searchPageValidate(){
	var pc = document.getElementById("postcode").value;
	var regtest = new RegExp(/[0-9]{4}/);
	if (regtest.test(pc) || pc==""){
		//Opening this window is for demonstration purposes only
		location.replace("results.php");
	}
	else {
		window.alert("Enter a valid postcode");
		return false;
	}
}