<?php require_once 'connect.php';


$sql = "SELECT * FROM history" ;
$result = $con->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
        <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
               padding-top: 100px;
               font-size:25px;
               padding-bottom: 100px;
               background: #f5fce3;
               background: -webkit-linear-gradient(to right, #f5fce3, #e1e6d6 );
               background: linear-gradient(to right, #f5fce3, #e1e6d6 );
              }
        .container{      
            padding-top:5px;
            display: block;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 60%; 
        }
        td,th { border: 1px solid #ddd; padding: 8px;}
        #Table{ font-family: Arial,Helvetica, sans-serif; border-collapse: collapse; margin-bottom: 15px;width: 1000px; }
        #Table tr:nth-child(even){ background-color: #d2d3d4; }
        #Table tr:nth-child(odd){ background-color: #dee2e3; }
        #Table tr:hover{ background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(32,190,178,1) 48%, rgba(252,167,69,1) 79%); }
        #Table th { padding-top: 12px; padding-bottom: 12px; text-align:left; background-color: #608fb3; color:white; }
        footer {
            background-color: #e8d7a2;
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
            overflow: hidden;
          
        }
    </style>
</head>

<body style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(32,190,178,1) 48%, rgba(252,167,69,1) 79%);">
    
  <!-- navbar -->
 
	<div class="container">
        <h2 style="text-align: center">Transaction History</h2>

       <br>
       <div>
    <table id = "Table">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Payer</th>
                <th>Payer Account</th>
               
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        
        <?php

    while($row = $result->fetch_assoc()) { 
  ?> 
 <tr>
        <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['payer']; ?></td>
        <td><?php echo $row['payerAcc']; ?></td>
        
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['time']; ?></td>

     
        </tr>

        <a type="button" class="btn btn-warning" href="adminhome.php"  style="position:absolute;left:700px;top:1240px" >back to dashboard</a>
 <?php
    }
  
$con->close();
?> 
</    
</table>
    </div>

</div>

<body>

</html>
