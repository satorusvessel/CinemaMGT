<?php include('adminheader.php');?>
<!DOCTYPE HTML>
<html style="background-color:black">
<head >
  <style> .without_ampm::-webkit-datetime-edit-ampm-field {
   display: none;
 }
 input[type=time]::-webkit-clear-button {
   -webkit-appearance: none;
   -moz-appearance: none;
   -o-appearance: none;
   -ms-appearance:none;
   appearance: none;
   margin: -10px; 
 }</style>
  <title>Add movie Form</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="newloginstyele.css">
</head>
<body   style="background-image:none">
  <div class="movie-list-container" style="color:black">
    
    

</div>
<div class="text"> <h1> <br> <br> <br> <br> <br> <br> <h1> 
  <h1>    Add movie form <h1> </div>
<div class="registration-form" >
 <form action="insertmovie.php" method="POST" enctype="multipart/form-data">
  <table>
  
   <tr>
    <td style="color:rgb(12, 174, 223)">movie title :</td>
    <td><input type="text" name="title" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">movie length :</td>
    <td><input type="text" name="length_" required></td>
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
    <td style="color:rgb(12, 174, 223)">show time :</td>
    <td><input type="time" class="without_amp"  name="show_time" required></td>
   
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">image</td>
    <td>
      <input type="file" name="imagee"  required> 
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="add movie" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>