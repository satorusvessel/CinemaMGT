<?php include('header2.php');?>
<?php 

include "connect.php";
if(isset($_POST['sbmt'])){

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
		
		echo  '<div class="alert alert-danger" role="alert">';
		echo 'login  succesful';
		echo '</div>';
		header ('Location:adminhome.php');
	} 
		

}


else{
	echo  '<div class="alert alert-warning" role="alert">';
		echo 'invalid password please try again!';
		echo '</div>';
} 
}
}

$con->close();

?>

	
<!DOCTYPE html >
<html style="background-color:black">
    <head>
        <title> admin login form</title>
        
        
        <link rel="stylesheet" type="text/css" href="newloginstyele.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
       
     
    </head>
    <body style="background-image:none">
        
       
        
        <div class="registration-form"  >
            <h1> ARE YOU ADMIN?</h1>
            <form action="adminlogin.php" method="POST" >
                <p style="color:rgb(12, 174, 223)"> User Name:</p>
                <input  class="form-control"  type="text" name="username" placeholder="user Name" required>
                <p style="color:rgb(12, 174, 223)">password:</p>
                <input  class="form-control"  type="password" name="passwordd" placeholder="passwordd" required> <br>
                <button class="btn btn-info" type="submit" name="sbmt"> LOGIN</button>       
                </form>
        </div>
        
    </body>
</html>