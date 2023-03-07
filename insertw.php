<?php

$con = mysqli_connect("localhost","root","","test");
if($con)
{
  echo "connected";
}
else
{
  echo "not connected";
}
$name=$_POST['name'];
$price=$_POST['price'];
$q="insert into watch(name,price)values('$name','$price')";
$result=mysqli_query($con,$q);
//$num=mysqli_num_rows($result);
if($result>0)
{
  echo "Added";
  header("location:Awatch.php");
}
else
{
  echo "Not Added";
}
?>