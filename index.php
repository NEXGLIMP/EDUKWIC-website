<?php
     session_start();
?>
<?php
  require_once 'db_conn.php';
  $sql = "SELECT*FROM course_details";
  $all_course_details = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" /> -->
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Edukwic" />
	
	<!-- OG -->
	<meta property="og:title" content="Edukwic" />
	<meta property="og:description" content="Edukwic" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/ek-favicon-removebg.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/ek-favicon-removebg.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Edukwic </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- [if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]
	 -->
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">

	<!-- Font Awesome Link ============================================= -->
	<script src="https://kit.fontawesome.com/1f33143eaf.js" crossorigin="anonymous"></script>

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- icon ============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	<link rel="stylesheet" href="assets/css/main.css">
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->	
<style>
	.glow span{
	font-size: 60;
	
	animation: glow 2s ease-in-out infinite alternate;
}
@keyframes glow {
    from {
      text-shadow: 0 0 20px #5e31a7;
    }
    to {
      text-shadow: 0 0 30px #570be4, 0 0 10px
	}
}


	</style>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <div id="header"></div>
 
<!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
			<div class="container d-flex flex-column align-items-center position-relative pb-5 herotext  text-center" data-aos="zoom-out">
			  <div class="hero-text">
				<h2 class="display-4 glow"
				style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
				IGNITE YOUR POTENTIAL WITH<br> <span style="color: rgb(228,229,231);">E</span><span style="color: rgb(228,229,231);">D</span><span style="color: rgb(228,229,231);">U</span><span style="color: rgb(228,229,231);">K</span><span style="color: rgb(228,229,231);">W</span><span style="color: rgb(228,229,231);">I</span><span style="color:rgb(228, 229, 231)">C</span></h2>			    <p class="lead animate-text"> Empower Your Potential - A Comprehensive Course and Tutorial Hub for Skill Development</p>
			  </div>
			  <div class="d-flex">
				<a href="#about" class="btn-get-started scrollto">Get Started</a>
				<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
			  </div>
			</div>
		</section>
        <!-- Main Slider -->
		<div class="content-block">
            
		<!-- Our Services -->
			<div class="section-area content-inner service-info-bx">
                <div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx card rounded">
								<div class="action-box" style="height: 190px;display:flex;align-items: center;justify-content: center;">
									<img src="assets/images/tamil-gif.gif" class="img-fluid" alt="" style="height: auto;width: 400px;padding-top: 110px;" >
								</div>
								<div class="info-bx text-center">
									<!-- <div class="feature-box-sm radius bg-white">
										<i class="fa fa-bank text-primary"></i>
									</div> -->
									<h4><a href="#">Learn in Tamil</a></h4>
									<a href="courses-details.html" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">				
							<div class="service-bx card rounded">
								<div class="action-box" style="height: 190px;">
									<img src="assets/images/courses-gif.gif" alt="">
								</div>
								<div class="info-bx text-center">
									<!-- <div class="feature-box-sm radius bg-white">
										<i class="fa fa-book text-primary"></i>
									</div> -->
									<h4><a href="#">Access To All Courses</a></h4>
									<a href="#" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">				
							<div class="service-bx card rounded">
								<div class="action-box" style="height: 190px;">
									<img src="assets/images/giphy.gif" alt="">
								</div>
								<div class="info-bx text-center">
									<!-- <div class="feature-box-sm radius bg-white">
										<i class="fa fa-book text-primary"></i>
									</div> -->
									<h4><a href="#">Work On Projects</a></h4>
									<a href="#" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-3 col-md-4 col-sm-12">
							<div class="service-bx m-b0 card rounded">
								<div class="action-box">
									<img src="assets/images/our-services/pic3.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-file-text-o text-primary"></i>
									</div>
									<h4><a href="#">Book Library & Store</a></h4>
									<a href="#" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
            </div>
        <!-- Our Services END -->
			
			<!-- Popular Courses -->
			<div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Popular <span>Courses</span></h2>
							<p>Upgrade your skills with our popular courses—stay ahead, stay empowered!</p>
						</div>
					</div>
					<div class="row">
					<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					<?php
						while($row = mysqli_fetch_assoc($all_course_details)){
					?>
						<div class="item">
							<div class="cours-bx">
								<div class="action-box">
									<img src="<?php echo $row["image_src"] ?>" alt="">
									<a href="<?php echo $row["anchor_tag"] ?>" class="btn rounded-right">Read More</a>
								</div>
								<div class="info-bx text-center">
									<h5><a href="<?php echo $row["anchor_tag"] ?>"><?php echo $row["course_title"] ?></a></h5>
									<span><?php echo $row["course_branch"] ?></span>
								</div>
								<div class="cours-more-info">
									<div class="review">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="row">
										<div class="col-6">
										<p class="text-mute text-nowrap">1h 21min</p>
										</div>
										<div class="col-2">
										<a href="<?php echo $row["video_src"] ?>" class="bi bi-play-circle"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				 </div>
					</div>
				</div>
				<div class="text-center">
					<a href="courses-details.html" class="btn" style="margin-top: 30px; font-size: 17px; border-radius: 7px;">View Courses</a>
				</div>
			</div>
			<!-- <div class="text-center">
				<a href="#" class="btn">View Courses</a>
			</div> -->
			<!-- Popular Courses END -->
			
           

			<!-- Form -->
			<div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center text-white">
							<h2>Online Courses To Learn</h2>
							<h5>Own Your Feature Learning New Skills Online</h5>
							<form class="cours-search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="What do you want to learn today?	">
									<div class="input-group-append">
										<button class="btn" type="submit">Search</button> 
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="mw800 m-auto">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-user"></i><span class="counter">2</span>k+</h3>
									</div>
									<span class="cours-search-text">Over 2 Thousand student</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-book"></i><span class="counter">20</span>+</h3>
									</div>
									<span class="cours-search-text">20+ Courses.</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-layout-list-post"></i><span class="counter">400</span>+</h3>
									</div>
									<span class="cours-search-text">Online Course Videos.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Form END -->
			<!--certificate sesction start-->
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center heading-bx">
							<h2 class="title-head m-b0">Certificate Of Completion</h2>
							<p class="m-b0">Get certified with EDUKWIC's course completion certificate</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 ml-auto container">
							<img class="certificate img-fluid" src="assets/images/ek-certificate-2.PNG" alt="Certificate Image">
						</div>
						<div class="col-sm-6 cert-step">
							<div class="container">
								<div class="list-type5">
									<ol>
										<li><a href="#">Login to Your Account</a></li>
										<li><a href="#">Navigate to Your User Profile</a></li>
										<li><a href="#">Click on Get Certified</a></li>
										<li><a href="#">Select the Course with 80% Completion</a></li>
										<li><a href="#">Click on "Get Certified and Verify Your Information"</a></li>
										<li><a href="#">Download Certificate</a></li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--certificate sesction end-->

			<!-- associated section -->
			<div class="container">
				<p class="text-center" style="font-size:35px;"><strong>Associated with</strong><a href="#"><img src="assets/images/nxg-removed-bg.png" alt="" width="450px"></a></p>
			</div>

			<!-- Testimonials -->
			<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-md-12 text-white heading-bx left">
							<h2 class="title-head text-uppercase">what people <span>say</span></h2>
							<p>Explore our Reviews Section to hear from our thriving community!</p>
						</div>
					</div>
					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						<div class="item">
							<div class="testimonial-bx">
								<!-- <div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic1.jpg" alt="">
								</div> -->
								<div class="testimonial-info">
									<h5 class="name">Manoj Kanna</h5>
									<p>Student</p>
								</div>
								<div class="testimonial-content">
									<p>These courses exceeded my expectations! The content is well-structured, and the interactive elements keep you engaged. The community in the comments section is incredibly supportive, making learning not only informative but also enjoyable.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-bx">
								<!-- <div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic2.jpg" alt="">
								</div> -->
								<div class="testimonial-info">
									<h5 class="name">Pavithiren</h5>
									<p>Student</p>
								</div>
								<div class="testimonial-content">
									<p>I've tried various online courses, but this platform stands out. The courses are comprehensive, the instructors are knowledgeable. I feel more confident in my skills after completing these courses.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-bx">
								<!-- <div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic2.jpg" alt="">
								</div> -->
								<div class="testimonial-info">
									<h5 class="name">Santhosh</h5>
									<p>Student</p>
								</div>
								<div class="testimonial-content">
									<p>The real-world applicability of the courses is what sets them apart. The hands-on tutorials and projects allowed me to immediately implement what I learned. The comments section was a valuable resource for additional tips and clarifications.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <div id="footer"></div>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<!-- Revolution JavaScripts Files -->
<script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="common.js"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
<script>document.addEventListener('contextmenu', event => event.stopPropagation(), true);</script>
</div>
</body>
</html>