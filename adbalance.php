<?php require_once 'connect.php';?>

<html>
<head>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">

<link rel="stylesheet" href="hover2.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />
 </head>
<title> group of cards</title>
<body style="overflow-x:none; background-color:black" >
<div class="row row-cols-1 row-cols-md-4 g-4">

<?php

$query="SELECT `balance` FROM `administrator` WHERE 1";
$rsu=mysqli_query($con,$query);
if(mysqli_num_rows($rsu)){

while($row=mysqli_fetch_array($rsu)){

    ?>

<div class="card text-white bg-success mb-3" style="position:absolute; left:490px; top:188px; height: 200px; width: 28%;">
  <div class="card-header">DEAR ADMIN!</div>
  <div class="card-body">
    <h5 class="card-title">YOUR CURRENT BALANCE IS....</h5> 
    <h1 class="card-text"><?php  echo $row['balance']?> BIRR</h1> <div class="spinner-grow text-info"> </div> 
    <a type="button" class="btn btn-warning" href="RecordsPage.php" >View transactions</a>
    <a href="adminhome.php" class="btn btn-primary">Back to dashboard</a>
  </div>
<?php
}
}  
?> 
</div>
  <script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</body>
  </html>