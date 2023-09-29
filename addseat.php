<?php
if (isset($_POST['submit'])) {
   
   
    if ( isset($_POST['seat_type']) && 
         isset($_POST['seat_number'])) {
         
       
        $title = $_POST['seat_type'];
        $length = $_POST['seat_number'];
       

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cinema";
            
        $conn= new mysqli($servername,$username,$password,$dbname);

        if (mysqli_connect_error()) {
            die('Could not connect to the database('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else {
            $SELECT = "SELECT seat_type FROM seat WHERE seat_type = ? LIMIT 1";
            $Insert = "INSERT INTO seat(seat_type,seat_number) values(?, ?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $title);
            $stmt->execute();
            $stmt->bind_result($title);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("si", $title, $length);
                if ($stmt->execute()) {
                    echo "<script> alert('you have succesfuly entered a new seat !!');
                    window.location.href='seatlist.php';
                   </script>";  
                    
                   
                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<script> alert('this seat type already exists !!');
                window.location.href='seatlist.php';
                </script>";  
                exit() ; 
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "<script> alert('all fields are required !!');
        window.location.href='seatlist.php';
        </script>";  
        exit() ; 
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>