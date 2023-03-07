<?php session_start();
	$con=mysqli_connect("localhost","root","","project");
	if($con)
	{
		echo "Connection succesful!!!";
	}
	else
	{
		echo "Connection unsuccessful....";
	}
	$a=$_POST['fname'];	
	$query="select * from data where firstname='$name'";
    $result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
		if($num==1)
		{
			$_SESSION['firstname']=$a;
			header('location:hphp.php');
		}
		else
		{
		
		}
?>