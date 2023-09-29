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

@media (min-width: 550px) and (max-width: 750px) {
  html,
  body,
  .intro {
    height: 750px;
  }
}

@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  .intro {
    height: 750px;
  }
}

.mask-custom {
  backdrop-filter: blur(15px);
  background-color: rgba(255,255,255,.2);
  border-radius: 3em;
  border: 2px solid rgba(255,255,255,.1);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}</style>
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">

<link rel="stylesheet" href="hover212.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
        <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
       
     
    </head>
    <body style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
  
<section class="intro">
  <div class="bg-image h-100" style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
    <div class="mask d-flex align-items-center h-100">
      <div class="container" style="background: rgb(133,13,213);
background: linear-gradient(90deg, rgba(133,13,213,1) 10%, rgba(253,70,29,1) 48%, rgba(252,167,69,1) 65%);">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 col-xl-6">
            <div class="card mask-custom">
              <div class="card-body p-5 text-white">

                <div class="my-4">

                  <h2 class="text-center mb-5" style="color:black">REGISTER FORM</h2>

                  <form action="insert.php" method="POST">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                      <div class="col-12 col-md-6 mb-4">
                        <div class="form-outline form-white">
                          <input type="text" id="form3Example1" class="form-control form-control-lg" name="username" placeholder="username" required />
                         
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-4">
                        <div class="form-outline form-white">
                          <input type="text" id="form3Example2" class="form-control form-control-lg" name="email" placeholder="email" required/>
                          
                        </div>
                      </div>
                    </div>
                    <div class="form-outline form-white mb-4">
                    <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="+251">+251</option>
      <option value="+978">+978</option>
      <option value="+979">+979</option>
      <option value="+973">+973</option>
      <option value="+972">+972</option>
      <option value="+974">+974</option>
     </select>
     </div>
                    <!-- Email input -->
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="form3Example3" class="form-control form-control-lg"  name="phone" placeholder="phone number" required />
                    
                    </div>

                    <!-- Password input -->
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="form3Example4" class="form-control form-control-lg" name="passwordd"  placeholder="password" required />
                      
                    </div>
                    <input type="hidden" name="balance" value="300"  class="form-control" required>
          

                    <!-- Submit button -->
                    <button class="btn btn-primary btn-lg btn-rounded gradient-custom text-body px-5" name="submit" type="submit">sign up</button>

                    <!-- Register buttons -->
                    
                  </form>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

<footer>
        <div class="row" style="height:50px">
            <div class="col-md-6">
                <p style="color:white">Copyright &copy; 2021 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-end" >
                <a href="#" class="text-dar"style="color:white">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dar" style="color:white">Privacy Policy</a>
            </div>
        </div>
    </footer>
</body>
</html>