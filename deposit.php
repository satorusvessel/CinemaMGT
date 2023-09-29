<?php
include 'connect.php';
if(count ($_POST)>0) {
    mysqli_query($con,"UPDATE register set ID='" . $_POST['ID'] ."',balance='" . $_POST['balance'] ."' WHERE ID='" .$_POST['ID'] ."'");
    echo "<script> alert('you have succesfuly deposited cash to the account!!');
    window.location.href='custlist.php';
    </script>";  
    exit() ; 
    $message= "movie modified succesfully!";
    header('Location:custlist.php');
}
$result =mysqli_query($con,"SELECT * FROM register WHERE ID='" . $_GET['ID'] ."'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>deposit cash form</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="newloginstyele.css">
</head>
<body>
  <div class="movie-list-container">
    
    

</div>
<div class="text"> <h1> <br> <br> <br> <br> <br> <br> <h1> 
  <h1>   deposit cash form <h1> </div>
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
    <td><input type="text" name="balance"  value="<?php echo $row['balance'];?>" required></td>
   </tr>
  
    
   <tr>
    <td><input type="submit" value="Edit" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>