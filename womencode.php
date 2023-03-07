<?php
    session_start();
    include('womenconnection.php');
    if(isset($_POST['submit']))

    {

        $name=$_POST["name"];
        $price=$_POST["price"];
        $image=$_FILES['image']['name'];
        if(file_exists("upload/".$_FILES["image"]["name"]))
        {
             $store=$_FILES["image"]["name"];
           // $SESSOION['Status']="Image already exits.'$store'";
           header('location:Awomen.php');
		   echo '<script> alert("Image Exits") </script>';
        }
        else
        {
        $insert="insert into women(name,price,image) values ('$name','$price','$image')";
		$result=mysqli_query($con,$insert);
		echo $insert;
        if($result)
        {
      move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
           
            header('location:Awomen.php');
        }
        else
        {
            //$SESSOION['success']="Data not inserted";
            header('location:Awomen.php');
        }
        }
        


    }

    if(isset($_POST['update']))
    {
        $id=$_POST["editid"];
        $name=$_POST["name"];
        $price=$_POST["price"];
        $image=$_FILES['image']['name'];

        $select="Select * from women where id='$id'";
        $result=mysqli_query($con,$select);
        while($row=mysqli_fetch_assoc($result))
        {
            if($image==NULL)
            {

                $image_data=$row['image'];
            }
            else
            {
                    if($img_path="/upload/".$row['image'])
                    unlink($img_path);
                   // $image_data=$image;
                  //  echo $img_path;
            }
        }
        $update="UPDATE women SET name='$name',price='$price', image='$image' where id='$id' ";
        $result=mysqli_query($con,$update);
      
        if($result)
        {
	      move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
           header('location:Awomen.php');
          // echo $image;
        }
        else
        {
            
           header('location:Awomen.php');
        } 

    }
    if(isset($_POST['delete']))
    {
        $id=$_POST["deleteid"];
       // echo $id;
       $Select = "select * from women where id = '$id'";
       $Result = mysqli_query($con,$Select);
       $row= mysqli_fetch_assoc($Result);
       if($img_path="upload/".$row['image'])
       {

            unlink($img_path);
            $delete="delete from women where id='$id'";
            $result=mysqli_query($con,$delete);
            if($result)
            {
                header('location:Awomen.php');
            }
            else
            {
			
               header('location:Awomen.php');
            }
        }
    }
   
?>
