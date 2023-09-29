
<?php

$paidfor="";
$ticket_ID="";
header("Cache-Control: private, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat,26 Jul 1997 05:00:00 GMT");
//CONNECTING TO THE DATABASE
include "connect.php";
session_start();
?>
<!--HTML CODE STARTS -->
<html>
<head> 
    <title>payment Page</title>
    <style> 
    body {
               
        }
    .center{
      

    }
    .center2{
        font-size:15px;
        width:100%;
        background: rgb(27,43,158);
background: linear-gradient(90deg, rgba(27,43,158,1) 0%, rgba(201,23,0,1) 0%, rgba(46,8,237,1) 0%, rgba(186,106,164,1) 74%, rgba(242,242,242,1) 100%);
    }
    table {
    margin: 0 auto; /* or margin: 0 auto 0 auto */
    width:50%;
    height:5%;
    }
  }
    td,th { border: 1px solid #ddd; padding: 8px;}
    #Table{ font-family: Arial,Helvetica, sans-serif; border-collapse: collapse;}
    #Table tr:nth-child(even){ background-color: #d2d3d4; }
    #Table tr:nth-child(odd){ background-color: #dee2e3; }
    #Table tr:hover{ background-color: #b5d0eb; }
    #Table th { padding-top: 12px; padding-bottom: 12px; text-align:left; background-color:  #608fb3; color:white; }

    </style>    
     <script type="text/javascript">
    
    if(window.history.replaceState){
        
        window.history.replaceState(null, null, window.location.href); 
    }
    
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"> </script>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</head>
<!-- BODY-->
<body style="background: rgb(27,43,158);
background: linear-gradient(90deg, rgba(27,43,158,1) 0%, rgba(201,23,0,1) 0%, rgba(46,8,237,1) 0%, rgba(186,106,164,1) 74%, rgba(242,242,242,1) 100%);">
<!-- INCLUDING NAVBAR-->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <img src="assets/img/showcases/showcase-2/pngwing.com2.png"style="width:6%;height:auto"/>
        <a href="#" class="navbar-brand">DANY CINEMA</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="div.php" class="nav-item nav-link active">Home</a>
         
                <a href="aboutus.php" class="nav-item nav-link">About us</a>
              	<a href="contactus.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto"> 
                             	
            
            </div>
       
        </div>
        
    </div>

    
 
  <?php if($_SESSION["email"]){
   
    ?>
 
<p style="color:white"><?php echo $_SESSION["email"]; ?></p><div class="spinner-grow text-success"> </div>.<a class="btn btn-primary me-md-2" href="logout.php"  tite="logout"> LOGOUT </a>
<?php
   } else echo" "  ?>
  
   


</nav>



<!-- PHP CODE STARTS HERE-->
<!-- when user clicks proceed button then below code is executed-->
<?php 
  if(isset($_POST['form_submitted'])){

    //These variables are collecting form data
      $PAYER_ID = $_POST['payerID'];
      $PAYEE_ID = $_POST['payeeID'];
      $AMOUNT = $_POST['amount'];

      $pn=$_POST['passwordd'];

      $sql="SELECT ID,username,email FROM register WHERE email='$PAYER_ID' && passwordd='$pn' ";
		
		
      $result=$con->query($sql);
     
      if($result->num_rows>0) {
    
    
      while($row=$result->fetch_assoc()){

        
    
      
      

      if(empty($PAYER_ID) || empty($PAYER_ID) || empty($AMOUNT)){
        //javascript code to notify user not to leave field blank         
        echo "<script> alert('Empty Fields !!');
        window.location.href='paymentform.php';
        </script>";  
        exit() ;           
      }

      //CHECK IF AMOUNT IS GREATER THAN 0 OR NOT
      if($AMOUNT <=0){
        echo "<script> alert('Amount must be greater than zero !!');
        window.location.href='paymentform.php';
        </script>";  
        exit() ;  
      }

      if(!ctype_digit($AMOUNT) || ctype_digit($PAYER_ID) || ctype_digit($PAYEE_ID)){
        echo "<script> alert('Entered amount can only contain digit!!');
        window.location.href='paymentform.php';
        </script>";  
        exit() ;  
      }

      //CHECK IF PAYER ID EXISTS OR NOT
      $sqlcount = "SELECT COUNT(1) FROM register where email='$PAYER_ID'";
      $r =  $con->query($sqlcount);
      $d = $r->fetch_row();
      if($d[0]<1){
        echo "<script> alert('Payer ID does not exists !!');
        window.location.href='paymentform.php';
        </script>";  
        exit() ;      
      }
    
      //CHECK IF PAYEE ID EXISTS OR NOT
      $sqlcount = "SELECT COUNT(1) FROM administrator where username='$PAYEE_ID'";
      $r =  $con->query($sqlcount);
      $d = $r->fetch_row();
      if($d[0]<1){
        echo "<script> alert('Payee ID does not exists !!');
        window.location.href='paymentform.php';
        </script>";  
        exit() ;      
      }
      
      //CHECK IF PAYER HAS SUFFICIENT MONEY OR NOT
      $sql = "Select * from register where email='$PAYER_ID'";       
          if($result = $con->query($sql)){            
               $row1 = $result->fetch_array(); 
               if($row1['balance']<$AMOUNT){
                echo "<script> alert('Payer does not have required balance !!');
                window.location.href='deletereserve.php';
                </script>";  
                exit() ; 
                }  
          }  
        }
      }

      else{
	
        echo  "<script> alert(  'password is invalid, please try again!');
        history.back();
        </script>";  
        exit() ; 
        
      } 
   
      //THIS ELSE CODE BELOW IS PERFORMING TRANSACTION FROM PAYER AND PAYEE BANK ACCOUNTS
      //BELOW CODE RUNS WHEN ALL DETAILS ENTERED BY USER ARE CORRECT OR NOT

          echo "<div class ='center'>";
          echo "<div class ='center2'>"; ?>  <!-- <div class="container"  style="position:absolute; right:345px; top:56px;width:50%">
          <div class="progress">
          <div class="progress-bar bg-success" style="width:100%">100%</div>
          </div>
              </div> --> <?php  
          echo "<h1 style='text-align: center'>Payment Successfully Completed</h1>
          <h2 style='text-align: center'>We have sent you an email with your ticekt number,please check your email!</h2>
                <p  style='text-align: center; font-size:25px;'>Details of payer is as follows<p>
                <table id = 'Table'>
                <tr>
                <th></th>
                <th>email</th>
                <th>Name</th>
                <th>phone no:</th>
               
                </tr>";

          //SELECTING PAYER DETAILS FROM ACCOUNTDETAILS TABLE
          $sql = "Select * from register where email='$PAYER_ID'";       
          if($result = $con->query($sql)){            
               $row1 = $result->fetch_array(); 
                //row1 contains payer details
                       echo "<tr> 
                            <td> Payer </td>
                            <td>".$row1['email']."</td>
                            <td>".$row1['username']."</td>
                            <td>".$row1['phone']."</td>
                           
                            </tr>";                        
                       $PayerCurrentBalance = $row1['balance'];            
            }
        
          //SELECTING PAYEE DETAILS FROM ACCOUNTDETAILS TABLE
          $sql2 = "Select * from administrator where username='$PAYEE_ID'";
          if($result = $con->query($sql2)){
                //row2 contains payee details
                $row2 = $result->fetch_array();
                                             
                $PayeeCurrentBalance = $row2['balance']; 
               
            }               
            echo "</table>";
            $PayeeCurrentBalance += $AMOUNT;
            $PayerCurrentBalance -= $AMOUNT;
            echo "<br>";
           
            echo "<table id = 'Table' style='margin-bottom:15px;'>
                    <tr>
                        <th></th>
                        <th>Old Balance</th>
                        <th>New Balance</th>
                    </tr>
                    <tr>
                        <th>Payer</th>
                        <td style='color:black'>".$row1['balance']."</td>                        
                        <td style='color:black'>".$PayerCurrentBalance."</td>
                    </tr>
                    ";
                    
                    ?>                   
          <?php  echo "</table>"; 
         ?>
          
         
          <?php
$receiver = "hellodarky8@gmail.com";
$subject = "DARKY WALLET";
$body = "Dear customer,  Your account  $PAYER_ID is debited with ETB  $AMOUNT to DANY cinema.Your current balance is ETB  $PayerCurrentBalance Thank you for paying with DARKY WALLET!";
$sender = "From:hellodarky8@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "1";
}else{
    echo "0";
}
?>


          <div class="toast bg-primary text-white fade show" style="position: absolute; top: 70px; right: 10px;">
    <div class="toast-header bg-primary text-white">
        <strong class="me-auto"><i class="bi-gift-fill"></i> Dear Customer !</strong>
        <small>23 secs ago</small>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
    Your account <?php echo $PAYER_ID ?> is debited with ETB <?php echo $AMOUNT ?> to DANY cinema. <?php echo "<br>";?> Your current balance is ETB <?php echo $PayerCurrentBalance ?> Thank you for reserving with AB cinema! " ; <a href="custbalance.php" class="text-white">Click here to see your balance!</a>
    </div>
</div>


           
                    <div class="m-4">
    <div class="d-grid gap-2">
      <!--  <a type="button" class="btn btn-primary" style="width:50%;position: absolute; bottom: 250px; right: 385px;"value="<?php // echo $AMOUNT ;?>" href="refund.php?ID=<?php  // echo $row['seat_number'] ;?>" >refund</a> -->
        <a type="button" class="btn btn-primary" style="width:50%;position: absolute; bottom: 228px; right: 385px;" href="div.php?" > back to home </a>
    </div>
</div>
                    <?php
            //echo "Payer has available Balance = ".$row1['balance']."<br>";           
            //echo "Payer has available Balance = ".$PayerCurrentBalance."<br>";
            //echo "Payee has available Balance = ".$PayeeCurrentBalance."<br>";

           //FOR UPDATING DETAILS OF PAYER
           $updatepayer ="Update register set balance='$PayerCurrentBalance' where email='$PAYER_ID'";
           //FOR UPDATING DETAILS OF PAYEE
           $updatepayee ="Update administrator set balance='$PayeeCurrentBalance' where username='$PAYEE_ID'";

           //CHECK IF PAYER DETAILS ARE UPADTED OR NOT 
           if($con->query($updatepayer)==true){
                ?>         
                <script>console.log("PAYER DETAILS UPDATED!!")</script>
                <?php
           }
           else{
                ?>        
                <script>alert("PAYER DETAILS NOT UPDATED!!")</script>
                <?php
           }

           //CHECK IF PAYEE DETAILS ARE UPADTED OR NOT 
           if($con->query($updatepayee)==true){
                    ?>         
                    <script>console.log("PAYEE DETAILS UPDATED! ")</script>
                    <?php
            }
            else{
                    ?>        
                    <script>alert("PAYEE DETAILS NOT UPDATED! ERROR OCCURED!")</script>
                    <?php
            }


            $bk=mysqli_query($con,"select * from reservation where register_ID='".$_SESSION['userid']."'");
				if(mysqli_num_rows($bk)){

      while( $bkg=mysqli_fetch_array($bk)) {
						

              $seatn=mysqli_query($con,"select * from seat_n where ID='".$bkg['seat_n_ID']."'");
							$sn=mysqli_fetch_array($seatn);
               
              //paid for seat number $sn
              $ticket_ID=$bkg['ID'];

              $paidfor=$sn['seat_number'];
           //SETTING TIME ZONE
            date_default_timezone_set('Asia/Kolkata');           
            $date = date('Y-m-d H:i:s',time());
            //echo "Current time is : ".$date;
      }
            //FOR UPDATING HISTORY TABLE WHICH MAINTAINS RECORDS OF ALL TRANSACTIONS
            $InsertTransactTable ="INSERT INTO history (payer, payerAcc, amount, time,paidfor,ticket_ID) VALUES ('$row1[username]','$row1[email]',$AMOUNT,'$date',$paidfor,$ticket_ID)";
            //EXECUTING INSERT COMMAND AND CHECKING IF INSERTION WAS SUCCESSULL OR NOT
            $result=$con->query($InsertTransactTable);
            echo $result;
            if($result==true){
                    ?>         
                    <script>console.log("Record of this transaction saved! ") </script>
                    <?php
            }
            else{
                    ?>        
                    <script>alert("Record of this transaction saved! ERROR OCCURED!")</script>
                    <?php
            }


            echo "<br>";
        echo "</div>";
        echo "</div>";
       // echo"<script>alert('Transaction successfull!!')</script>";
        //END OF ELSE OF PROCEED BUTTON
     // }
               
    
  }
    

  //IF ENDS HERE    
  }else{
      ?>
      <h1> You have already made your payment, nothing to see here.</h1>
      <?php
  }
  
  //DATABASE CONNECTION ENDS HERE
  $con->close();
  //PHP CODE ENDS HERE
?> 
 
             

         

</body>
</html>
<!--HTML CODE ENDS HERE-->
<!--MADE BY SWATI TRIPATHI-->
