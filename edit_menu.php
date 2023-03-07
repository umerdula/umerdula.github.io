<?php
session_start();
$con = mysqli_connect("localhost","root","","test");
   
   if (isset($_POST['update']))
    {
     	       $id = $_POST['id'];        
    $name = $_POST['name'];
    $price = $_POST['price'];
       $update = "UPDATE `shoes` SET `name`='$name',`price`='$price' WHERE name = '$name'";
 		mysqli_query($con,$update);

     
    
        
        
        header("location:Ashoes.php");
    }
        ?>  