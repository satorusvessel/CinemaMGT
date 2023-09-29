<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fluid Layout</title>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">



<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>

<body>
<?php 
include "connect.php";
include "header2.php";


session_start();



$email=trim($_POST['email']);

$pn=trim($_POST['password']);

if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
    echo "<script> alert('you did not enter a valid email !!');
	history.back();
    </script>";  
    exit() ; 
}
else{
  echo "s";
  //final code will execute here.
}



if(!empty($email)&& !empty($pn)){

 
		$sql="SELECT ID,username,email FROM register WHERE email='$email' && passwordd='$pn' ";
		
		
	$result=$con->query($sql);
	if($result->num_rows>0) {
	while($row =$result->fetch_assoc()){
		

$_SESSION['email']=$row['email'];
$id = $row['ID'];
$_SESSION['userid']=$id;
		header('Location:div.php');
		} 
		

}


else{ 
	echo "<script> alert('password or email is invalid please try again !!');
	history.back();
	</script>";  
	exit() ; 
	
} 
}


$con->close();

?>

	
		
</body>
	</html>