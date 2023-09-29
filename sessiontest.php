<!DOCTYPE html>
<html>
		<head>
		<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
		</head>

<body>
<?php 
include "connect.php";

session_start();
$lname=$_POST['username'];
$pn=$_POST['passwordd'];
 $qry=mysqli_query($con,"SELECT ID,username,passwordd FROM administrator WHERE username='$lname' && passwordd='$pn' ");
		
		
 if(mysqli_num_rows($qry))
 {
     $usr=mysqli_fetch_array($qry);
     if($usr['user_type']==2)
     {
         $_SESSION['user']=$usr['user_id'];
         if(isset($_SESSION['show']))
         {
             header('location:booking.php');
         }
         else
         {
             header('location:index.php');
         }
     }
     else
     {
         $_SESSION['error']="Login Failed!";
         header("location:login.php");
     }
     
 }
 else
 {
     $_SESSION['error']="Login Failed!";
     header("location:login.php");
 }
 ?>
	
<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>	
</body>
	</html>