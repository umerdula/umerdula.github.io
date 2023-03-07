<!DOCTYPE html>
<html>
<head>
	<style>
		.wrapper
		{
			width:500px;
			margin:0 auto;
		}
	</style>
</head>
<body style="background-color: black;text-align:center;">
	<h1 style="color:white;"> My Profile</h1>
	<table border="2 white" style="color:white;margin-left: auto;margin-right: auto;">
		<tr>
			<th>UserName</th>
			<th>Email id</th>
			<th>Phone no</th>
			<th>Birthdate</th>
		</tr>
			<div class="wrapper">
			<?php
				session_start();
				$con=mysqli_connect("localhost","root","","test");
				error_reporting(0);
				$query="select * from web_data where uname='$_SESSION[uname]';";
				$data=mysqli_query($con,$query);
				$total=mysqli_num_rows($data);
				if($total!=0)
				{		
					while($result=mysqli_fetch_assoc($data))
					{
						echo "<style='text-align:center;'>
						<tr>
						<td>".$result['uname']."</td>
						<td>".$result['email']."</td>
						<td>".$result['phoneno']."</td>
						<td>".$result['bdate']."</td>
						</tr>";
				}
			}	
			else
			{
				echo "no data found";
			}
		?>
		</div>
	</form>
	</table>
</body>
</html>