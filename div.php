
<?php require_once 'connect.php';?>
<?php
include("fetch.php");?>
<?php session_start(); 

error_reporting(E_ERROR | E_PARSE );?>
<?php 
if($_SESSION['email']){
 
}else{
  header('location:login.php');
  }
  ?>



<html>
<head>
<style> 

.spinner-border {
    width: 50px; 
    height: 50px;
}
.fixed-plugin{
    position: fixed;
    top: 150px;
    right: 0;
    width: 64px;
    background: rgba(0,0,0,.3);
    z-index: 1031;
    border-radius: 8px 0 0 8px;
    text-align: center;
}
.fixed-plugin .fa-cog{
    color: #FFFFFF;
/*     background-color: rgba(0,0,0,.2); */
    padding: 10px;
    border-radius: 0 0 6px 6px;
}
.fixed-plugin .dropdown-menu{
    right: 80px;
    left: auto;
    width: 440px;
}
.fixed-plugin .dropdown-menu:after, .fixed-plugin .dropdown-menu:before{
    right: 10px;
    margin-left: auto;
    left: auto;
}
.fixed-plugin .fa-circle-thin{
    color: #FFFFFF;
}
.fixed-plugin .active .fa-circle-thin{
    color: #00bbff;
}

.footer-dropdown{
  top: -120px !important;
}

.footer-dropdown:before, .footer-dropdown:after{
  top: 300px !important;
}

.fixed-plugin img{
    border-radius: 6px;
    width: 200px;
    max-height: 175px;
    float: left;
}

.fixed-plugin .active a, 
.fixed-plugin a:hover{
    border-color: #00bbff;
}

.fixed-plugin .btn{
    margin: 10px 15px 0;
    color: #FFFFFF;
}
.fixed-plugin .btn:hover{
    color: #FFFFFF;
}
.fixed-plugin .badge{
    border: 3px solid #FFFFFF;
    border-radius: 50%;
    cursor: pointer;
    display: inline-block;
    height: 23px;
    margin-right: 5px;
    position: relative;
    width: 23px;
}
.fixed-plugin .badge.active, .fixed-plugin .badge:hover{
    border-color: #00bbff;
}
.fixed-plugin .badge-white{
    background-color: #eeeeee;
}
.fixed-plugin .badge-gray{
    background-color: #999999;
}
.fixed-plugin .badge-black{
    background-color: #5d5d5d;
}
.fixed-plugin .badge-orange{
    background-color: #FFA17F;
}
.fixed-plugin .badge-green{
    background-color: #3ABE41;
}
.fixed-plugin .badge-blue{
    background-color: #2ca8ff;
}
.fixed-plugin .badge-red{
    background-color: #E01724;
}
.fa{
    width: auto;
}

.fixed-plugin h5{
    font-size: 1em;
}
.fixed-plugin .dropdown-menu li{
    display: block;
    float: left;
    width: 100%;
    padding: 5px;
}

.fixed-plugin li.adjustments-line,
.fixed-plugin li.header-title{
    width: 100%;
    height: 50px;
    min-height: inherit;
}

.fixed-plugin li.header-title{
    height: 30px;
  line-height: 40px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  padding: 0 15px;
} 

.fixed-plugin .adjustments-line p{
    float: left;
    display: inline-block;
    margin-bottom: 0;
    font-size: 1em;
}
.fixed-plugin .adjustments-line .switch{
    float: right;
}
.fixed-plugin .dropdown-menu > li.adjustments-line > a{
      padding-right: 0;
      padding-left: 0;
      border-bottom: 1px solid #ddd;
      margin-left: 10px;
      margin-right: 10px;
}
.fixed-plugin .dropdown-menu > li:not(.adjustments-line) > a p{
  margin-top: 35px;
  font-size: 14px;
  margin-left: 14px;
}
.fixed-plugin .dropdown-menu > li > a:not(.switch-trigger){
      font-size: 16px;
      text-align: center;
      border-radius: 10px;
      background-color: #FFF;
      padding-left: 0;
      padding-right: 0; 
      opacity: 1;
      cursor: pointer;
}

.fixed-plugin .dropdown-menu > li > a.switch-trigger:hover,
.fixed-plugin .dropdown-menu > li > a.switch-trigger:focus{
    background-color: transparent;
}
.fixed-plugin .dropdown-menu > .active > a:not(.switch-trigger), 
.fixed-plugin .dropdown-menu > .active > a:not(.switch-trigger){
    border-color: #00bbff;
    background-color: #FFFFFF;
}

.fixed-plugin .dropdown-menu > li > a img{
    margin-top: auto;
    border: 3px solid transparent;
}

.fixed-plugin .dropdown-menu >li.active >a img{
  border-color: rgb(32, 195, 255);
}

.fixed-plugin .dropdown-menu >li > a:hover img{
  border-color: rgb(44, 168, 255);
}

.fixed-plugin .dropdown-menu > li.active > a p, 
.fixed-plugin .dropdown-menu > li > a p, 
.fixed-plugin .dropdown-menu > li.active > a:focus p{
    color: #777777;
}

.fixed-plugin .dropdown-menu > li > a:hover p{
  color: #333333;
}
.fixed-plugin .dropdown-menu:before,
.fixed-plugin .dropdown-menu:after{
    content: "";
    display: inline-block;
    position: absolute;
    top: 20px;
    width: 10px;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
}
.fixed-plugin .dropdown-menu:before{
    border-bottom: 10px solid rgba(0, 0, 0, 0);
    border-left: 10px solid rgba(0,0,0,0.2);
    border-top: 10px solid rgba(0,0,0,0);
    right: -10px;
}

