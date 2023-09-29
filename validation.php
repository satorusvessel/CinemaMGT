<?php
if(isset($_POST['Submit'])){

  $emp_name=trim($_POST["emp_name"]);
  $emp_number=trim($_POST["emp_number"]);
  $emp_email=trim($_POST["emp_email"]);

  if($emp_name =="") {
   
    echo "<script> alert('you did not enter a name. !!');
    window.location.href='login.php';
    </script>";  
    exit() ; 
  }
  elseif($emp_number == "") {
    echo "<script> alert('you did not enter a number !!');
    window.location.href='login.php';
    </script>";  
    exit() ; 
  }
  //check if the number field is numeric
  elseif(is_numeric(trim($emp_number)) == false){
    echo "<script> alert('please enetr a numeric value !!');
    window.location.href='login.php';
    </script>";  
    exit() ; 
  }
  elseif(strlen($emp_number)<9){
    echo "<script> alert('number should be 9 digits !!');
    window.location.href='login.php';
    </script>";  
    exit() ; 
  }
  //check if email field is empty
  elseif($emp_email == ""){
    echo "<script> alert('you did not enter  email !!');
    window.location.href='login.php';
    </script>";  
    exit() ; 
} //check for valid email 
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)){
    echo "<script> alert('you did not enter a valid email !!');
    window.location.href='login.php';
    </script>";  
    exit() ; 
}
else{
  echo "Success";
  //final code will execute here.
}

}
?>