<?php
$con=mysqli_connect("localhost","root","","project");
if($con)
{
	echo "connected";
}
else 
{
	echo "Failed";
}
$a=$_POST['Username'];
$select="select * from web_data where uname='$a'";
$res=mysqli_query($con,$select);
$count=mysqli_num_rows($res);

if($count>0)
{
	$row=mysqli_fetch_assoc($res);
	echo "<table width='100%' border='1'>";
	echo "<tr>";
	echo "<td>Name</td>";
	echo "<td>".$row['uname']."</td></tr>";
	echo "<tr>";
	echo "<td>Email</td>";
	echo "<td>".$row['email']."</td></tr>";
	echo "<tr>";
	echo "<td>Phone no</td>";
	echo "<td>".$row['phoneno']."</td></tr>";
	echo "<tr>";
	echo "<td>Birthdate</td>";
	echo "<td>".$row['bdate']."</td></tr>";
}
else
{
	echo "no data found";
}
?>