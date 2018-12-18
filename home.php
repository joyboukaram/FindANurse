<?php
require 'middlewares/middleware.php';
require "includes/db_info_1705.inc.php";

ob_start();

$id = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Find a Nurse</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">


 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="home.js" defer></script>
  <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
                <li class=""><a href="#service">Features</a></li>
                <li class=""><a href="#nurses">Nurses</a></li>
                <li class=""><a href="#book_div">Book a Nurse</a></li>
                <li class=""><a href="#contact">Your nurses</a></li>
                <li class=""><a href="logout.php">Logout</a></li>
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
              <h1 id = "welcomeUser"> Welcome <span id = "user"> <?=$_SESSION["first_name"]?> </span></h1>
              <p>Find private duty skilled care that fits your needs
                <br>
                  Contact candidates directly through your account for a fee
                </p>

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
          <h2 id = "features">Features</h2>
          <hr class="botm-line">
          <p id = "featuresp">We provide several services that provide the best offers and help for the people in need with minimal charge and prices.
            <br><br>
          Some of the services are listed to the right: we have nurses that cover all kinds of diseases, all kinds of needs, monitoring, staying with elders, and even caring for minimal diseases</p>

        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
            <img src = "img/booking.png">
            </div>
            <div class="icon-info">
            <h4>Booking</h4>
              <p>Browse our nurses’ profiles to check their qualifications, experience, pricing, location, availablity, then book your favorite nurse, all online!</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
             <img src = "img/available.png">
            </div>
            <div class="icon-info">
            <h4>24 Hour Support</h4>
              <p>Our nurses serve you on-demand, and by prebooking. Our staff is always ready to offer 24/7 customer support via phone.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <img src = "img/peace.png">
            </div>
            <div class="icon-info">
              <h4>Peace of Mind</h4>
              <p>Our nurse training programs have been specifically designed to give you confidence that your baby is in safe hands all the time with our nurses.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
            <img src = "img/community.png">
            </div>
            <div class="icon-info">
              <h4>Community</h4>
              <p>Find A Nurse is building a community of parents and caregivers, based on trust, respect, and high quality standards.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
            <img src = "img/trusted.png">
            </div>
            <div class="icon-info">
              <h4>Trusted Nurses</h4>
              <p>All our nurses have passed our rigorous selection process that includes face-to-face interviews, detailed background checks, personality and skill assessment.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
            <img src = "img/smart.png">
            </div>
            <div class="icon-info">
              <h4>Hire Smart</h4>
              <p>Browse through a quality selection of experienced nurses in your neighborhood without the expensive agency fees.</p>
            </div>
          </div>
        </div>

      </div>
  </section>



  <section id="nurses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medical <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Get the most suitable nurse with the best prices. It only takes a few clicks of a button and the nurse will be right at your door!</p>

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
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Nurses!</h2>
          <hr class="botm-line">
        </div>
      
       <?php include 'getusers.php';
$count1 = 0;
while ($count1 < $count) {
    ?>

        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="<?=$arr[$count1]["image"]?>" alt="..." class="team-img">
            <div class="caption">
              <h3><?=$arr[$count1]["name"]?></h3>
              <p>Nurse</p>
              <div class="col-md-5 col-sm-3 col-xs-6">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

              </ul>
            </div>
            <div class="col-md-7 col-sm-9 col-xs-6">
            <a type="button" class="btn btn-info btn-lg medi-info-btn-nurses" data-toggle="modal" data-target="#<?=$arr[$count1]["id"]?>">READ MORE</a>
            </div>
            </div>
          </div>
        </div>

              <div id="<?=$arr[$count1]["id"]?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?=$arr[$count1]["name"]?></h4>
      </div>
      <div class="modal-body">
        <img id = "modal_image" src="<?=$arr[$count1]["image"]?>" alt="..." class="team-img">
        <p><span class = "modal_element">Name: </span><span class = "php"><?=$arr[$count1]["name"]?></span></p>
        <p ><span class = "modal_element">Age: </span><span class = "php"><?=$arr[$count1]["age"]?><span></p>
        <p ><span class = "modal_element">Date of birth: </span><span class = "php"><?=$arr[$count1]["date_of_birth"]?><span></p>
        <p ><span class = "modal_element">Email: </span><span class = "php"><?=$arr[$count1]["email"]?><span></p>
        <p ><span class = "modal_element">Phone: </span><span class = "php"><?=$arr[$count1]["phone"]?><span></p>

        <p ><span class = "modal_element">Description: </span><span class = "php"><?=$arr[$count1]["description"]?><span></p>
        <p ><span class = "modal_element">Years of Experience: </span><span class = "php"><?=$arr[$count1]["years_of_experience"]?><span></p>
        <p ><span class = "modal_element">Location: </span><span class = "php"><?=$arr[$count1]["Location"]?><span></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      <?php
$count1++;
}
?>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="book_div" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Book a nurse</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-12 col-sm-12">


            <form id = "book_nurse" action="book_nurse.php" method="POST">
              <span class = "inputclass">Appointment:</span>
              <br><br>
              <input class = "inputbook" id = "date" type="date" name="bookday" min="2018-01-01" required>
              <br>
              <select class = "select_nurse" name = "name" required>

                 <?php
$count1 = 0;
while ($count1 < $count) {
    
    ?>
                    <option><?=$arr[$count1]["username"]?></option>
                    <?php
$count1++;
}
?>
              </select>
              <br><br><br>
              <input id = "book_submit" type="submit" id="submit" name="Submit" class="submitBnt" value="Book Nurse">
            </form>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2 class="ser-title">Contact me</h2>
          <hr class="botm-line">

          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>LAU<br> Byblos</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>joy.boukaram@lau.edu</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+961 71 897 304</p>
        </div>
        <div class="col-md-9 col-sm-9 marb20">

        <h2 id = "title_nurses">Your nurses</h2>
          <hr class="botm-line">

          <?php include 'getbookednurses.php';

if ($count != 0) {
    while ($stmt->fetch()) {
        ?>
            <p id = "nurse_you_booked"><?=$nurse_name?> <?=$bookday?></p>
        <?php
}
} else {
    ?>
            <p id = "nurse_you_booked">You have booked no nurses</p>




            
          <?php
}
?>
       <div id = "delete_nurse_div">

       <hr class="botm-line" id = "botm-line-color">

       <p id = "delete_nurse">Delete nurse</p>
      <p> The dates below respectively refer to the above nurses</p><br>
      <form method = "POST" action = "delete_nurse.php">
        <select class = "select_nurse" name="name"> 
        <?php include 'deletenurses.php';

          if ($count != 0) {
              while ($stmt->fetch()) {

                  ?>
                      <option><?=$bookday?></option>
                  <?php
          }
          } else {
              ?>
                      <p id = "nurse_you_booked">You have booked no nurses</p>
                    <?php
          }
          ?>

      </select>

 <input  type="submit"  name="Submit" class="submitBnt" value="Unbook Nurse" style = "color: black; margin-left: 5%; padding-left: 1%; padding-right: 1%; padding-top: 0.5%; padding-bottom: 0.5%">
      </form>
          </div>
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
                <li><a href="#service"><i class="fa fa-circle"></i>Features</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Contact</a></li>
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
