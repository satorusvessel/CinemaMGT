
<?php session_start(); 

 error_reporting(E_ERROR | E_PARSE );?>
<!DOCTYPE html> 
<head>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
</head>
<body>
<header>
<div>
  <nav class="navbar navbar-dark bg-dark"   >
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"  style="background-color: hsl(197, 90%, 28%)">
    <li class="nav-item" role="presentation">
      <a class="nav-link"  href="newhome.php">Home</a>
    </li>
    <li class="nav-item" role="presentation">
      <a  class="nav-link"  href="login.php">Login</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link"  href="form.php">sign-up</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link"  href="adminlogin.php">admin login</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link"  href="aboutus.php">about us</a>
    </li>
  </ul>
  <div style="margin-left:80%;margin-top:-7%;color:white;background-color:rgb(238, 157, 6);">
 
  <?php if($_SESSION["email"]){
   
    ?>
 
<?php echo $_SESSION["email"]; ?>.<a class="btn btn-primary me-md-2" href="logout.php"  tite="logout"> LOGOUT </a>
<?php
   } else echo" "  ?>
  
   
</div>
</nav>

</div>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><h1  style="color: hsl(197, 97%, 41%)" > </h1> </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" ><h1  style="color: hsl(197, 97%, 41%)" ></h1></div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
  </div>
       
</header>
<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</body>
</html>