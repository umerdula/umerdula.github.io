<?php

$con = mysqli_connect("localhost","root","","test");
$name=$_POST['name'];
$price=$_POST['price'];
$q="insert into mobile(name,price)values('$name','$price')";
$result=mysqli_query($con,$q);
//$num=mysqli_num_rows($result);
if($result>0)
{
  echo "Added";
  header("location:Amobile.php");
}
else
{
  echo "Not Added";
}
?>