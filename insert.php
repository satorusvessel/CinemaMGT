
<?php
session_start();  

if (isset($_POST['submit'])) {
  
    if (isset($_POST['username']) && isset($_POST['passwordd'])&& isset($_POST['balance']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {
            
        
        $user_name = trim($_POST['username']);
        $password_ = trim($_POST['passwordd']);
        $balance = $_POST['balance'];
        
        $email = trim($_POST['email']);
        $phoneCode = trim($_POST['phoneCode']);
        $phone = trim($_POST['phone']);

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cinema";

        $conn= new mysqli($servername,$username,$password,$dbname);

        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
            echo "<script> alert('you did not enter a valid email !!');
            window.location.href=' history.back()';
            history.back();
            </script>";  
            exit() ; 
        }
        elseif(strlen($phone)<9){
            echo "<script> alert('phone number should be 9 digits !!');
           
            history.back();
            </script>";  
            exit() ; 
          }

          elseif(strlen($password_)<8){
            echo "<script> alert('password should be 8 character long !!');
            window.location.href=' history.back()';
            history.back();
            </script>";  
            exit() ; 
          }
      
  elseif(is_numeric(trim($phone)) == false){
    echo "<script> alert('please enetr a valid phone number !!');
    window.location.href='newregister.php';
    history.back();
    </script>";  
    exit() ; 
  }
  

        if (mysqli_connect_error()) {
            die('Could not connect to the database('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else {
            $SELECT = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, passwordd ,balance, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                
$_SESSION['email']=$email;



                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssisii",$user_name, $password_, $balance, $email, $phoneCode, $phone);
                if ($stmt->execute()) {
                    echo "<script> alert('you have succesfuly created an account !!');
                window.location.href='NEWLOGIN.PHP';
                </script>";  
                exit() ; 
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<script> alert('somene already registered using this email !!');
                history.back();
                </script>";  
                exit() ; 
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "<script> alert('All fields are required.');
        history.back();
        </script>";
        die();
    }
}
else {
    echo "<script> alert('submit button is not set!');
    history.back();
    </script>";
}
?>