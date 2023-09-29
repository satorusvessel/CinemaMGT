<?php
include 'connect.php';
if(count ($_POST)>0) {
    mysqli_query($con,"UPDATE register set ID='" . $_POST['ID'] ."',username='" . $_POST['username'] ."',passwordd='" . $_POST['passwordd'] ."',phoneCode='" . $_POST['phoneCode'] ."',phone='" . $_POST['phone'] ."' WHERE ID='" .$_POST['ID'] ."'");
    echo "<script> alert('you have succesfuly updated your account!!');
    window.location.href='div.php';
    </script>";  
    exit() ; 
    $message= "movie modified succesfully!";
    header('Location:div.php');
}
$result =mysqli_query($con,"SELECT * FROM register WHERE email='" . $_GET['email'] ."'");
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
  <h1>   update profile form <h1> </div>
<div class="registration-form" >
 <form action=" " method="POST" enctype="multipart/form-data">
     <div style="color:rgb(12, 174, 223)"> <?php if(isset($message)) { echo $message; }?> </div>
  <table>
  <tr>
    
    
    <td><input type="hidden" name="ID"  value="<?php echo $row['ID'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">USERNAME :</td>
    <td><input type="text" name="username"  value="<?php echo $row['username'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">PASSWORD:</td>
    <td><input type="password" name="passwordd"  value="<?php echo $row['passwordd'];?>" required></td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">PHONE CODE :</td>
    <td>
    <select name="phoneCode" value="<?php echo $row['phoneCode'];?>" required>
      <option  value="<?php echo $row['phoneCode'];?>"><?php echo $row['phoneCode'];?></option>
      <option value="+251">+251</option>
      <option value="+978">+978</option>
      <option value="+979">+979</option>
      <option value="+973">+973</option>
      <option value="+972">+972</option>
      <option value="+974">+974</option>
     </select> </td>
   </tr>
   <tr>
    <td style="color:rgb(12, 174, 223)">PHONE :</td>
    <td><input type="phone" name="phone"  value="<?php echo $row['phone'];?>" required></td>
   </tr>
    
   <tr>
    <td><input type="submit" value="Edit" name="submit"></td>
   </tr>
  </table>
 </form>
</div>

</body>
</html>