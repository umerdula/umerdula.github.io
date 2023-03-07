<?php include("header.php"); 
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <style>
    input{
      background-color: white;
      color:black;
      border:2px solid white;
      text-align: center;
    }
  </style>
</head>
<body style="background-color: black;">
  <?php

      $con = mysqli_connect("localhost","root","","test");
$q = "select * from watch;";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
?>
<div class='container mt-5'  >
    <div class='row'>
<?php
while($row1 = mysqli_fetch_assoc($result))
{
echo "
 
      <div class='col-lg-3'>
        <form action='manage_cart.php' method='POST'>
          <div class='card' style='float:left' >
            <img src='$row1[image]' class='card-img-top' height='200px' width='200px'>
            <div class='card-body text-center'>
              <h5 class='card-title'>$row1[name]</h5>
             <p class='card-text'>$row1[price]</p>
              <button type='submit' name='Add_To_Cart' class=btn btn-info'>Add To Cart</button>
              <input type='hidden' name='Item_Name' value='$row1[name]'>
              <input type='hidden' name='Price' value='$row1[price]'>
            </div>
          </div>
        </form>
      </div>


";
}



  ?>
  </div>
</div> 

  
</body>
</html>
