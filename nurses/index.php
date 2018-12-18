<?php
require('../middlewares/middleware.php');
require ("../includes/db_info_1705.inc.php");

ob_start();

$id = $_SESSION["id"];
include 'getprofile.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Find a Nurse</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" href="css/jquery.datetimepicker.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div id="bg-color-nurse">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a> -->
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <form action="../logout.php" method="POST">
                <ul class="nav navbar-nav">

                  <li class="active"><a href="#banner">Home</a></li>
                  <li class=""><a href="#service">Profile</a></li>
                  <li class=""><a href="#nurses">Nurses</a></li>
                  <input class="" id="logout" type="submit" value="Logout">
                </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-text text-center">
              <h1 id="welcomeUser"> Welcome <span id="user">
                  <?=$arr[0]["name"]?> </span></h1>

              <p>
                <?=$arr[0]["description"]?>
                <br><br><br>
                Booked by clients directly through this website
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


      <h2 id="features">Profile</h2>
      <hr class="botm-line">
      <div class="col-md-4 col-sm-4">
        <div class="service-info">
          <div class="icon">
            <img id="profile_pic" src="../<?=$arr[0]["image"]?>?>">
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="service-info">

          <div class="icon-info">
            <h4 class="h4">Contact</h4>
            <p class="profile" id="email">
              <?=$arr[0]["email"]?>
            </p>
            <p class="profile">Call:
              <?=$arr[0]["phone"]?>
            </p>
          </div>
        </div>
        <div class="service-info">
          <div class="icon">
            <img id="community" src="../img/community.png">
          </div>
          <div class="icon-info">
            <h4>Date of Birth</h4>
            <p class="profile">
              <?=$arr[0]["date_of_birth"]?>, Age
              <?=$arr[0]["age"]?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="service-info">
          <div class="icon-info">
            <h4 class="h4">Location</h4>
            <p class="profile">
              <?=$arr[0]["Location"]?>
            </p>
          </div>
        </div>
        <div class="service-info">
          <div class="icon">
            <img class="smart" src="../img/smart.png">
          </div>
          <div class="icon-info">
            <h4>Years of Experience</h4>
            <p class="profile">
              <?=$arr[0]["years_of_experience"]?> years</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">
              <?=$name?>
            </h4>
          </div>
          <div class="modal-body">
          
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
              <h3>Your Clients</h3>
              <form method="GET" action="getbookers.php">
                <?php include 'getbookers.php';
              if ($count != 0) {
                  while ($stmt->fetch()) {
                      ?>
                <p id="bookers">
                 <span id = "userfirstlast"> 
                  <?=$user_firstName?>
                  <?=$user_lastName?> 
                </span>
                  (<?=$bookday?>)
                </p>
                <?php
              }
              } else {
                  ?>
                <p>Your clients will appear here</p>
                <p>You have no clients yet</p>
                <p>You wil be able to check that you have completed your job assigned to you by your client after
                  getting booked and after getting your shift done.</p>

                <?php
              }
              ?>
            </div>
          </div>
          </form>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Earnings</h3>
              <p>1-Month Bundle</p>
              <p>Starting at
                $6/hour<br><br>
                <u><b>4-Hour Shift</b></u><br>
                Preparing and Cleaning Bottles -
                Bottle feeding and Burping -
                Bathing and Diaper Changing</p>

            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Job Done</h3>
              <form method="POST" action="done_work.php">
                <select class="select_nurse" name="name">
                  <?php include 'donework.php';

                    if ($count != 0) {
                        while ($stmt->fetch()) {

                            ?>
                                      <option>
                                      <?=$bookday?>
                                    </option>
                                      <?php
                    }
                    } else {
                        ?>
                  <p id="nurse_you_booked">You have no clients</p>
                  <?php
                  }
                  ?>

                </select>

                <input id="deleteuser" type="submit" name="Submit" class="submitBnt" value="Done Work!!">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="nurses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medical <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Get the most suitable nurse with the best prices. It only takes a few clicks of a
              button and the nurse will be right at your door!</p>

          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Choose wisely the nurses you desire because each one is an expert in his/her own field. Because of
                  that, we have implemented a way to help you choose easily and efficiently.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Note</h3>
                <p>This website was implemented to help facilitate your life and relief you from your stress. Nurses
                  are hired just for your needs and wants. Please provide any feedback below</p>
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
          <h2 class="ser-title">Meet Our Nurses!</h2>
          <hr class="botm-line">
        </div>

        <?php include '../getusers.php';
       $count1 = 0; 
       while ($count1 < $count){
       ?>

        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="../<?=$arr[$count1]["image"]?>" alt="..." class="team-img">
            <div class="caption">
              <h3>
                <?=$arr[$count1]["name"]?>
              </h3>
              <p>Nurse</p>
              <div class="col-md-5 col-sm-3 col-xs-6">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                </ul>
              </div>
              <div class="col-md-7 col-sm-9 col-xs-6">
               
              </div>
            </div>
          </div>
        </div>

        <div id="<?=$arr[$count1][" id"]?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                  <?=$arr[$count1]["name"]?>
                </h4>
              </div>
              <div class="modal-body">
                <img id="modal_image" src="<?=$arr[$count1]["image"]?>" alt="..." class="team-img">
                <p><span class="modal_element">Name: </span><span class="php">
                    <?=$arr[$count1]["name"]?></span></p>
                <p><span class="modal_element">Age: </span><span class="php">
                    <?=$arr[$count1]["age"]?><span></p>
                <p><span class="modal_element">Date of birth: </span><span class="php">
                    <?=$arr[$count1]["date_of_birth"]?><span></p>
                <p><span class="modal_element">Email: </span><span class="php">
                    <?=$arr[$count1]["email"]?><span></p>
                <p><span class="modal_element">Phone: </span><span class="php">
                    <?=$arr[$count1]["phone"]?><span></p>

                <p><span class="modal_element">Description: </span><span class="php">
                    <?=$arr[$count1]["description"]?><span></p>
                <p><span class="modal_element">Years of Experience: </span><span class="php">
                    <?=$arr[$count1]["years_of_experience"]?><span></p>
                <p><span class="modal_element">Location: </span><span class="php">
                    <?=$arr[$count1]["Location"]?><span></p>

                <button id="book">Book</button>

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
  </div>



  </section>


  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Find a nurse focuses on nurses and those wanting to hire nurses to make the lives of our nurses and
                employers easy and efficient. </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Contact me</h4>
            </div>
            <div class="info-sec" id="contact_me">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>LAU<br> Byblos</p>
              <div class="space"></div>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>joy.boukaram@lau.edu</p>
              <div class="space"></div>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+961 71 897 304</p>

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


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>
  <script src="../contactform/contactform.js"></script>
  <script src="../home.js"></script>


</body>

</html>