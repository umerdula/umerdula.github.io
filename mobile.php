<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body style="background-color: black;">

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="i1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">iphone 11</h5>
              <p class="card- text">Price:150000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="iphone">
              <input type="hidden" name="Price" value="150000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="i2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">samsang</h5>
              <p class="card-text">Price:50000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="samsung">
              <input type="hidden" name="Price" value="150000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="i3.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">noting one(1)</h5>
              <p class="card-text">Price:40000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="noting one(1)">
              <input type="hidden" name="Price" value="40000">
            </div>
          </div>
        </form>
      </div>
       <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="one1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">One Plus</h5>
              <p class="card-text">Price:20000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="one+">
              <input type="hidden" name="Price" value="20000">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>