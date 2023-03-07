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
            <img src="B1.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">WOW FACE WASH</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="WOW FACE WASH">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="B2.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">CETAPHIL</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="CETAPHIL">
              <input type="hidden" name="Price" value="250">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="B3.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">MAMA EARTH</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="MAMA EARTH">
              <input type="hidden" name="Price" value="740">
            </div>
          </div>
        </form>
      </div>


       <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="B4.jpg" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Oriflame</h5>
              <input  class="card- text" value="<?php echo "Price : "."$row1[price]" ?>"></p>
              <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
              <input type="hidden" name="Item_Name" value="Oriflame">
              <input type="hidden" name="Price" value="2000">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>