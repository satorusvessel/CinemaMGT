<?php
session_start();
include('connect.php');
$sql= "DELETE FROM reservation WHERE ID = (SELECT MAX(ID) FROM reservation)";
if (mysqli_query($con, $sql)){

  
    $account=$_SESSION ['email'];
    $receiver = "hellodarky8@gmail.com";
    $subject = "DANY CINEMA";
    $body = "Dear customer, your reservation has been canceled! thank you for using DANY cinema! ";
    $sender = "From:hellodarky8@gmail.com";
    if(mail($receiver, $subject, $body, $sender)){
        echo "";
    }else{
        echo "Sorry, failed while sending mail!please check your connection";
    }
  
    echo "<script> alert('your reservation has been canceled!!');
    window.location.href='div.php';
    </script>";  
    exit() ; 
   
} else {
    echo "Error deleting reservation: " .mysqli_error($con);
}
mysqli_close($con);
?>
