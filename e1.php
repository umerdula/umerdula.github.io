<?php
$con = mysqli_connect("localhost","root","","project");
if(isset($_POST['update']))
        {
                $name = $_POST['name'];
                $email=$_POST['email'];
				$pno=$_POST['phoneno'];
				$bdate=$_POST['date'];
            	$update = "update web_data set uname='$name',email='$email',pno='$phoneno',bdate='$bdate' where uname='$_SESSION[uname]';";
            mysqli_query($con,$update);
        }
        
        header("location:profile.php");
?>  
