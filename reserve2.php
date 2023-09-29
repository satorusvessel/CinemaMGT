<?php
if (isset($_POST['submit'])) {
   
    if ( isset($_POST['namee']) && 
         isset($_POST['phone_no'])) {
         
       
        $name = $_POST['namee'];
        $phone_no = $_POST['phone_no'];
       

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cinema";
            
        $conn= new mysqli($servername,$username,$password,$dbname);

        if (mysqli_connect_error()) {
            die('Could not connect to the database('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else {
            $SELECT = "SELECT namee FROM reservation WHERE namee = ? LIMIT 1";
            $Insert = "INSERT INTO reservation(namee,phone_no) values(?, ?)";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $stmt->bind_result($name);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("si", $name,$phone_no);
                if ($stmt->execute()) {
                    echo "reserved sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "reservation already exists.";
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