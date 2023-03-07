	<?php
	$con = mysqli_connect("localhost","root","","project");
	if(isset($_POST['update']))
			{
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$phone = $_POST['phone'];
					$email = $_POST['email1'];
				$update = "update web_data set fname='$fname',lname='$lname',phone='$phone',email='$email' where email='$email'";
				mysqli_query($con,$update);
			}
			
			header("location:table.php");
			?>  