<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
<?php
    session_start();
    include('womenconnection.php');
?>

<div class="container-fluid">
<div class="card">
<div class="card-header">
    Edit Data
  </div>
  <div class="card-body">
    <?php
        if (isset($_POST['edit']))
        {
            $id=$_POST['editid'];
            $select="select * from women where id='$id'";
            $result=mysqli_query($con,$select);
            $num=mysqli_num_rows($result);
           
            if($num>0)
            {
                $row=mysqli_fetch_assoc($result);
                ?>
             <form action="womencode.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="editid" value="<?php echo  $row['id'] ?>"/>
            <div lass="from-group">
                <label>Item Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" required>
            </div>
            <div lass="from-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>" required>
            </div>
            <div lass="from-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" value="<?php echo $row['image'] ?>" required>
            </div>
            <div class="modal-footer">
            <a href="Awomen.php"><button type="button" class="btn btn-secondary">Close</button> </a>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
      </div>
            </form>
      </div>
        <?php    }
        } ?>

  </div>
</div>
</div>
</body>
</html>