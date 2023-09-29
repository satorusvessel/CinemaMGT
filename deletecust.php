<?php
session_start();
include('connect.php');
$sql= "DELETE FROM reservation WHERE ID='".$_GET['ID']."'";
if (mysqli_query($con, $sql)){
    echo "<script> alert('you have succesfuly deleted the reservation !!');
    window.location.href='bookings.php';
    </script>";  
    exit() ; 
   
} else {
    echo "Error deleting reservation: " .mysqli_error($con);
}
mysqli_close($con);
?>
