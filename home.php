<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<style>
		a{
			text-decoration:none;
		}
		.column 
		{
  			float: left;
  			width: 65%;
  			padding: 5px;
		}
		.row::after 
		{
  			content: "";
  			clear: both;
  			display: table;
		}
		.column 
		{
  			float: left;
  			width: 65%;
  			padding: 5px;
		}
		.row::after 
		{
  			content: "";
  			clear: both;
  			display: table;
		}
	</style>
</head>
<body style="background-color: black;">

	<h1 style="text-align: center;background-color: darkgoldenrod;font-family: algerian;
	padding-top: 20px; padding-bottom: 20px;">
		Shopping Website 
	</h1>
	<table border="1" width="100%" bgcolor= "#333" height="10%">
	<tr>
	<th width="20%"><a href="home.php"><font color="white" size="4">Home</a></font></th>
	<th width="20%" ><a href="about.php"><font color="white" size="4">About Us</font></th>
	<th width="20%" ><a href="contact.php"><font color="white" size="4">Contact</font></th>
	<th width="20%" ><a href="index.php"><font color="white" size="4">Login </font></th>
	<th width="20%" ><a href="help.php"><font color="white" size="4">Help</font></th>
	<th width="20%" ><a href="profile.php"><font color="white" size="4">Profile</font></th>
	</tr>
</table>
  </head>
  <body>
		<?php
		session_start();
		$nametest=$_SESSION['uname'];
		echo "<h2 style='color:white;text-align:center;'>Welcome   " .$nametest."  to our website.";
		?>	
	<table>
	<div class="row">
		<div class="column">
			<td width="30%"><a href="Umobile.php">
			<input type="image" src="hmobilelogo1.png" style="padding-left:40px;width:45%;"><br><br>
			<h3 style="padding-left:50px;color: white">Mobiles</h3>
			</a>
		</div>
		<div class="column">
			<td width="30%"><a href="fashion.php">
			<input type="image" src="fashionlogo.jpg"  style="padding-left:40px;width:49%;"><br><br>
			<h3 style="padding-left:50px;color: white">Fashion</h3> 
			</a>
		</div>
		<div class="column">
			<td width="30%"><a href="Uelectronic.php">
			<input type="image" src="heleclogo4.png" style="padding-left:110px;width:65%;"><br><br><br>
			<h3 style="padding-left:115px;color: white">Electronics</h3>
			</a>
	</div> 
	</table>
	<table>
		<div class="row">
			<div class="column">
			<td width="30%"><a href="Ubeauty.php">
			<input type="image" src="beautylogo3.png" style="padding-left:40px;width:45%;">
			<h3 style="padding-left:35px;color: white">Beauty</h3>
			</div>
		</div>
		<div class="row">
			<div class="column">
			<td width="30%"><a href="Uwatch.php">
			<input type="image" src="hwatchlogo1.png" style="padding-left:40px;width:35%;">
			<h3 style="padding-left:35px;color: white">Watch</h3>
			</div>
		</div>
		<div class="row">	
			<div class="column">
			 <td width="30%"><a href="Ushoes.php"> 
			 <input type="image" src="hshoeslogo1.png" style="padding-left:185px;padding-right:45px;width:80%;"><br><br><br>
			 <h3 style="padding-left:115px;color: white">Shoes</h3> 
		 	</div>
		</div> 
	</table>
</body>
</html>