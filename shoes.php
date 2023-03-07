<?php include("header.php"); 
// session_start();
$con = mysqli_connect("localhost","root","","test");
$q = "select * from shoes;";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$row1 = mysqli_fetch_assoc($result);


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

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="so6.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Nike Jordan</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Nike Jordan">
              <input type="hidden" name="Price" value="<?php echo "Price : "."$row1[price]"?>">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="s5.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Versace Black</h5>
              <input  class="card-title" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Versace Black">
              <input type="hidden" name="Price" value="<?php echo "Price : "."$row1[price]"?>">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="s3.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Sport Shoes</h5>
              <input class="card-text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Sport Shoes">
              <input type="hidden" name="Price" value="<?php echo "Price : "."$row1[price]"?>">
            </div>
          </div>
        </form>
      </div>


       <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="so2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Party Shoes</h5>
              <input class="card-text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Part Shoes">
              <input type="hidden" name="Price" value="<?php echo "Price : "."$row1[price]"?>">
            </div>
          </div>
        </form>
      </div>

      

     


     

    </div>
  </div>
</body>
</html>