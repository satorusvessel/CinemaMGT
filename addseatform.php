


<?php include('adminheader.php');?>
<!DOCTYPE HTML>
<html style="background-color:black">
<head >
  <title>Add seat Form</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="newloginstyele.css">
</head>
<body   style="background-image:none">
  <div class="movie-list-container" style="color:black">
    
    

</div>
<div class="text"> <h1> <br> <br> <br> <br> <br> <br> <h1> 
  <h1>    Add seat form <h1> </div>
<div class="registration-form" >
 <form action="addseat.php" method="POST" enctype="multipart/form-data">
  <table>
  
   <tr>
    <td style="color:rgb(12, 174, 223)">SEAT TYPE :</td>
    <td><input type="text" name="seat_type" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">PRICE :</td>
    <td><input type="text" name="seat_number" required></td>
   </tr>
   
   <tr>
    <td><input type="submit" value="add movie" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>