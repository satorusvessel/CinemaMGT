

<?php include('header2.php');?>
<!DOCTYPE html>
<html >
    <head>
        <title> REGISTRATION FORM</title>
        
        
        <link rel="stylesheet" type="text/css" href="newloginstyele.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
       
     
    </head>
    <body style="background: rgb(27,43,158);
background: linear-gradient(90deg, rgba(27,43,158,1) 0%, rgba(201,23,0,1) 0%, rgba(46,8,237,1) 0%, rgba(186,106,164,1) 74%, rgba(242,242,242,1) 100%);">
        
       
        
        <div class="registration-form"  >
            <h1 style="position:relative ;top:20px;color:white"> SIGN-UP! </h1>
            <form action="insert.php" method="POST">
           
                <p style="color:white">Username:</p>
                <input type="text" name="username" placeholder="user name"  class="form-control" required>
                <p style="color:white">Password:</p>
                <input type="password" name="passwordd" placeholder="password"  class="form-control" required>
                <p style="color:white">Email:</p>
                <input type="email" name="email" placeholder="email"  class="form-control" required>
                <p style="color:white">Phone no:</p>

                <input type="hidden" name="balance" value="300"  class="form-control" required>


                <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="+251">+251</option>
      <option value="+978">+978</option>
      <option value="+979">+979</option>
      <option value="+973">+973</option>
      <option value="+972">+972</option>
      <option value="+974">+974</option>
     </select>
     <input type="phone" name="phone" required> <br>
                <button class="btn btn-info"  type="submit" value="REGISTER" name="submit"> SIGN-UP</button>       
                </form>
        </div>
        
    </body>
</html>