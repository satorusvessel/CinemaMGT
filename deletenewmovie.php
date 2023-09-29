<?php
session_start();
include('connect.php');

$sql= "DELETE FROM advert WHERE ID='".$_GET['ID']."'";
if (mysqli_query($con, $sql)){

    echo "<script> alert('you have succesfuly deleted the advertisment !!');
    window.location.href='upmovielist.php';
    </script>";  
    exit() ; 
    
} else {
    echo "Error deleting ad: " .mysqli_error($con);
}
mysqli_close($con);
?>
