
<?php
session_start(); 

if (isset($_POST['submit'])) {
  
    if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['phone']) && isset($_POST['location']) &&
        isset($_POST['message'])) {
            
        
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = $_POST['phone'];
        
        $location = trim($_POST['location']);
        $message = trim($_POST['message']);
       

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cinema";

        $conn= new mysqli($servername,$username,$password,$dbname);

        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
            echo "<script> alert('you did not enter a valid email !!');
            window.location.href='contactus.php';
            </script>";  
            exit() ; 
        }
        elseif(strlen($phone)<9){
            echo "<script> alert('phone number should be 9 digits !!');
            window.location.href='contactus.php';
            </script>";  
            exit() ; 
          }

          elseif(strlen($message)<5){
            echo "<script> alert('message should be 5 characters long !!');
            window.location.href='contactus.php';
            </script>";  
            exit() ; 
          }
      
  elseif(is_numeric(trim($phone)) == false){
    echo "<script> alert('please enetr a valid phone number !!');
    window.location.href='contactus.php';
    </script>";  
    exit() ; 
  }
  

        if (mysqli_connect_error()) {
            die('Could not connect to the database('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else {
            $SELECT = "SELECT email FROM comment WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO comment(name, email ,phone, location, message) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                



                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssiss",$name, $email, $phone, $location, $message);
                if ($stmt->execute()) {
                    echo "<script> alert('you have succesfuly sent a message to Dany cinema !!');
                window.location.href='contactus.php';
                </script>";  
                exit() ; 
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<script> alert('message has already been sent using this email !!');
                window.location.href='contactus.php';
                </script>";  
                exit() ; 
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>