<?php include('adminheader.php');?>
<!DOCTYPE HTML>
<html style="background-color:black">
<head >
  <title>upcoming movie Form</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="newloginstyele.css">
</head>
<body   style="background-image:none">
  <div class="movie-list-container" style="color:black">
    
    

</div>
<div class="text"> <h1> <br> <br> <br> <br> <br> <br> <h1> 
  <h1>    upcoming movie form <h1> </div>
<div class="registration-form" >
 <form action="insertnewmovie.php" method="POST" enctype="multipart/form-data">
  <table>
  
   <tr>
    <td style="color:rgb(12, 174, 223)">movie title :</td>
    <td><input type="text" name="title" required></td>
   </tr>
   
   <tr>
    <td style="color:rgb(12, 174, 223)">movie trailer :</td>
    <td>
     <input type="text" name="trailer"  required>
    </td>
   </tr>
   
   <tr>
    <td style="color:rgb(12, 174, 223)">description :</td>
    <td><input type="text" name="descriptionn" required></td>
   </tr> 
  
   <tr>
    <td style="color:rgb(12, 174, 223)">image</td>
    <td>
      <input type="file" name="imagee"  required> 
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="add new movie" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>