<?php require_once 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fluid Layout</title>

<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">

<link rel="stylesheet" href="hover.css">


<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</head>
<body style="overflow-x:none">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Tutorial Republic</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="newhome.php" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Services</a>
                <a href="#" class="nav-item nav-link">About</a>
              	<a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto">              	
                <a href="newlogin.php" class="nav-item nav-link">Login</a>
              	<a href="newregister.php" class="nav-item nav-link">Register</a>
            </div>
        </div>
    </div>
</nav>


<div class="container">
<?php

$query="SELECT `ID`, `title`, `length_`, `trailer`, `descriptionn`,`imagee`,`show_time` FROM `movie_table` WHERE 1";
$rsu=mysqli_query($con,$query);
if(mysqli_num_rows($rsu)){

while($row=mysqli_fetch_array($rsu)){

    ?>
    <div class="col">
        
    <div class="d-flex flex-wrap align-content-start bg-light"  style="align-content: space-between">>
    
    
        <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
            <div class="backgroundEffect"></div>
            <div class="pic"> <?php echo '<img src=upload/'.$row['imagee'].' >'; ?> 
                <div class="date"> <span class="day">26</span> <span class="month">June</span> <span class="year"><?php  echo $row['show_time'] .'AM';?></span> </div>
            </div>
            <div class="content">
                <p class="h-1 mt-4"><?php echo $row['title']??''; ?></p>
                <p class="text-muted mt-3"><?php  echo $row['descriptionn']?></p>
                <div class="d-flex align-items-center justify-content-between mt-3 pb-3">
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
</div>


  <script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
  
</body>

  </html>