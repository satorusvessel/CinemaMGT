<?php require_once 'connect.php';
session_start();

 $result =mysqli_query($con,"SELECT * FROM seat WHERE ID='" . $_GET['ID'] ."'");
 $row= mysqli_fetch_array($result); ?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">50%</div>
</div>
    </div>


<form name="myForm" action="resultpage.php"  onsubmit="return validateForm()" method="post">
<div class="container p-0">
    <div class="card px-4">
    <p class="h8" style="font: size 15px;">DARKY wallet</p>
        <p class="h8 py-3">Payment Details</p>
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">ACCOUNT : <?php echo $_SESSION["email"] ?></p><input type="hidden" class="form-control mb-3" name="payerID" value="<?php echo $_SESSION["email"] ?>" placeholder="<?php echo $_SESSION["email"] ?>" min=100 required>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">paying to: DANY CINEMA</p><input type="hidden" name="payeeID" min=100 value="admin" required >
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">price: <?php echo $row['seat_number'] ?> BIRR</p> <input type="hidden" name="amount" value="<?php echo $row['seat_number'] ?>" required>
                </div>
            </div>
           
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">enter your password:</p> <input class="form-control mb-3 pt-2 " type="password"  name="passwordd"placeholder="*********" required>
                </div>
            </div>
            <div class="col-12">
                  
            <div class="btn btn-primary mb-3"> <input type= "hidden" name= "form_submitted" value="1">
             <input type="submit" class="btn btn-primary me-md-2" id="movie-list-item-button" > Pay  <?php echo $row['seat_number'] ?>  BIRR <span class="fas fa-arrow-right"></span></div>
           
                 
              
               
            </div>
        </div>
    </div>
</div>
</form>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
</html>