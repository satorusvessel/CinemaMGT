<?php
session_start();
include('connect.php');

$sql= "DELETE FROM movie_table WHERE ID='".$_GET['ID']."'";
if (mysqli_query($con, $sql)){

    echo "<script> alert('you have succesfuly deleted a movie !!');
    window.location.href='movielist.php';
    </script>";  
    exit() ; 
    
} else {
    echo "Error deleting movie: " .mysqli_error($con);
}
mysqli_close($con);
?>
