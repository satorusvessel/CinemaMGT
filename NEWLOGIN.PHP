<?php include('header2.php');?>
<!DOCTYPE html>
<html >
    <head>
        <title> REGISTRATION FORM</title>
        <style> html,
body,
.intro {
  height: 100%;
}

@media (min-width: 560px) and (max-width: 750px) {
  html,
  body,
  .intro {
    height: 830px;
  }
}

@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  .intro {
    height: 830px;
  }
}</style>
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="divstylee.css">
<link rel="stylesheet" href="hover22.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
        <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
       
     
    </head>
    <body style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">

<form action="select.php" method="POST">
<section class="intro">
  <div class="mask d-flex align-items-center h-100" style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
    <div class="container" style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="my-md-5 pb-5">

                <h1 class="fw-bold mb-0">WELCOME BACK CUSTOMER!</h1>

                <i class="fas fa-user-astronaut fa-3x my-5"></i>

                <div class="form-outline mb-4">
              
                  <input type="email" id="typeEmail" name="email" class="form-control form-control-lg" placeholder="email" required />
                  
                </div>

                <div class="form-outline mb-5">
              
                  <input type="password" id="typePassword" name="password" class="form-control form-control-lg" placeholder="password" required />
             
                </div>

                <button class="btn btn-primary btn-lg btn-rounded gradient-custom text-body px-5" type="submit">Login</button>

              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="NEWREGISTER.PHP" class="text-body fw-bold">Sign Up</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>