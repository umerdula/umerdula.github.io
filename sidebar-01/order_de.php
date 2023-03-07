<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body style="background-color: black;">

</body>
</html>


<table border="3" style="text-align: center; color:whitesmoke;" align="center">

    <tr>
        <th>Order_Id</th>
        <th>Full_name</th>
        <th>Phone_No</th>
        <th>Address</th>
        <th>Pay_Mode</th>
        <th>Item_Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>State</th>
                <th>Action</th>


    </tr>




<?php 
session_start();
      $user_id=$_SESSION['user_id'];

$con=mysqli_connect("localhost","root","","test") or die("failed");
$query="Select om . * , uo.Item_Name,uo.Price,uo.Quantity from order_manager om, user_orders uo where om.Order_Id = uo.Order_Id and om.user_id=".$user_id;
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($result)) 
{
    

?>
<tr>
    <td><?php echo $row['Order_Id'];?></td>
    <td><?php echo $row['Full_Name'];?></td>
    <td><?php echo $row['Phone_No'];?></td>
    <td><?php echo $row['Address'];?></td>
    <td><?php echo $row['Pay_Mode'];?></td>
    <td><?php echo $row['Item_Name'];?></td>
    <td><?php echo $row['Price'];?></td>
    <td><?php echo $row['Quantity'];?></td>
    <td><?php echo $row['order_status'];?></td>

    <td><?php if($row['order_status']!='cancel'){  ?>
<a href="cancelorder.php?id=<?php echo $row['Order_Id'];?>">Cancel Order</a><?php } ?>

</td>
</tr>

<?php
}
?>