<?php
session_start();
include('connect.php');

$sql= "DELETE FROM comment WHERE ID='".$_GET['ID']."'";
if (mysqli_query($con, $sql)){

    echo "<script> alert('you have succesfuly deleted the comment !!');
    window.location.href='commentlist.php';
    </script>";  
    exit() ; 
    
} else {
    echo "Error deleting ad: " .mysqli_error($con);
}
mysqli_close($con);
?>
