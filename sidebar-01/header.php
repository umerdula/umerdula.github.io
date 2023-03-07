<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="text.php">Shopping Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">HOME</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Umobile.php">MOBILE</a>
      </li>
      <li class="nav-item ">
          <a class="nav-link" href="Umen.php">MEN</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="Uwomen.php">WOMEN</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="Uelectronic.php">ELECTRONIC</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="Ubeauty.php">BEAUTY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Uwatch.php">WATCH</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Ushoes.php">SHOES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order_de.php">ORDER</a>
        </li>
    </ul>
     <div>
      <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
      ?>
      <a href="mycart.php" class="btn btn-success">My Cart (<?php echo $count; ?>)</a>
    </div>
    
  </div>
</nav>


</body>
</html>