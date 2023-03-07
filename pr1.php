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
			margin-right: auto;
			margin-left: 610px;
			width: 10%;
			height: 20% ;
			
			}
		#container{
			text-align: center;
		}
	</style>
	

</head>
<body style="background-color: lightgoldenrodyellow;">
<img src="logo.jpg">
<form>
<h1 style="text-align: center; font-family: Georgia;">
Login Form
	</h1>
<h5 style="text-align:center; ">
	Username : <input type="text" name="Username"><br>
	<br>
	Password :&nbsp;<input type="password" name="Password"><br><br>
	Email : &nbsp;<input type="text" name="Email"><br><br>
	Phone no :&nbsp;<input type="text" name="Phoneno"><br><br>
	<input type="Submit"> <br><br>

	
</h5>

</form>

<a href="p.php";>
	<div id="container">
		<button>
			<input type="button" value="ok">
		</button>
	</div>
</a>

</body>
</html>
<?php

$a = $_GET["Username"];
echo "<br>";
$b = $_GET["Password"];
echo "<br>";
$c = $_GET["Email"];
echo "<br>";
$d= $_GET["Phoneno"];
echo "<br>";

echo "<h3>Username is $a</h3>" ;
echo "<h3>Password is $b </h3>";
echo "<h3>Email is $c </h3>";
echo  "<h3>Phone no is $d</h3>";
?>