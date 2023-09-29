<?php
if (isset($_POST['submit'])) {
   
   
    if ( isset($_POST['title']) && 
        isset($_POST['trailer']) &&
        isset($_POST['descriptionn'])) {
         
       
        $title = $_POST['title'];
        
        $trailer = $_POST['trailer'];
        
        $description = $_POST['descriptionn'];
      

        $image = $_FILES['imagee']['name'];
       
        $target="upload/".basename($image);

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cinema";
            
        $conn= new mysqli($servername,$username,$password,$dbname);

        if (mysqli_connect_error()) {
            die('Could not connect to the database('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else {
            $SELECT = "SELECT title FROM advert WHERE title = ? LIMIT 1";
            $Insert = "INSERT INTO advert(title,trailer,descriptionn,imagee) values(?, ?, ?, ?)";

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
                $stmt->bind_param("ssss", $title,  $trailer,$description,$image);
                if ($stmt->execute()) {
                    echo "<script> alert('you have succesfuly entered an upcoming movie !!');
                    window.location.href='adminhome.php';
                   </script>";  
                    
                    move_uploaded_file($_FILES['imagee']['tmp_name'],$target);
                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<script> alert('this movie already exists !!');
                window.location.href='movielist.php';
                </script>";  
                exit() ; 
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "<script> alert('all fields are required !!');
        window.location.href='upmovieform.php';
        </script>";  
        exit() ; 
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>