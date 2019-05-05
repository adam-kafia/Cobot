<?php

// Always start this first
session_start();
include "core/config.php";
if ( isset( $_SESSION['id'] ) ) {
    // Grab user data from the database using the user_id
	// Let them access the "logged in only" pages
	header('Location: http://localhost:1234/views/index.php');
}
if ( ! empty( $_POST ) )
 {
	if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) 
	{
        // Getting submitted user data from database
        $db = config::getConnexion();
        $stmt = $db->prepare("SELECT * FROM client WHERE id = :username");
        $stmt->bindValue(':username', $_POST['username']);
        $r=$stmt->execute();
        $result = $stmt->fetchAll();
    		
    	// Verify user password and set $_SESSION
		if ( $_POST['password'] == $result[0]['pwd']  ) 
		{
			$_SESSION['id'] = $result[0]['id'];
			header('Location: http://localhost:1234/views/index.php');
		}
		else 
		{
		echo '<div class="alert alert-danger" role="alert">
		Something is wrong!
	  </div>';
		}
    }
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- FONTAWESOME 5 -->
		<link rel="stylesheet" href="fonts/font-awesome-5/css/fontawesome-all.min.css">

	    <!-- BOOTSTRAP -->
	    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

	    <!-- owl-carousel -->
	    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
	    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.min.css">

	    <!-- ANIMATE -->
	    <link rel="stylesheet" href="css/animate.css">

	    <!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/datepicker.min.css">
		
	    <!-- SLIDER REVOLUTION -->
        <link rel="stylesheet" type="text/css" href="vendor/revolution-slider/css/layers.css">
        <link rel="stylesheet" type="text/css" href="vendor/revolution-slider/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="vendor/revolution-slider/css/settings.css">

        <!-- SIDENAV MOBILE -->
        <link rel="stylesheet" href="vendor/hcmobilenav/demo.css">

        <!-- JQUERY TIME PICKER -->
        <link rel="stylesheet" href="vendor/jquery-timepicker-master/jquery.timepicker.css">

		<!-- FAVICON -->
        <!-- <link rel="shortcut icon" href="favicon.png"> -->

	    <!-- STYLE CSS -->
	    <link rel="stylesheet" href="css/style.css" />
	</head>
	
	<body class="preload">

		<!-- PAGE LOADER -->
		<div class="images-preloader">
		    <div id="preloader" class="rectangle-bounce">
		        <span></span>
		        <span></span>
		        <span></span>
		        <span></span>
		        <span></span>
		    </div>
		</div>
		
		<header>
			<!-- HEADER ON DESKTOP -->
