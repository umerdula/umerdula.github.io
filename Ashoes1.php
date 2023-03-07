<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>



<?php
    session_start();
    include('Connection.php');
?>
<!-- Modal -->
<div class="modal fade" id="demo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="scode.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
            <div lass="from-group">
                <label>Item Name:</label>
                <input type="text" name="name" class="form-control" required placeholder="Item name">
            </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="text" class="form-control" required name="price" id="exampleFormControlInput1" placeholder="Price" >
        </div>
            <div class="from-group">
                <label>Image:</label>
                <input type="file" name="image" class="form-control" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add Record</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="container-fluid">

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#demo">
  Add Data
</button>
</div>

<div class="table_responsive">

<?php
  $select ="select * from shoes";
  $result=mysqli_query($con,$select);
?>
<table class="table" id="datatable" >
  <thead>
  <tr>
      <th>
          ID
      </th>
      <th>
          Item Name
      </th>
    <th>
      Price
    </th>
      <th>
          Image
      </th>
      <th>
          Action
      </th>
  </tr>
</thead>
<tbody>
  <?php
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {

     
  ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td> <?php echo $row['name'] ?></td>
    <td><?php echo $row['price'] ?> </td>
        <td> <?php echo '<img src="./upload/' . $row["image"] . '" class="rounded float-start img-thumbnail rounded mx-auto d-block" width="100px",height="100px" >' ?></td>
        <td>
         <form action="sedit.php" method="POST">
            <input type="hidden" name="editid" value="<?php echo  $row['id'] ?>"/>
            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
         </form>
      </td>
      <td>
         <form action="scode.php" method="POST">
            <input type="hidden" name="deleteid" value="<?php echo  $row['id'] ?>"/>
            <button type="submit" name="delete" class="btn btn-success">Delete</button>
         </form>
        </td>
      
  </tr>
  <?php
      }
    }
    ?>
</tbody>
</table>
</body>
</html>