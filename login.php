<?php include('header2.php');?>
<!DOCTYPE html>
<html >
    <head>
        <title> REGISTRATION FORM</title>
 
        
        <link rel="stylesheet" type="text/css" href="newloginstyele.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
       
     
    </head>
    <body style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
        
       
        
        <div class="registration-form"  >
            <h1 style="color:white;font-weight:bold"> WELCOME BACK CUSTOMER! </h1>
            <form action="select.php" method="POST">
           
                <p style="color:white">Email:</p>
                <input type="email" name="email" placeholder="email"  class="form-control" required>
                <p style="color:white">password:</p>
                <input type="password" name="password" placeholder="*******"  class="form-control" required> <br>
                <button class="btn btn-info" type="submit"> LOGIN</button>       
                </form>
        </div>
        
    </body>
</html>