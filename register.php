<!DOCTYPE html>
<html>
<head>
	<h1 style="text-align: center;background-color: darkgoldenrod;
	font-family: Garamond;padding-top: 40px; padding-bottom: 40px;">
		Shopping Website 
	</h1>
	<style>
		img {
			padding-left: 70px ;
			padding-right: 70px;
			margin-right: 60px;
			margin-left: 610px;
			width: 10%;
			height: 20% ;
			}
		#container{
			text-align: center;
			}
	</style>
	<script>
		 
function validateform(){  
var Username=document.myform.Username.value;  
var Password=document.myform.Password.value;  
 var Email=document.myform.Email.value;
 var Phoneno=document.myform.Phoneno.value;
 var date=document.myform.date.value;
if (Username==null || Username==""){  
  alert("Name can't be blank");  
  return false;  
}else if(Password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 
  else if(Email==null || Email=="") 
  {
  	alert("Email can't be blank");  
  return false;
  }
  else if(Phoneno==null || Phoneno=="") 
  {
  	alert("Phoneno can't be blank");  
  return false;
  }
  else if(date==null || date=="") 
  {
  	alert("Birthdate can't be blank");  
  return false;
  }
}  
</script> 
</head>
<body style="background-image: url(reglogo1.jpg);">
<img src="logo.jpg"> 
<form action="reg.php" name="myform" method="post" onsubmit="return validateform()">
<h1 style="text-align: center; font-family: Georgia;">
Login Form
	</h1>
<h4 style="text-align:center;">
	Username : <input type="text" name="username"><br>
	<br>
	Password :&nbsp; <input type="password" name="Password"><br><br>
	Email : &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="Email"><br><br>
	Phone no :&nbsp; &nbsp;<input type="number" name="Phoneno"><br><br>
	Birthdate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date"><br><br> 

	<input type="Submit"> <br><br>

	
</h4>

</form>

<a href="home.php";>
	<div id="container">
		
			<input type="button" value="Ok">
			
	</div>
</a>
</body>
</html>