.fixed-plugin .dropdown-menu:after{
    border-bottom: 10px solid rgba(0, 0, 0, 0);
    border-left: 10px solid #FFFFFF;
    border-top: 10px solid rgba(0,0,0,0);
    right: -9px;
}

@media (max-width:768px){
    .fixed-plugin{
        top: 80px;
        right: 0px;
    }
    .main .container{
        margin-bottom: 50px;
    }
    #video_background{
        display: none;
    }

} </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<link rel="stylesheet" href="hover22.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1" />
 </head>
<title> group of cards</title>
<body style="overflow-x:none; background-color:black" >


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <img src="assets/img/showcases/showcase-2/pngwing.com2.png"style="width:6%;height:auto"/>
        <a href="#" class="navbar-brand">DANY CINEMA</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="div.php" class="nav-item nav-link active">Home</a>
               
                <a href="aboutus.php" class="nav-item nav-link">About</a>
              	<a href="contactus.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto"> 
            <form action="search.php" method="GET">
		<input type="text" name="query" />
		<input type="submit" value="Search" />
	</form>
</body>  	
                
              
            </div>
       
        </div>
        
    </div>

    
 
  <?php if($_SESSION["email"]){
   
    ?>
 
<p style="color:white"><?php echo $_SESSION["email"]; ?></p>.<div class="spinner-grow text-success"></div>><a class="btn btn-primary me-md-2" href="logout.php"  tite="logout"> LOGOUT </a>
<?php
   } else echo" "  ?>
  
   


</nav>


                                          
 


  <div class="container-fluid">
    <div class="p-5 my-4 bg-light rounded-3"style="background: rgb(27,43,158);
background: linear-gradient(90deg, rgba(27,43,158,1) 0%, rgba(201,23,0,1) 0%, rgba(46,8,237,1) 0%, rgba(186,106,164,1) 74%, rgba(242,242,242,1) 100%);">
        <h1>WELCOME BACK <?php echo $_SESSION["email"]; ?> </h1>
        <p class="lead" >You have been missed, we have personalized your feed according to your recent booking history. go check out our newly added movies and book your seats! knock yourself out! <a href="https://www.tutorialrepublic.com" class="text-success" target="_blank"></a> click below to manage your account!</p>



        <div class="dropdown">
    <button   type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Manage
    </button>
    <?php 
    $movie = $con->query("SELECT * FROM register ");
    $roww=$movie->fetch_assoc();
    ?>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="booking_history.php">Booking History</a>
      <a class="dropdown-item" href="updateacc.php?email=<?php echo $_SESSION["email"];?>"> Update Profile </a>
      <a class="dropdown-item" href="custbalance.php">View Balance</a>
    </div>
  </div>



    </div>

  <div> <h1 style="color:white"> MOVIES FOR THIS WEEK</h1> </div>
  <div class="row row-cols-1 row-cols-md-4 g-4">
    
  <?php

$query="SELECT `ID`, `title`, `length_`, `trailer`, `descriptionn`,`imagee`,`show_time` FROM `movie_table` WHERE 1";
$rsu=mysqli_query($con,$query);
if(mysqli_num_rows($rsu)){

while($row=mysqli_fetch_array($rsu)){

    ?>

  <div class="col">
    <div class="card border-0 me-lg-4 mb-lg-0 mb-4" style="background-color: hsl(197, 92%, 48%)" id="movie-list-item">
    <div class="backgroundEffect"></div>
    <?php echo '<img src=upload/'.$row['imagee'].' >'; ?> 
      <div class="card-body">
        <h5 class="card-title" id="movie-list-item-title"><?php echo $row['title']??''; ?></h5>
        <p class="card-text" id="movie-list-item-desc"><?php  echo $row['descriptionn']?></p>
        <p class="card-text" id="movie-list-item-desc"><?php  echo substr($row['show_time'],0,5) .'AM';?></p> 
        <a type="button" class="btn btn-warning" href="<?php  echo $row['trailer']?>" >Watch trailer</a>
        <a class="btn btn-primary me-md-2" type="submit" id="movie-list-item-button" href="reserveform2.php?ID=<?php echo $row["ID"];?>" >Reserve</a>
      </div>
    </div>
  </div>
  

    
    <?php
}
}
?>
</div>

        </div>
        <div class="fixed-plugin">
            <div class="dropdown open">
                <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-spin" style="font-size:24px"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title" style="font-weight:bold;font-size:20px">MANAGE YOUR ACCOUNT</li>
                    
                    <li class="header-title"style="font-size:15px">BOOKING HISTORY</li>
                    <li class="">
                        <a href="booking_history.php" class="switch">
                        <img alt="..." src="assets/img/history.png" style="width:20%;height:auto">
                            <p class="pull-left">view your bookings so far</p>
                        </a>
                    </li>
                    <li class="header-title"style="font-size:15px">EDIT PROFILE</li>
                    <li class="">
                        <a href="updateacc.php?email=<?php echo $_SESSION["email"];?>" class="switch">
                        <img alt="..." src="assets/img/update.png" style="width:20%;height:auto">
                            <p class="pull-left">Update your account settings</p>
                        </a>
                    </li> 
                    <li class="header-title"style="font-size:15px">VIEW BALANCE</li>
                    <li class="">
                        <a href="custbalance.php" class="switch">
                            <img alt="..." src="assets/img/wallet.png" style="width:20%;height:auto">
                            <p class="pull-left">view your balance in DARKY wallet</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        
    
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>


    
  <script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</body>
  </html>