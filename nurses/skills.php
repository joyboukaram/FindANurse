<?php
require('../middlewares/middleware.php');
require ("../includes/db_info_1705.inc.php");

ob_start();

$id = $_SESSION["id"];

$stmt_id = $mysqli -> prepare ("Select id, firstName FROM User WHERE id = ?");
$stmt_id -> bind_param('i', $id);
$stmt_id -> execute();
$stmt_id -> store_result();
$stmt_id -> bind_result($id, $firstName); //takes the ones from the query in order and we name them as we want. l mhem ykouno bel dor.


 // while($stmt_id->fetch()){ IF FETCHING MANY THINGS
  
 // }

$stmt_id->fetch() //if fetching only one thing which is the first name here only
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Skills</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/skills.css">
<link rel="stylesheet" type="text/css" href="styles/skills_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">Smith<span>.</span>CV</div>
			<div class="main_nav d-flex flex-row align-items-end justify-content-start">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="about.html">About</a></li>
					<li class="active"><a href="skills.html">Skills</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="experience.html">Experience</a></li>
					<li><a href="education.html">Education</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<div class="header_button ml-auto">
					<a href="#">Available for freelance work</a>
					<div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
				</div>
			</div>
			<!-- Menu -->
	<div class="menu">
		<div class="menu_content d-flex flex-row align-items-start justify-content-end">
			<div class="hamburger ml-auto">menu</div>
			<div class="menu_nav text-right">
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="skills.html">Skills</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="experience.html">Experience</a></li>
					<li><a href="education.html">Education</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
		</div>
	</header>

	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->
			<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
				<div>
					<div class="general_info_image">
						<div class="background_image" style="background-image:url(images/smith.jpg)"></div>
						<div class="header_button_2">
							<a href="#">Available for freelance work</a>
							<div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="general_info_content">
					<div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
						<div class="general_info_title">General Information</div>
						<ul class="general_info_list">
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_1.png" alt=""></div>
								<div class="general_info_text">Name: <span>Jeremy Smith</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
								<div class="general_info_text">Location: <span>London UK</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_2.png" alt=""></div>
								<div class="general_info_text">Date of Birth: <span>August 25, 1991</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_3.png" alt=""></div>
								<div class="general_info_text"><a href="mailto:contact@linque.com?subject=Job_Inquiry">contactme@templatename.com</a></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_4.png" alt=""></div>
								<div class="general_info_text">+76 6524 567862 763</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_5.png" alt=""></div>
								<div class="general_info_text"><a href="mailto:contact@linque.com">www.mytemplatename.com</a></div>
							</li>
						</ul>

						<!-- Social -->
						<div class="social_container">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Content -->

			<div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">What I am good at</div>
					<div class="main_title">My Skills</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

					<!-- Skills Content -->
					<div class="skills">
						<div class="skills_text">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xl-6">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit.</p>
									</div>
									<div class="col-xl-6">
										<p>Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Progress Bars -->
						<div class="progress_bars">
							<div class="container-fluid">
								<div class="row">

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Developement</div>
											<div id="skill_1_pbar" class="skill_bars" data-perc="0.70" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Developement</div>
											<div id="skill_2_pbar" class="skill_bars" data-perc="0.60" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Developement</div>
											<div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Developement</div>
											<div id="skill_4_pbar" class="skill_bars" data-perc="1.0" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Developement</div>
											<div id="skill_5_pbar" class="skill_bars" data-perc="0.90" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Developement</div>
											<div id="skill_6_pbar" class="skill_bars" data-perc="1.0" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Milestones -->

						<div class="milestones clearfix">
							
							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_6.png" alt=""></div>
								<div class="milestone_counter" data-end-value="14">0</div>
								<div class="milestone_text">Years of Experience</div>
							</div>

							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_7.png" alt=""></div>
								<div class="milestone_counter" data-end-value="1000" data-sign-before="+">0</div>
								<div class="milestone_text">Happy Clients</div>
							</div>

							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_8.png" alt=""></div>
								<div class="milestone_counter" data-end-value="14" data-sign-after="k">0</div>
								<div class="milestone_text">Followers on FB</div>
							</div>

							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_9.png" alt=""></div>
								<div class="milestone_counter" data-end-value="732">0</div>
								<div class="milestone_text">Finished Projects</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div align='center'>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.js"></script>
<script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/skills.js"></script>
</body>
</html>