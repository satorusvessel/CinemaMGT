<?php
session_start();
include('connect.php');

mysqli_query($con,"delete from reservation where ID='".$_GET['ID']."'");
echo "<script> alert('you have succesfuly canceled your booking !!');
window.location.href='booking_history.php'; 
</script>";  
exit() ; 
?>