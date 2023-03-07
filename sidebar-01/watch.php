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
            <img src="wath1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">I Watch Series-7</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="I Watch Series-7">
              <input type="hidden" name="Price" value="45000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="watch2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Rolex</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Rolex">
              <input type="hidden" name="Price" value="25000">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="watch5.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Rolex</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Rolex">
              <input type="hidden" name="Price" value="7000">
            </div>
          </div>
        </form>
      </div>


       <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="watch4.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Casio</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Casio">
              <input type="hidden" name="Price" value="1000">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>