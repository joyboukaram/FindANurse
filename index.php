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
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="#testimonial">Testimonial</a></li>
                <li class =""><a href="#register">Register</a></li>
                <li class=""><a href="#contact">Contact</a></li>
                <li class=""><a href="nurses/signup.php">For Nurses</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      
      <div class="container">
        <div class="row">
          <div class="banner-info">
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
 
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p>We provide several services that provide the best offers and help for the people in need with minimal charge and prices.
            <br><br>
          Some of the services are listed to the right: we have nurses that cover all kinds of diseases, all kinds of needs, monitoring, staying with elders, and even caring for minimal diseases</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>Most of the nurses provide a 24-hour service in which they stay at their client's home monitoring them and keeping track of their state and situation.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Emergency Services</h4>
              <p>Nurses are trained to treat all kinds of emergency services to satisfy their clients without the need to treat them in hospital if not necessary</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
              <p>Nurses keep up with their clients and follow their medical records and medicine all through the day and night.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Premium Healthcare</h4>
              <p>All people are treated in the most professional and advanced ways. The nurses are trained to treat all kinds of diseases while keeping their clients satisfied.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Illnesses</h3>
              <p>We have nurses for all kinds of illnesses, starting from the flu to the most deadly disease. Doctors are also available if needed. </p>
              <a href="nursesDoctorsIllnesses.php" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>Some nurses are called for emergency cases to stay with people if left alone, sick, or even at hospital.</p>
              <a class="medi-info-btn" href="emergencyNurses.php">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Working Hours</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>Monday - Friday</td>
                    <td>6.00 a.m. - 8:00 p.m.</td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>6:00 a.m. - 11:00 p.m.</td>
                  </tr>
                  <tr>
                    <td>Sunday</td>
                    <td>6:00 a.m. - 9:00 p.m.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medical <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Get the most suitable nurse with the best prices. It only takes a few clicks of a button and the nurse will be right at your door!</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Choose wisely the nurses you desire because each one is an expert in his/her own field. Because of that, we have implemented a way to help you choose easily and efficiently.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Note</h3>
                <p>This website was implemented to help facilitate your life and relief you from your stress. Nurses are hired just for your needs and wants. Please provide any feedback below</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Team!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/michel.png" style="width:300px; height: 270px;" alt="..." class="team-img">
            <div class="caption">
              <h3>Michel Azzam</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/merhej.png" alt="..." class="team-img" style="width:300px;">
            <div class="caption">
              <h3>Charbel Merhej</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/rim.png" style="width:300px; height: 270px;" alt="..." class="team-img">
            <div class="caption">
              <h3>Rim El Jammal</h3>
              <p>Doctor</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/edgard.png" style="width:300px; height: 270px;" alt="..." class="team-img">
            <div class="caption">
              <h3>Edgard Chammas</h3>
              <p>Doctor</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  <!--testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Patient Reviews</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>I love the way this website is implemented, developed, and made. The style is so pretty, and the nurses are all experts in their fields.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/joe.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Joe<span>Sahel Alma</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Find a Nurse is a perfect place to find the best nurse based on my needs and wants based on different factors that guide me to choose what suits me best</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/cyril.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Cyril<span>Dlebta</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>My all-time favorite website to provide a nurse for my grandmother who
            has gotten so old, which makes her in need of help.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/maria.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Maria<span>Jbeil</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Find a Nurse is a website which provides everyone nurses based on their needs, specifications entered, geographical areas, and a whole range of other criteria.
          <p class="text-right text-primary"><i>— Joy Bou Karam</i></p>
        </div>
        <div class="col-md-2"></div>
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
          <hr class="botm-line">
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
            <input class="form-control type="text" name="firstName" placeholder="first name">
            <br>
            <input class="form-control type="text" name="lastName" placeholder="last name">
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
