<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<?php 
include('connect.php');

session_start();

$errro=0;
if(isset($_POST['submit'])) {
    $ID=$_POST['theatre_ID'];
    $seat_ID=$_POST['seat_ID'];
    $seat_n_ID=$_POST['seat_n_ID'];
    $namee=$_POST['namee'];
    $phone_no=$_POST['phone_no'];
    $show_date=$_POST['show_date'];
    $movie_ID=$_POST['movie_ID'];
    $register_ID= $_SESSION['userid'];
$query1="SELECT `seat_n_ID`,theatre_ID,seat_ID FROM `reservation` WHERE seat_n_ID='$seat_n_ID' AND theatre_ID=' $ID' AND seat_ID='$seat_ID' AND show_date='$show_date' AND movie_ID='$movie_ID'";
$result=mysqli_query($con,$query1);
if(mysqli_num_rows($result)>0){
    echo "<script> alert(  'seat number is taken ,please choose another seat!');
    history.back();
    </script>";  
   ?> 
   
   <?php 

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
        <a href="#" class="navbar-brand">DANY CINEMA</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="newhome.php" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Movies</a>
                <a href="aboutus.php" class="nav-item nav-link">About</a>
              	<a href="contactus.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto"> 
                             	
                <a href="newlogin.php" class="nav-item nav-link">Login</a>
              	<a href="newregister.php" class="nav-item nav-link">Register</a>
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
   
   
   <body style="overflow-x:none; background: rgb(27,43,158);
   background: linear-gradient(90deg, rgba(27,43,158,1) 0%, rgba(56,24,215,1) 0%, rgba(217,68,48,1) 49%, rgba(24,19,166,1) 100%, rgba(242,242,242,1) 100%);" >
   
   <div style="position:relative;left:250px;top:250px;width:1000px" class="alert alert-danger">
  <strong>warning!</strong> the seat number <?php echo $_POST['seat_n_ID'];?> is taken!
   
</div> 
<button style="position:relative;left:250px;top:270px;width:1000px" onclick="history.back()">Go Back</button>
</body>
<?php
    
    $errro=1;
}
  if($errro==0)
{
    $query="INSERT INTO reservation(theatre_ID,seat_ID,seat_n_ID,namee,phone_no,show_date,movie_ID,register_ID) VALUES ($ID,$seat_ID,$seat_n_ID,'$namee',$phone_no,'$show_date',$movie_ID,$register_ID)";
    
    
    $run=mysqli_query($con,$query);

     if($run)
    {
       
       
   $schedul = "SELECT `ID`, `seat_type`, `seat_number` FROM seat"; 
   $schedul_run = mysqli_query($con,$schedul);
   $row=mysqli_fetch_array($schedul_run);

  
      
     // header('Location:transfer.php?ID=<?php echo $row["ID"];');
       ?> 
           
           <?php
$movie = $con->query("SELECT * FROM reservation where movie_ID=$movie_ID AND seat_ID='$seat_ID' ");
while($row=$movie->fetch_assoc()){
    $mv = $row['movie_ID'];
    $movies = "SELECT title FROM `movie_table` WHERE ID = '$mv' ";
    $getmovie = $con->query($movies);
    $moviename=$getmovie->fetch_assoc();

                            $st = $row['seat_ID'];
							$seat = "SELECT seat_type FROM `seat` WHERE ID = '$st' ";
							$getseat = $con->query($seat);
							$sname=$getseat->fetch_assoc();
    $ticket=$row['ID'];
}
$lmaoo=$moviename['title'];
$seatlmaoo=$sname['seat_type'];


$receiver = "hellodarky8@gmail.com";
$subject = "DANY CINEMA";
$body = "Dear customer,  You have reserved the movie  $lmaoo  for $show_date at seat number $seat_n_ID to watch in $seatlmaoo . your ticket number is #ASATT$ticket. pay to keep your reservation and you are good to go! Thank you for reserving with DANY cinema!";
$sender = "From:hellodarky8@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "1";
}else{
    echo "0";
}
?>


       <html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"> </script>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<link rel="stylesheet" href="paycss.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
 </head>
<title> group of cards</title>
<body style="overflow-x:none;background: rgb(27,43,158);
background: linear-gradient(90deg, rgba(27,43,158,1) 0%, rgba(201,23,0,1) 0%, rgba(46,8,237,1) 0%, rgba(186,106,164,1) 74%, rgba(242,242,242,1) 100%);" >


<div class="container"  style="position:absolute; right:345px; top:56px;width:50%">
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:18%">25%</div>
</div>
    </div>


<form name="myForm" action=" "  onsubmit="return validateForm()" method="post">
<div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Account Details Confirmation</p>
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">ACCOUNT : <?php echo $_SESSION["email"] ?></p><input type="hidden" class="form-control mb-3" name="payerID" value="<?php echo $_SESSION["email"] ?>" placeholder="<?php echo $_SESSION["email"] ?>" min=100 required>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">name :  <?php echo $namee ?> </p><input type="hidden" name="payeeID" min=100 value="admin" required >
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">phone no: <?php echo $phone_no ?> </p> <input type="hidden" name="amount" value="" required>
                </div>
                <form action="/action_page.php">
   <h3 style="font-weight:bold"> CHOOSE YOUR PAYMENT ALTERNATIVES </h3>
    <div class="form-check">
      <input type="radio" name="radio-check"class="form-check-input" id="check2" name="option2" value="" required> </input>
      <label class="form-check-label" for="check2">DARKY wallet</label> </input>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" disabled>
      <label class="form-check-label">Tele Birr</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" disabled>
      <label class="form-check-label">Yene Pay</label>
    </div>
    
  
            </div>
           

           
           
           
            <div class="col-12">
                  
            <div class="btn btn-primary mb-3"> <input type= "hidden" name= "form_submitted" value="1">
             
             <a class="btn btn-primary me-md-2" type="submit" id="movie-list-item-button" href="paymentform.php?ID=<?php  echo $seat_ID ;?>" >proceed</a> 
                 
    </div>
               
            </div>
        </div>
    </div>
</div>
</form>
</form>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
</html>
       <?php 
    }
    else
    {
        echo "failed!";
       
    } 
}  

} ?>

