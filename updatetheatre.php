<?php
include 'connect.php';
if(count ($_POST)>0) {
    mysqli_query($con,"UPDATE seat set ID='" . $_POST['ID'] ."',seat_type='" . $_POST['seat_type'] ."',seat_number='" . $_POST['seat_number'] ."' WHERE ID='" .$_POST['ID'] ."'");
    echo "<script> alert('you have succesfuly edited the theatre!!');
    window.location.href='seatlist.php';
    </script>";  
    exit() ; 
    $message= "movie modified succesfully!";
    header('Location:movielist.php');
}
$result =mysqli_query($con,"SELECT * FROM seat WHERE ID='" . $_GET['ID'] ."'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>edit seat Form</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="newloginstyele.css">
</head>
<body>
  <div class="movie-list-container">
    
    

</div>
<div class="text"> <h1> <br> <br> <br> <br> <br> <br> <h1> 
  <h1>    EDIT theatre form <h1> </div>
<div class="registration-form" >
 <form action=" " method="POST" enctype="multipart/form-data">
     <div style="color:rgb(12, 174, 223)"> <?php if(isset($message)) { echo $message; }?> </div>
  <table>
  <tr>
    <td style="color:rgb(12, 174, 223)">ID :</td>
    
    <td><input type="text" name="ID"  value="<?php echo $row['ID'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">seat type: </td>
    <td><input type="text" name="seat_type"  value="<?php echo $row['seat_type'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">price :</td>
    <td><input type="text" name="seat_number"  value="<?php echo $row['seat_number'];?>" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Edit" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>