<?php
	$con=mysqli_connect("localhost","root","","test");
	$order_id=$_GET['id'];
	$q="update order_manager set order_status='cancel' where Order_Id=$order_id";
	$getdata=mysqli_query($con,$q);
	header('location:order_de.php');
?>