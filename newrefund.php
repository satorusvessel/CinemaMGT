<?php 
 
include ('connect.php'); 
include ('header2.php');
session_start();
$AMOUNT="";
$paidfor="";
$ticket_ID="";

/*$moviesr = "SELECT email FROM `register` WHERE email = '". $_SESSION['email']."' ";
$getm= $con->query($moviesr);
$customername=$getm->fetch_assoc(); */

$bk=mysqli_query($con,"select * from reservation where ID='".$_GET['ID']."'");
				if(mysqli_num_rows($bk)){
					

while($bkg=mysqli_fetch_array($bk))
						{
							/*$m=mysqli_query($con,"select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m); */
							$s=mysqli_query($con,"select * from seat where ID='".$bkg['seat_ID']."'");
							$srn=mysqli_fetch_array($s); 
                            

                            $seatn=mysqli_query($con,"select * from seat_n where ID='".$bkg['seat_n_ID']."'");
							$sn=mysqli_fetch_array($seatn);

                             $paidfor=$sn['seat_number'];
                        //  echo $sn['seat_number']; //amount

                            $AMOUNT= $srn['seat_number'];

                            $ticket_ID=$bkg['ID'];
echo $ticket_ID;
                            $sql = "Select * from register Where email='" .$_SESSION['email']."'";       
                            if($result = $con->query($sql)){            
                            $row1 = $result->fetch_array(); 
      
                             $PayerCurrentBalance = $row1['balance'];            
                      }  
                      $email=$_SESSION['email'];

$query="DELETE from history WHERE payerAcc='$email' AND amount='$AMOUNT'  AND ticket_ID='$ticket_ID' AND paidfor='". $paidfor."'";
                      mysqli_query($con,$query);
                     

                      $AMOUNT= $AMOUNT - $AMOUNT*0.2;
                      $PayerCurrentBalance += $AMOUNT;

                      $updatepayer ="Update register set balance='$PayerCurrentBalance' where email='" .$_SESSION['email']."'";  
                      if($con->query($updatepayer)==true){
                         ?>          
                         
                         <?php
                         $account=$_SESSION ['email'];
                         $receiver = "hellodarky8@gmail.com";
                         $subject = "DARKY WALLET";
                         $body = "Dear customer, refund process is complete. Your account  $account  is credited with ETB  $AMOUNT .Your current balance is ETB  $PayerCurrentBalance Thank you for using with DARKY WALLET!";
                         $sender = "From:hellodarky8@gmail.com";
                         if(mail($receiver, $subject, $body, $sender)){
                             echo "";
                         }else{
                             echo "Sorry, failed while sending mail!please check your connection";
                         }
                         ?>   
                    
                         <script>console.log("PAYER DETAILS UPDATED!!")</script>
                         <?php
                    }
                    else{
                         ?>        
                         <script>alert("PAYER DETAILS NOT UPDATED!!")</script>
                         <?php
                    }
                    
                    
                   // echo "your refund is being processed please wait a little bit!!";
                   // echo $bkg['ID']; //reservation id
                    mysqli_query($con,"delete from reservation where ID='".$bkg['ID']."'");
                    echo "<script> alert('you have succesfuly canceled your booking !!');
                    window.location.href='booking_history.php'; 
                    </script>";  
                    exit() ; 
                
                   
                    
                    }
                    
                         
                    }
                    
                    
                    
                    
                    ?>
                      

<?php
                          
                            ?>