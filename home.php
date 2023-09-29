<?php include('header.php');?>
<?php require_once 'connect.php';?>
<?php
include("fetch.php");?>
<?php
include("display.php");?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinema reservation</title>
    <link rel="stylesheet" type="text/css"  href="hstyle.css">
    <link rel="stylesheet"   type="text/css" href="headerstyle.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<style>







</style>
</head>
<body> 
 
    <h1> <br> <br> <br> <h1>
</div>
<h1 class="movie-list-title" style="margin-top:-115px;">NOW SHOWING</h1>
<div class="movie-list-container" style="   display : flex
   flex-direction : row 
   justify-content : space-around
   flex-flow : wrap>">
<?php

$query="SELECT `ID`, `title`, `length`, `trailer`, `admin_ID`, `description` FROM `movie_table` WHERE 1";
$rsu=mysqli_query($con,$query);
if(mysqli_num_rows($rsu)){

while($row=mysqli_fetch_array($rsu)){
    ?>


    
    
        <div class="movie-list-wrapper"> 
            <div class="movie-list">
                <div class="movie-list-item">
                    <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                    <p class="movie-list-item-title"><?php echo $row['title']??''; ?></p>
                    <p class="movie-list-item-desc"><?php  echo $row['description']?></p>
                    <a class="movie-list-item-button" href="<?php  echo $row['trailer']?>" style="text-decoration:none">Watch Trailer</a> 
<button class="btnresv" style="margin-left:-120px;transition: 1s all ease-in-out; padding: 10px;
    
    background-color: #ffbd06;
    color: white;
    width:35%;
    border-radius: 10px;
    outline: none;
    border: none;
    cursor: pointer;
    position: absolute;
    bottom: 20px;">Reserve</button>
                </div>
              
             
               
            </div>
          
        </div>
    </div>


<?php
}

}

?>
    </div>
    <?php include('footer.php');?>
</body>
</html> 