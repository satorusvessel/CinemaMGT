<?php
if (isset($_POST['submit'])) {
   
   
    if ( isset($_POST['title']) && 
         isset($_POST['length_']) && isset($_POST['trailer']) &&
        isset($_POST['descriptionn'])  &&
        isset($_POST['show_time'])) {
         
       
        $title = $_POST['title'];
        $length = $_POST['length_'];
        $trailer = $_POST['trailer'];
        
        $description = $_POST['descriptionn'];
        $show_time = $_POST['show_time'];

     
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
            $SELECT = "SELECT title FROM movie_table WHERE title = ? LIMIT 1";
            $Insert = "INSERT INTO movie_table(title,length_,trailer,descriptionn,show_time,imagee) values(?, ?, ?, ?, ?, ?)";

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
                $stmt->bind_param("ssssss", $title, $length, $trailer,$description,$show_time,$image);
                if ($stmt->execute()) {
                    echo "<script> alert('you have succesfuly entered a movie !!');
                    window.location.href='movielist.php';
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
        window.location.href='movielist.php';
        </script>";  
        exit() ; 
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>