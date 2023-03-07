<?php

$con = mysqli_connect("localhost","root","","test");
$name=$_POST['name'];
$price=$_POST['price'];
$q="insert into shoes(name,price)values('$name','$price')";
$result=mysqli_query($con,$q);
//$num=mysqli_num_rows($result);
if($result>0)
{
  echo "Added";
  header("location:Ashoes.php");
}
else
{
  echo "Not Added";
}
?>