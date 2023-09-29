<!-- 
MADE BY SWATI TRIPATHI

THIS PAGE IS FOR TRANSACTION OF MONEY FROM ONE BANK ACCOUNT TO ANOTHER.
ON THIS PAGE,
user has to enter the account no of payer, payee and amount that needs to be transferred. 
Then click proceed to confirm transaction. If the transfer is successful then user will be shown details
of the two account else they will be shown errors. 
-->
<?php require_once 'connect.php';

 $result =mysqli_query($con,"SELECT * FROM seat WHERE ID='" . $_GET['ID'] ."'");
 $row= mysqli_fetch_array($result); ?>

<!--HTML CODE STARTS -->
<html>

<head> 
    <title>Transaction Page</title>
    <style>
    body {
               padding-top: 0px;
               font-size:35px;
               background: #f5fce3;
               background: -webkit-linear-gradient(to right, #f5fce3, #e1e6d6 );
               background: linear-gradient(to right, #f5fce3,#e1e6d6 );
        }
    .transferMoney{
        color:black;
        background: #91c1c9;
        background: -webkit-linear-gradient(to bottom,  #91c1c9, #5e9da8 );
        background: linear-gradient(to bottom, #91c1c9, #3a5f66);
        padding: 150px;
        position:fixed;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
    }
 
    </style>   
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
       
    </script>
      
     
</head>

<!-- BODY-->
<body>
<!-- INCLUDING NAVBAR-->
<?php include('header.php'); ?>

<!-- Creating Form to collect information related to do transaction-->
<div class = 'transferMoney'>
    <h1>PAYMENT</h1>
    <!-- Form's action attribute points to this page only-->
    <!-- Note: To redirect page to samee php write "php echo $_SERVER['PHP_SELF'];" in action attribute-->
    <form name="myForm" action="resultpage.php"  onsubmit="return validateForm()" method="post">
    <!-- To structurise form it is put in a table--onsubmit="return validateForm()"-->
        <table id="table1">
        <!-- ROW 1 : PAYER ACCOUNT ID IS ASKED-->
        <tr>
            <td>Payer Account email</td>
            <td><input type="hidden" name="payerID" value="<?php echo $_SESSION["email"] ?>" min=100 required><td>
        </tr>
        <!-- ROW 2 : PAYEE ACCOUNT ID IS ASKED-->
        <tr>
            
            <td><input type="hidden" name="payeeID" min=100 value="admin" required ><td>
        </tr>
        <!-- ROW 3 : AMOUNT TO BE TRANSFERRED IS ASKED-->
        <tr>
            <td>Amount (in Birr)  <?php echo $row['seat_number'] ?></td>
            <td> <input type="hidden" name="amount" value="<?php echo $row['seat_number'] ?>" required><td> 
        </tr>
        <!-- ROW 4 : BUTTON TO ASK TO CONFIRM TRANSACTION-->
        <tr>
            <td><input type= "hidden" name= "form_submitted" value="1"></td>
            <td> <input type="submit" value="PROCEED"><td>
        </tr>
       
        </table>
    </form>
</div>
 <!-- FORM / TABLE ENDS HERE WITH DIV TAG-->
 
</body>
</html>
<!--HTML CODE ENDS HERE-->
<!--MADE BY SWATI TRIPATHI-->
