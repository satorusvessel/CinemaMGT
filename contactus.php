

<?php include 'header2.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fluid Layout</title>
<link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">

        <link href="assets/css/landing-page.css" rel="stylesheet"/>

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>



<script src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
<style> 
@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);
.contact2 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
	padding: 60px 0;
  margin-bottom: 170px;
  background-position: center top;
}

.contact2 h1,
.contact2 h2,
.contact2 h3,
.contact2 h4,
.contact2 h5,
.contact2 h6 {
  color: #3e4555;
}

.contact2 .font-weight-medium {
  font-weight: 500;
}

.contact2 .subtitle {
  color: #8d97ad;
  line-height: 24px;
}

.contact2 .bg-image {
  background-size: cover;
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.contact2 .card.card-shadow {
    -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
}

.contact2 .detail-box .round-social {
  margin-top: 100px;
}

.contact2 .round-social a {
  background: transparent;
  margin: 0 7px;
  padding: 11px 12px;
}

.contact2 .contact-container .links a {
  color: #8d97ad;
}

.contact2 .contact-container {
  position: relative;
  top: 200px;
}

.contact2 .btn-danger-gradiant {
  background: #ff4d7e;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
  background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
}

 .contact2 .btn-danger-gradiant:hover {
  background: #ff6a5b;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
  background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
}
</style>



</head>
<body>


<div class="contact2" style="background-image:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/map.jpg)" id="contact">
  <div class="container">
    <div class="row contact-container">
      <div class="col-lg-12">
        <div class="card card-shadow border-0 mb-4">
          <div class="row">
            <div class="col-lg-8">
              <div class="contact-box p-4">
                <h4 class="title">Contact Us</h4>
                <form action=" comment.php" method="POST">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" name="name" placeholder="name" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" name="email" placeholder="email" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" name="phone" placeholder="phone" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" name="location" placeholder="location" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mt-3">
                        <input class="form-control" type="text" name="message" placeholder="message" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <button type="submit" name="submit" class="btn btn-danger-gradiant mt-3 mb-3 text-white border-0 py-2 px-3"><span> SUBMIT NOW <i class="ti-arrow-right"></i></span></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 bg-image" style="background-image:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/2.jpg)">
              <div class="detail-box p-4">
                <h5 class="text-white font-weight-light mb-3" style="font-weight:bold">ADDRESS</h5>
                <p class="text-white op-7">TECHNO CAMPUS .
                  <br> Hawassa</p>
                <h5 class="text-white font-weight-light mb-3 mt-4" style="font-weight:bold">CALL US</h5>
                <p class="text-white op-10" >+2519-40-16-77-85 
                  <br> 630 446 8851</p>
                <div class="round-social light">
                  <a href="#" class="ml-0 text-decoration-none text-white border border-white rounded-circle"><i class="icon-social-facebook"></i></a>
                  <a href="#" class="text-decoration-none text-white border border-white rounded-circle"><i class="icon-social-twitter"></i></a>
                  <a href="#" class="text-decoration-none text-white border border-white rounded-circle"><i class="icon-social-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple">
                        <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2022 <a href="http://www.creative-tim.com">DANY TEAM</a>
                    </div>
                </div>
            </footer>
</body>
</html>