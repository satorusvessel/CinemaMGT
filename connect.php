
<?php


$servername="localhost";
$username="root";
$password="";
$dbname="cinema";


$con= mysqli_connect($servername,$username,$password,$dbname);
if($con){
    echo "    ";

}else{
    echo "this not connected";
}?>