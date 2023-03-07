<?php
session_start();
$con = mysqli_connect("localhost","root","","test");
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $delete = "delete from mobile where id = '$id'";
    // $delete1 = "delete from ad_details where email = '$em'";
    mysqli_query($con,$delete);
    // mysqli_query($con,$delete1);
    header("location:Amobile.php");
}
$id = $_POST['id'];
$q = "select * from mobile where id='$id'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$row1 = mysqli_fetch_assoc($result);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="Medit_menu.php">
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value='<?php  echo $row1['name']?>'>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Price</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="price" value='<?php  echo $row1['price']?>'>
</div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
        </body>
        </html>
<!--  -->
        