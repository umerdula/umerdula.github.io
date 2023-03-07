<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","test");

	$name=$_POST["name"];
	$pswd=$_POST["Password"];
	$email=$_POST['Email'];
	$pno=$_POST['Phoneno'];
	$bdate=$_POST['date'];

	 	$select="select * from web_data where uname='$name'";
		
		$getdata=mysqli_query($con,$select);
		$num=mysqli_num_rows($getdata);
		if($num==1)
		{
			echo "<script>
          alert('Username already exist.');
          window.location.href='index.php';
        </script>";
		}
	else
	{
		$q="insert into web_data(uname,password,email,phoneno,bdate) 
			values('$name','$pswd','$email','$pno','$bdate')";
        $result=mysqli_query($con,$q);
         echo "Name <<<<<<<<<<< exists". $result;


		echo "<script>
          alert('You can login now.');
          window.location.href='form1.php';
        </script>";
		//header('location:form1.php');

	}
	?>
	