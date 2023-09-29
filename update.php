<?php
include 'connect.php';
if(count ($_POST)>0) {
    mysqli_query($con,"UPDATE movie_table set ID='" . $_POST['ID'] ."',title='" . $_POST['title'] ."',length_='" . $_POST['length_'] ."',show_time='" . $_POST['show_time'] ."',trailer='" . $_POST['trailer'] ."',descriptionn='" . $_POST['descriptionn'] ."',imagee='" . $_POST['imagee'] ."' WHERE ID='" .$_POST['ID'] ."'");
    echo "<script> alert('you have succesfuly edited the movie!!');
    window.location.href='movielist.php';
    </script>";  
    exit() ; 
    $message= "movie modified succesfully!";
    header('Location:movielist.php');
}
$result =mysqli_query($con,"SELECT * FROM movie_table WHERE ID='" . $_GET['ID'] ."'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>edit movie Form</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="newloginstyele.css">
</head>
<body>
  <div class="movie-list-container">
    
    

</div>
<div class="text"> <h1> <br> <br> <br> <br> <br> <br> <h1> 
  <h1>    EDIT movie form <h1> </div>
<div class="registration-form" >
 <form action=" " method="POST" enctype="multipart/form-data">
     <div style="color:rgb(12, 174, 223)"> <?php if(isset($message)) { echo $message; }?> </div>
  <table>
  <tr>
    <td style="color:rgb(12, 174, 223)">ID :</td>
    
    <td><input type="text" name="ID"  value="<?php echo $row['ID'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">movie title :</td>
    <td><input type="text" name="title"  value="<?php echo $row['title'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">movie length :</td>
    <td><input type="text" name="length_"  value="<?php echo $row['length_'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">show time:</td>
    <td><input type="text" name="show_time"  value="<?php echo $row['show_time'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">movie trailer :</td>
    
    <td><input type="text" name="trailer"  value="<?php echo $row['trailer'];?>" required></td>
   </tr>
   
   <tr>
    <td style="color:rgb(12, 174, 223)">description :</td>
    <td><input type="text" name="descriptionn"  value="<?php echo $row['descriptionn'];?>" required></td>
   </tr> 
   <tr>
    <td style="color:rgb(12, 174, 223)">image</td>
    <td><input type="text" name="imagee"  value="<?php echo $row['imagee'];?>" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Edit" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>