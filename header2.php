<?php session_start(); 

 error_reporting(E_ERROR | E_PARSE );?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fluid Layout</title>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">



<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <img src="assets/img/showcases/showcase-2/pngwing.com2.png"style="width:6%;height:auto"/>
        <a href="#" class="navbar-brand">DANY CINEMA</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="newhome.php" class="nav-item nav-link active">Home</a>
         
                <a href="aboutus.php" class="nav-item nav-link">About us</a>
              	<a href="contactus.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto"> 
                             	
                <a href="NEWLOGIN.PHP" class="nav-item nav-link">Login</a>
              	<a href="NEWREGISTER.PHP" class="nav-item nav-link">Register</a>
            </div>
       
        </div>
        
    </div>

    
 
  <?php if($_SESSION["email"]){
   
    ?>
 
<p style="color:white"><?php echo $_SESSION["email"]; ?></p><div class="spinner-grow text-success"> </div>.<a class="btn btn-primary me-md-2" href="logout.php"  tite="logout"> LOGOUT </a>
<?php
   } else echo" "  ?>
  
   


</nav>
</body>
</html>