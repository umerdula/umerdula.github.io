<?php
$con = mysqli_connect("localhost","root","","student");
if(isset($_POST['update']))
        {
                $name = $_POST['name'];
                $email=$_POST['Email'];
				$pno=$_POST['Phoneno'];
				$bdate=$_POST['date'];
            	$update = "update web_data set uname='$name',email='$email',pno='$phoneno',bdate='$date' where uname='$_SESSION[uname]';";
            mysqli_query($con,$update);
        }
        
        header("location:profile.php");
?>  
