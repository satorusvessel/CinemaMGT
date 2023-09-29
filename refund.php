<?php
session_start();
include('connect.php');
//$result =mysqli_query($con,"SELECT * FROM seat WHERE ID='" . $_GET['ID'] ."'");
//$row= mysqli_fetch_array($result);


$sql="SELECT sno,amount FROM history order by sno desc limit 1 ";
		
		
	$result=$con->query($sql);
	if($result->num_rows>0) {
          while($row=$result->fetch_assoc()){
         // echo $row['amount'] ;
          echo "reversing your payment, please wait a little bit...";
        
$AMOUNT= $row['amount'];


$sql = "Select * from register where email='" .$_SESSION['email']."'";       
if($result = $con->query($sql)){            
     $row1 = $result->fetch_array(); 
      //row1 contains payer details
          /*   echo "<tr> 
                  <td> Payer </td>
                  <td>".$row1['email']."</td>
                  <td>".$row1['username']."</td>
                  <td>".$row1['phone']."</td>
                 
                  </tr>";     */                    
             $PayerCurrentBalance = $row1['balance'];            
  }
 
 
  $PayerCurrentBalance += $AMOUNT;

  // echo $PayerCurrentBalance;

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


echo "<script> alert('your refund is being processed press ok to continue!!');
window.location.href='deletereserve.php';
</script>";  
exit() ; 

}

     
}




?>