<?php
require ("includes/db_info_1705.inc.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Find a Nurse</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
           
            </div>
         
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Nurses at your door</h1>
              <p>Find private duty skilled care that fits your needs
                <br>
                  Contact candidates directly through your account for a fee
                </p>
              <a href="#contact" class="btn btn-appoint">REGISTER</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <h3 id = "taken">Email taken</h3>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact me</h2>
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>LAU<br> Byblos</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>joy.boukaram@lau.edu</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+961 71 897 304</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <form action="signup.php" method="POST">
            <h3 id = "register" class="cnt-ttl">Register</h3>
            
            <div class="space"></div>
            <input class="form-control" type="text" name="firstName" placeholder="first name">
            <br>
            <input class="form-control" type="text" name="lastName" placeholder="last name">
            <br>
            <input class="form-control" type="email" name="email" placeholder="email">
            <br>
            <input class="form-control" type="password" name="password" placeholder="Password">
              <br>
            <select class="form-control" name = "gender">
                <option value = "male">male</option>
                <option value = "female">female</option>
                <option value = "other">other</option>
             </select>
             <br>
           
              <button type="submit" class="btn btn-form">Register</button>
             
          </form>
          <p>Have an account? <br> Login <a href = "login/login.php">here</a></p>
          <br>


          </div>
        </div>
      </div>
     
  </section>
    </div>

  </section>
  






  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Find a nurse focuses on nurses and those wanting to hire nurses to make the lives of our nurses and employers easy and efficient. </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow me</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                
                <li class="bgdark-blue"><a href="https://www.linkedin.com/in/joy-bou-karam-b8121a168/"><i class="fa fa-linkedin"></a></i></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Joy (2018) - All Rights Reserved
            <div class="credits">
              Done by <a href="https://instagram.com/joyboukaram">Joy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
