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
            <img src="tv.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Samasung TV</h5>
              <p class="card- text">Price:50000</p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Samasung TV">
              <input type="hidden" name="Price" value="50000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="td.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">LG Oven</h5>
              <p class="card-text">Price:25000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="LG Oven">
              <input type="hidden" name="Price" value="25000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="wifi2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Airtel Wifi</h5>
              <p class="card-text">Price:7000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Airtel Wifi">
              <input type="hidden" name="Price" value="7000">
            </div>
          </div>
        </form>
      </div>


       <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="hade.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Headphone</h5>
              <p class="card-text">Price:2000</p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Headphone">
              <input type="hidden" name="Price" value="2000">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>