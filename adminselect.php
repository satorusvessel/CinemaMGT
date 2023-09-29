<!DOCTYPE html>
<html>
		<head>
		<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
		</head>

<body>
<?php 

session_start();
include "connect.php";


$lname=$_POST['username'];
$pn=$_POST['passwordd'];
$_SESSION['username']=$lname;
$_SESSION['password']=$pn;


if( !empty($lname)&& !empty($pn)){


		$sql="SELECT ID,username,passwordd FROM administrator WHERE username='$lname' && passwordd='$pn' ";
		
		
	$result=$con->query($sql);
	if($result->num_rows>0) {


	while($row=$result->fetch_assoc()){

		echo  $row["username"] ;
		
		echo  '<div class="alert alert-warning" role="alert">';
		echo 'login  succesful';
		echo '</div>';
		header ('Location:adminheader.php');
	} 
		

}


else{
	echo  '<div class="alert alert-warning" role="alert">';
		echo 'invalid password please try again!';
		echo '</div>';
} 
}


$con->close();

?>

	
<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>	
</body>
	</html>