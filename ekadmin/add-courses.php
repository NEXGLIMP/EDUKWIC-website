<?php
include('../middleware/adminMiddleware.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Edukwic" />
	
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1f33143eaf.js" crossorigin="anonymous"></script>
	<!-- OG -->
	<meta property="og:title" content="Edukwic" />
	<meta property="og:description" content="Edukwic" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/ek-favicon-removebg.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Edukwic</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
    <link rel="stylesheet" href="courses.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="#" class="ttr-logo">
						<img alt="" class="ttr-logo-mobile" src="assets/images/edukwic-logo-removebg.png" width="120" height="auto">
						<img alt="" class="ttr-logo-desktop" src="assets/images/edukwic-logo-removebg.png" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
                    <li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">COURSES</a>
					</li>
					<!-- <li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li> -->
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                        <li>
                            <a href="../index.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                        </li>
					<!-- </li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">9 New</span>
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li> -->
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/pic3.jpg" width="50" height="50"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="#">My profile</a></li>
								<!-- <li><a href="list-view-calendar.html">Activity</a></li> -->
								<!-- <li><a href="mailbox.html">Messages</a></li> -->
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>
					</li>
					<!-- <li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							<a href="#">
								<i class="fa fa-music"></i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play"></i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="fa fa-smile-o"></i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="fa fa-picture-o"></i>
								<span>Pictures</span>
							</a>
						</div>
					</li> -->
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>


	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><h6>ADMIN DASHBOARD</h6></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="index.php" class="ttr-material-button">
							<!-- <span class="ttr-icon"><i class="ti-home"></i></span> -->
		                	<span class="ttr-label">Dashboard</span>
		                </a>
		            </li>
					<li>
						<a href="users-details.php" class="ttr-material-button">
							<!-- <span class="ttr-icon"><i class="ti-book"></i></span> -->
		                	<span class="ttr-label">Users Details</span>
		                </a>
		            </li>
					<li>
						<a href="membership-admin.php" class="ttr-material-button">
							<!-- <span class="ttr-icon"><i class="fa-light fa-id-card-clip"></i></span> -->
		                	<span class="ttr-label">Membership Details</span>
		                	<!-- <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span> -->
		                </a>		            
		            </li>
					<li>
						<a href="add-courses.php" class="ttr-material-button">
							<!-- <span class="ttr-icon"><i class="ti-calendar"></i></span> -->
		                	<span class="ttr-label">Add Courses</span>
		                	<!-- <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span> -->
		                </a>
		            </li>
					<li>
						<a href="update-courses.php" class="ttr-material-button">
							<!-- <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span> -->
		                	<span class="ttr-label">Update Courses</span>
		                </a>
		            </li>
                    <li>
						<a href="delete-courses.php" class="ttr-material-button">
							<!-- <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span> -->
		                	<span class="ttr-label">Delete Courses</span>
		                </a>
		            </li>
                    
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Admin</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Course</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>ADD COURSES</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post" action="#">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1.Course Card</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Enter Course ID:</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="courseid">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Image:</label>
										<div class="col-sm-7">
											<input class="form-control" type="file">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="coursename">
											<!-- <span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span> -->
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Category</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="coursecat">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Duration</label>
										<div class="col-sm-7">
											<input class="form-control" type="number" name="coursecat">
										</div>
									</div>
                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label">Total Lectures</label>
										<div class="col-sm-7">
											<input class="form-control" type="number" name="coursecat">
										</div>
									</div>
									<div class="seperator"></div>
									
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. Course Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Overview</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="c-overview">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Description</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="c-desc">
										</div>
									</div>
                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label">Lectures</label>
										<div class="col-sm-7">
											<input class="form-control" type="number" name="c-overview">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Duration</label>
										<div class="col-sm-7">
											<input class="form-control" type="number" name="c-desc">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Quizes</label>
										<div class="col-sm-7">
											<input class="form-control" type="number" name="C-quiz">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Skill Level</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="c-skill">
										</div>
									</div>
                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label">Language</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="c-lang">
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
								</div>
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3 class="m-form__section">3. Syllabus</h3>
										</div>
									</div>
									<div id="moduleContainer">
										<div class="module">
									<div class="form-group row" >
										<label class="col-sm-2 col-form-label">MODULE</label>
										<div class="col-sm-7">
											<input class="form-control" name="module_name[]" type="text" >
										</div>
									</div>

									<div class="form-group row" >
										<label class="col-sm-2 col-form-label">MODULE DURATION</label>
										<div class="col-sm-7">
											<input class="form-control" name="module_duration[]" type="text" >
										</div>
									</div>
                                    

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">SECTION</label>
										<div class="col-sm-7">
											<input class="form-control" name="module_descriptions[0][]" type="text" >
											<!-- <input class="form-control" name="section_name[0][]" type="text" > -->

										</div>
										<input type="button" class="btn" onclick="addDescription(0)" value="ADD SECTION">
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">SECTION DURATION</label>
										<div class="col-sm-7">
											<!-- <input class="form-control" name="module_descriptions[0][]" type="text" > -->
											<input class="form-control" name="section_time[0][]" type="text" >

										</div>
										<!-- <input type="button" class="btn" onclick="addDescription(0)" value="ADD SECTION"> -->
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">SECTION LINK</label>
										<div class="col-sm-7">
											<input class="form-control" name="section_link[0][]" type="text" >

										</div>
									</div>
                                    
									<!-- <div class="form-group row">
										<label class="col-sm-2 col-form-label">SECTION DURATION</label>
										<div class="col-sm-7">
											<input class="form-control" name="module_descriptions[0][]" type="text" >
										</div>
										<input type="button" class="btn" onclick="addDescription(0)" value="ADD SECTION">
									</div> -->
									
										</div>
									</div>
								<!-- </div> -->
								<div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-7">
												<input type="button" class="btn mt-3" onclick="addModule()" value="ADD MODULE">
												<!-- <button type="reset" class="btn-secondry">Cancel</button> -->
											</div>
										</div>
									</div>
								</div>
							</form>
							<div class="add-course-btn mt-3"style="text-align: center;">
								<button class="btn" type="submit" >ADD COURSE</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="course-modules.js"></script>
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
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>