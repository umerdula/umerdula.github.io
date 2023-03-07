<?php session_start();
//$_SESSION['uname']=$_POST['uname'];
$con=mysqli_connect("localhost","root","","test");
if($con)
{
	echo "connected";
}
else 
{
	echo "Failed";
}
echo "<br>";
echo "Name don't ex<<<<<<<<<<<<<-----ists...";
echo json_encode($_POST);


$name =$_POST['username'];
	echo "name:".$name;

$password=$_POST['password'];
$q = "select * from web_data where uname='$name'";
$result = mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{	
	/*$res = "insert into web(uname,password)values($name,$password)";
	mysqli_query($con,$res);
	$_SESSION['uname']=$name;
	header('location:home.php');
	*/ 
	//echo "Name don't exists...";
	while($row=mysqli_fetch_assoc($result)){
    $user_id = $row['id'];
    }
	$_SESSION['uname']=$name;
    $_SESSION['user_id']=$user_id;


	header('location:home.php');
}
else
{
	echo "Name don't exists...";
	/*
	$res = "insert into web(uname,password) 
			values('$name','$password')";

	mysqli_query($con,$res);
	$_SESSION['uname']=$name;
	header('location:home.php');*/
	
	
	// echo "Name already exists";
		
	
}
?> 