<!-- HEADER ON DESKTOP -->
<nav class="navbar-desktop">
	<div class="left">
		<a href="index.html" class="logo">
			<img src="images/logo.png" alt="Royate">
		</a>
	</div>
	<ul>
		<li class="has-children">
			<a href="#">
				Home
			</a>
			<div class="sub-menu">
				<div class="wrapper">
					<ul>
						<li>
							<a href="index.html">Home Page</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="has-children">
			<a href="#">
				Page
			</a>
			<div class="sub-menu">
				<div class="wrapper">
					<ul>
						<li>
							<a href="about-us.html">About Us</a>
						</li>
						<li>
							<a href="coming-soon.html">Coming Soon</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
		<li>
			<a href="menu.html">
				Menu
			</a>
		</li>
		<li class="has-children">
			<a href="#">
				Reservation
			</a>
			<div class="sub-menu">
				<div class="wrapper">
					<ul>
						<li>
							<a href="reservation_v1.html">Reservation</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="has-children">
			<a href="#">
				Blog
			</a>
			<div class="sub-menu">
				<div class="wrapper">
					<ul>
						<li>
							<a href="blog-masonry.html">Blog Masonry</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
		<li class="has-children current">
			<a href="#">
				Shop
			</a>
			<div class="sub-menu">
				<div class="wrapper">
					<ul>
						<li>
							<a href="shop-list.php">Shop List</a>
						<li class="current">
							<a href="sign-in.php">Sign In</a>
						</li>
						<li>
							<a href="sign-up.php">Sign Up</a>
						</li>
						<li>
							<a href="checkout.html">CheckOut</a>
						</li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
	<div class="right">
		<div class="action">
			<div class="notify">
				<img src="images/notify.png" alt="">
				<span class="notify-amount">69</span>	
							<!-- WIDGET SHOPPING -->
							<div id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">
								<div class="widget_shopping_cart_content">
									<ul class="woocommerce-mini-cart cart_list product_list_widget ">
										<li class="woocommerce-mini-cart-item mini_cart_item clearfix">
											<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>					    
											<a href="#" class="image-holder">
												<img src="images/widget-cart-thumb-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
												<span class="product-name">Best Brownies</span>
											</a>
											<span class="quantity"> 
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>18
												</span>
												x1
											</span>					
										</li>
										<li class="woocommerce-mini-cart-item mini_cart_item clearfix">
											<a href="#" class="remove remove_from_cart_button" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>					    
											<a href="#" class="image-holder">
												<img src="images/widget-cart-thumb-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
												<span class="product-name">Angela's Awesome</span>
											</a>
											<span class="quantity"> 
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>28
												</span>
												x3
											</span>					
										</li>
									</ul>
									<p class="woocommerce-mini-cart__total total">
										<strong>Subtotal:</strong> 
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>102
										</span>
									</p>
									<p class="woocommerce-mini-cart__total total">
										<strong>Total:</strong> 
										<span class="woocommerce-Price-amount amount color-cdaa7c">
											<span class="woocommerce-Price-currencySymbol">$</span>102
										</span>
									</p>
									<p class="woocommerce-mini-cart__buttons buttons">
										<a href="#" class="button wc-forward view-cart">View cart</a>
										<a href="#" class="button checkout wc-forward">Checkout</a>
									</p>
								</div>
							</div>
						</div>	
						<span class="lnr lnr-magnifier search-icon" data-toggle="modal" data-target="#modalSearch"></span>
					</div>
				</div>
			</nav>
			<!-- MENU SIDEBAR -->
			<div class="menu-sidebar">

				<div class="close-btn">
					<span class="lnr lnr-cross" id="close-icon"></span>
				</div>
				<a href="index.html" class="logo">
					<img src="images/logo-menu-sidebar.png" alt="">
				</a>
				<p class="text">Et harum quidem rerum facilis est et expedita distinctio nam libero.</p>
				<!-- SLIDER -->
				<div class="owl-carousel owl-theme image-slider style-1" id="image-carousel">
				    <div class="item">
				    	<a href="#">
				    		<img src='images/menu-sidebar-slide-1.jpg' alt="">
				    	</a>
				    </div>
				    <div class="item">
				    	<a href="#">
				    		<img src='images/menu-sidebar-slide-2.jpg' alt="">
				    	</a>
				    </div>
				    <div class="item">
				    	<a href="#">
				    		<img src='images/menu-sidebar-slide-3.jpg' alt="">
				    	</a>
				    </div>
				</div>
				<!-- CONTACT -->
				<div class="contact-part">
					<div class="contact-line">
						<span class="lnr lnr-home"></span>
						<span>No 40 Baria Sreet 133/2</span>
					</div>
					<div class="contact-line">
						<a href="tel:+15618003666666">
							<span class="lnr lnr-phone-handset"></span>
							<span> + (156) 1800-366-6666</span>
						</a>
					</div>
					<div class="contact-line">
						<a href="#">
							<span class="lnr lnr-envelope"></span>
							<span> Eric-82@example.com</span>
						</a>
					</div>
				</div>
				<!-- SOCIAL -->
				<div class="social">
					<a href="#">
						<i class="zmdi zmdi-twitter"></i>
					</a>
					<a href="#">
						<i class="zmdi zmdi-facebook-box"></i>
					</a>
					<a href="#">
						<i class="zmdi zmdi-linkedin"></i>
					</a>
					<a href="#">
						<i class="zmdi zmdi-instagram"></i>
					</a>
				</div>
			</div>
		</header>
		
		<main>
			<!-- PAGE BREADCRUMB -->
			<section class="page-breadcrumb">
				<div class="container">
					<div class="row justify-content-between align-content-center">
						<div class="col-md-auto">
							<h3>My account</h3>
						</div>
						<div class="col-md-auto">
							<ul class="au-breadcrumb">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="shop-cart.html">My Account</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<!-- SIGN IN -->
			<section class="section-primary sign-in pt-112 pb-90">
				<div class="container">
					<div class="woocommerce">
						<h4>Login</h4>
						<form action="" method="POST" class="woocommerce-form woocommerce-form-login login">
							<div class="form-holder">
								<label for="username">Username or email address <span class="required">*</span></label>
								<input required type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" value="">
							</div>
							<div class="form-holder">
								<label for="password">Password <span class="required">*</span></label>
								<input required class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password">
							</div>
							<div class="form-holder last">
								<input type="submit" class="woocommerce-Button button au-btn round has-bg" name="login" value="Login">
								<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
									<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> 
									Remember me
									<span class="checkmark"></span>
								</label>
							</div>
							<p class="woocommerce-LostPassword lost_password">
								<a href="#">Lost your password?</a>
							</p>
						</form>
					</div>
				</div>
			</section>
		</main>
		
		<footer>
			<!-- FOOTER TOP -->
			<div class="ft-top">
				<div class="container">
					<div class="ft-top-wrapper">
						<div class="ft-logo">
							<a href="index.html">
								<img src="images/logo.png" alt="">
							</a>
						</div>
						<div class="row justify-content-between justify-content-xl-start">
							<div class="col-md-3  ft-col">
								<h6>About Us</h6>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium, totam rem aperiam,</p>
							</div>
							<div class="col-md-5  col-xl-4 offset-xl-1 ft-col">
								<h6>Get news & offers</h6>
								<form action="#">
									<div class="form-inner">
										<input type="text" placeholder="Enter your mail">
										<button>
											<span class="lnr lnr-envelope"></span>
										</button>
									</div>
								</form>
								<div class="social">
									<a href="#">
										<i class="zmdi zmdi-twitter"></i>
									</a>
									<a href="#">
										<i class="zmdi zmdi-facebook-box"></i>
									</a>
									<a href="#">
										<i class="zmdi zmdi-linkedin"></i>
									</a>
									<a href="#">
										<i class="zmdi zmdi-instagram"></i>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-xl-2  ml-xl-auto ft-col">
								<h6>Contact Us</h6>
								<p>No 40 Baria Sreet 133/2</p>
								<p>+ (156) 1800-366-6666</p>
								<p>Eric-82@example.com</p>
								<p>www.royate.com</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="ft-bot">
				<div class="container">
					@ 2018 DesignGalaxy8. Get The Theme			
				</div>
			</div>
		</footer>

		<!-- CLICK TO TOP -->
		<div class="click-to-top">
		    <span class="lnr lnr-arrow-up"></span>
		</div>

		<!-- jQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Slider Revolution core JavaScript files -->
        <script src="vendor/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendor/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

        <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING --> 
        <script src="vendor/revolution-slider/js/revolution.extension.actions.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.carousel.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.kenburn.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.layeranimation.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.migration.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.navigation.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.parallax.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.slideanims.min.js"></script>
        <script src="vendor/revolution-slider/js/revolution.extension.video.min.js"></script>

        <!-- MAP JS-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
		<script src="js/theme-map.js"></script>

		<!-- CAROUSEL JS -->
		<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

		<!-- SWEET ALERT -->
		<script src="js/sweetalert.min.js"></script>

		<!-- SIDENAV MOBILE -->
		<script src="vendor/hcmobilenav/hc-mobile-nav.js"></script>

		<!-- LIGHT GALLERY -->
		<script src="vendor/lightgallery/js/jquery.mousewheel.min.js"></script>
		<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>

		<!-- JQUERY UI -->
		<script src="vendor/jquery-ui/jquery-ui.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/datepicker.js"></script>
		<script src="vendor/date-picker/datepicker.en.js"></script>

		<!-- JQUERY TIMEPICKER -->
		<script src="vendor/jquery-timepicker-master/jquery.timepicker.min.js"></script>

		<script src="js/main.min.js"></script>

	</body>
</html>