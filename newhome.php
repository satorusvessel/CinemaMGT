<?php require_once 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fluid Layout</title>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<link rel="stylesheet" href="hover22.css">

<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>

<style>
* {
  box-sizing: border-box;
}

.video-container {
    height: 300px;
    width: 300px;
    position: relative;
}

.video-container video {
  width: 100%;
  height: 100%;
  position: absolute;
  object-fit: cover;
  z-index: 0;
} 
.caption{
    position:relative; left:0px; top:300px;color:white;
}

/* Just styling the content of the div, the *magic* in the previous rules */
.video-container .caption {
  z-index: 1;
  position: relative;
  text-align: center;
  color: #dc0000;
  padding: 10px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>


</head>
<body style="background: black;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <img src="assets/img/showcases/showcase-2/pngwing.com2.png"style="width:4%;height:auto"/>
        <a href="#" class="navbar-brand">DANY CINEMA</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="newhome.php" class="nav-item nav-link active">Home</a>
                <a href="adminlogin.php" class="nav-item nav-link">Admin Login</a>
                <a href="aboutus.php" class="nav-item nav-link">About</a>
              	<a href="contactus.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto">              	
                <a href="newlogin.php" class="nav-item nav-link">Login</a>
              	<a href="newregister.php" class="nav-item nav-link">Register</a>
            </div>
        </div>
    </div>
</nav>



 <!--  <div class="container-fluid" style="position:absolute; left:640px; top:56px; height: 443px; width: 58%;background-image: url('img/theatre.jpg'), url('img/poster.jpg');
  background-color: #cccccc;"><h1 style="position:absolute; left:150px; top:50px; color:white; font-family:  Geneva;font-style:italic"> WELCOME TO DANY CINEMA</h1>
<p class="lead" style="position:absolute; left:15px; font-weight: bold; color:white; top:190px;font-family >In today's world internet is the most popular way of connecting with the people. At <a href="https://www.tutorialrepublic.com" class="text-success" target="_blank"></a>No more running out of the office at work time on weekdays to bok a seat with your loved ones. DANY is now open for 24 hours.sign in and expeirince the joy of comfort from whereever you are!</p>
        <p style="position:absolute; left:200px; top:300px"><a href="https://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p> </div>
-->


<div class="container-fluid">
    <div class="p-5 my-4 bg-light rounded-3"  style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
        <h1 style="color: white">WELCOME TO DANY CINEMA</h1>
        <p class="lead"  style="color: white" >With our website you will be able to choose your prefered movie and book a seat from wherever you are! sign up now ! <a href="https://www.tutorialrepublic.com" class="text-success" target="_blank"></a> you wont regret being a member because we provide a convinient and easy way for online users to book seat remotely.</p>
        <p  style="color: white"><a href="login.php" class="btn btn-success btn-lg">Get started today &raquo;</a></p>
      
    </div>




 

    <div class="video-container"  style=" height: 395px; width: 100%;" >

    <video autoplay muted loop>
        <source src="spiderman.mp4" type="video/mp4" />
    </video>
    <div class="content">
    <div class="caption">
    <h1 style="color:white">DANY CINEMA</h1>
  <p style="color:white">this a place for advertisment for future purpose of the company. feel free to enjoy the video. its a compilatin edit of spider man.</p>

    </div>
</div>
 
</div>

<div> <br> <br> </div>

    
    <div class="row" style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%); ">
        <div class="col-md-4">
            <h2>ARE YOU NEW?</h2>
            <p>If you are new then we have a good news for you! sign-up to win two free 2D movie seat tickets( 300 BIRR) ! sign up now and join the community!</p>
            <p><a href="form.php"  class="btn btn-success">SIGN-UP &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>ALREADY A MEMBER?</h2>
            <p>WELCOME BACK CUSTOMER! you are missing out a lot, many new netflix movies are being shown at our theatre. login to book your seat today!</p>
            <p><a href="login.php"  class="btn btn-success">LOGIN &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>OUR SERVICES</h2>
            <p>Dany cinema provides a quality service. our seats contain both 2D & 3D which are 150 and 350 birr respectively.  get started to enjoy our services!</p>
            <p><a href="aboutus.php"  class="btn btn-success">Learn More &raquo;</a></p>
        </div>
    </div>

    <div>  <br> </div>


    <div class="container-fluid">
  <h1 style="color: white">COMING SOON! <br> </h1>
</div>
<div>  <br> </div>
    <div class="row row-cols-1 row-cols-md-4 g-4" style="background: rgb(36,0,0);
background: linear-gradient(90deg, rgba(36,0,0,1) 0%, rgba(160,24,177,1) 17%, rgba(17,224,208,1) 100%);">
    
    <?php
  
  $query="SELECT `ID`, `title`,  `trailer`, `descriptionn`,`imagee` FROM `advert` WHERE 1";
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
          
          <a type="button" class="btn btn-warning" href="<?php  echo $row['trailer']?>" >Watch trailer</a>
          
        </div>
      </div>
    </div>
    
  
      
      <?php
  }
  }
  ?>
  </div>
  <div>  <br> </div>
  <div class="container-fluid">
  <h1 style="color: white" >NOW SHOWING! </h1>
</div>
<div>  <br> </div>
    <div  id="content1" class="row row-cols-1 row-cols-md-4 g-4"  style="background: rgb(36,0,0);
background: linear-gradient(90deg, rgba(36,0,0,1) 0%, rgba(160,24,177,1) 17%, rgba(17,224,208,1) 100%);">
    
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
          <p class="card-text" id="movie-list-item-desc"><?php  echo $row['show_time'] .'AM';?></p>
          <a type="button" class="btn btn-warning" href="<?php  echo $row['trailer']?>" >Watch trailer</a>
          <a class="btn btn-primary me-md-2" type="submit" id="movie-list-item-button" href="login.php?ID=<?php echo $row["ID"];?>" >LOGIN to Reserve</a>
        </div>
      </div>
    </div>
    
  
      
      <?php
  }
  }
  ?>
  </div>
  











    <hr>
    <footer>
        <div class="row" style="height:50px">
            <div class="col-md-6">
                <p style="color:white">Copyright &copy; 2021 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-end" >
                <a href="#" class="text-dar"style="color:white">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dar" style="color:white">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</body>
</html>