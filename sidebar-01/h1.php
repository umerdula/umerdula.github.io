<?php 

session_start();
	$con=mysqli_connect("localhost","root","","test");
	if($con)
	{
		echo "Connection succesful!!!";
	}
	else
	{
		echo "Connection unsuccessful....";
	}
	$a1=$_POST['fn'];	
	$a2=$_POST['ln'];
	$a3=$_POST['cmt'];
	$query="select * from data where firstname='$a1'";
    $result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
		if($num==1)
		{
			
			//echo "name doesn't exixts";
		    $res = "insert into data(firstname,lastname,comment)values('$a1','$a2','$a3')";
	          mysqli_query($con,$res);
			/*$_SESSION['fn']=$a1;
			
			header('location:hphp1.php')*/;
		}
		else
		{	/*
			echo "name doesn't exixts";
		    $res = "insert into data(firstname,lastname,comment)values('$a1','$a2','$a3')";
	          mysqli_query($con,$res);*/
			$_SESSION['fn']=$a1;
			
			header('location:hphp1.php');	  
		}
?>