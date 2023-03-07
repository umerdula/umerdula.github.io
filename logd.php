<?php
	$q1="insert into web_data(uname,password,email,phoneno,bdate)values('$name','$password','$email','$email','$pno','$bdate')";
	$run=mysqli_query($con,$q1);

	if($run>0)
	{
		$select="select * from web";
		$getdata=mysqli_query($con,$select);
		$num1=mysqli_num_rows($getdata);
		if($num1>0)
		{
			echo "<table border='1' width=100%";
			echo "<tr><td>Name</td> <td>Email</td>
			<td>Phoneno</td><td>Birth date</td></tr>";

			while($row = mysqli_fetch_assoc($getdata))
			{
				echo "<tr><td>".$row['uname']."</td>
				<td>".$row['email']."</td>
				<td>".$row['phoneno']."</td>
				<td>".$row['bdate']."</td></tr>";
			}
			echo "</table>";
		}
	}
	else
	{
		echo "no data found";
	}

?>
