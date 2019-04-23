<?php
include "core/produitC.php";
$produitC =new ProduitC();
include "core/categorieC.php";
$categorieC =new categorieC();


if(isset($_GET['id']))
{
	$resultat=$produitC->recupererProduit($_GET['id']);

	
}



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shop Single</title>
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

	    <!-- LIGHT GALLERY -->
	    <link rel="stylesheet" href="vendor/lightgallery/css/lightgallery.min.css">
		
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

        <!-- NOUISLIDER -->
	    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

		<!-- FAVICON -->
        <link rel="shortcut icon" href="favicon.png">

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
									<li class="current">
										<a href="shop-list.php">Shop List</a>
									<li>
										<a href="sign-in.html">Sign In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
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
			<!-- MODAL SEARCH -->
			<div class="modal-search modal" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
		        <div class="modal-dialog" role="document">
		            <div class="modal-content">
						<form method="get">
							<input type="text" placeholder="Search">
							<button>
								<span class="lnr lnr-magnifier"></span>
							</button>
						</form>
		            </div>
		        </div>
		        <span class="lnr lnr-cross" data-toggle="modal" data-target="#modalSearch"></span>
			</div>
		
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
			<!-- PAGE INFO -->
			<section class="page-info set-bg" data-bg="samples/biga.jpg">
				<div class="section-header">
					<h1 class="text-white">Shop single</h1>
					<span>~ Delicious food ~</span>
				</div>
			</section>
			
			<!-- /////////////////////////////////////////////////SHOP SINGLE//////////////////////////////////////////////////// -->
			<?php 
			foreach($resultat as $row){
			?>
			<section class="section-primary pt-150 pb-113 shop-single">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images">
								<figure class="woocommerce-product-gallery__wrapper">
						    		<div class="woocommerce-product-gallery__image">
							    		<img id="zoom-image" class="attachment-shop_single size-shop_single wp-post-image" <?php echo "src = 'samples/".$row['image'].".jpg'";?> <?php echo "data-zoom-image= 'samples/".$row['image'].".jpg'";?> alt="" />
							    	</div>
						    	</figure>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="summary entry-summary">
								<h3 class="product_title entry-title"><?PHP echo $row['nom']; ?></h3>
								<div class="info">
									<span class="price">
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">DT</span><?PHP echo $row['Prix']; ?>
										</span>
									</span>
									<span class="star-rating">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
									</span>
								</div>
								<div class="woocommerce-product-details__short-description">
								    <p><?PHP echo $row['description']; ?></p>
								</div>
								<form class="cart" method="post" enctype="multipart/form-data">
									<div class="quantity">
										<input type="number" class="input-text qty text" step="1" min="0" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" id="input-quantity">
										<div class="icon">
											<a href="#" class="number-button plus">+</a>
											<a href="#" class="number-button minus">-</a>
										</div>
									</div>
									<button type="submit" name="add-to-cart" value="" class="single_add_to_cart_button button alt au-btn round has-bg au-btn--hover">Add to cart</button>
								</form>
								<div class="product_meta">
									<span class="sku_wrapper">SKU: <span class="sku"><?PHP echo $row['id']; ?></span></span>
									<?php //$listeCategorie=$categorieC->recupererCategorie($resultat['categorie_id']);
									//foreach ($listeCategorie as $cat)
									//{ ?>
									<span class="sku_wrapper">Category: <span class="sku">Pizza<?php //echo $listeCategorie['nom_c']?></span></span>
									<?php
									//}
									?>
								</div>
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
						</div>
					</div>
					<?php
			}
					?>
					<!-- WOOCOMMERCE TABS -->
					<div class="woocommerce-tabs wc-tabs-wrapper">
						<div id="shop-single-tab">
							<ul class="tabs wc-tabs">
								<li class="description_tab">
									<a href="#description">Description</a>
								</li>
								<li class="additional_information_tab">
									<a href="#add-info">Additional Information</a>
								</li>
								<li class="reviews_tab">
									<a href="#review">Reviews (0)</a>
								</li>
							</ul>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="description">
								<p><?PHP echo $row['description']; ?></p>
							</div>
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="add-info">
								<table class="shop_attributes">
									<tbody>
										<tr>
											<th>Weight</th>
											<td class="product_weight">2kg</td>
										</tr>
										<tr>
											<th>Dimensions</th>
											<td class="product_dimensions">15 x 20 x 15 cm</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="review" class="woocommerce-Reviews">
								<div id="comments">
									<h6 class="woocommerce-noreviews">
										BE THE FIRST TO REVIEW
									</h6>
								</div>
								<div id="review_form_wrapper">
									<div id="review_form">
										<div id="respond" class="comment-respond">
											<form method="get" id="comments-form" class="comments-form">
												<p class="comment-notes">Your email address will not be published. Required fields are marked.</p>
												<div class="comment-form-rating">
													<label>Your rating</label>
													<span class="star-rating">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
													</span>
												</div>
												<p class="comment-form-comment">
													<textarea id="comment" name="comment" class="form-control" required placeholder="Your Message"></textarea>
												</p>
												<p class="comment-form-author">
													<input id="author" name="author" type="text" value="" class="form-control" aria-required="true" required="" placeholder="Your Name">
												</p>
												<p class="comment-form-email">
													<input id="email" name="email" type="email" value="" class="form-control" aria-required="true" required="" placeholder="Your Mail">
												</p>
												<p class="form-submit">
													<input name="submit" type="submit" id="submit" class="submit au-btn round has-bg" value="Submit"> 
												</p>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- FOOTER TOP -->
			<footer>
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
								<p>We are lazy</p>
							</div>
							<div class="col-md-5  col-xl-4 offset-xl-1 ft-col">
								<h6>Get news & offers</h6>
								<form method="get">
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
								<h6>Contact us</h6>
								<p>We are too lazy for this</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="ft-bot">
				<div class="container">
					@ LAZY_CORP 2019.			
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
		<script src="vendor/owl-carousel/js/owl.carousel2.thumbs.min.js"></script>

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
        <!-- noUISlider -->
		<script src="vendor/nouislider/nouislider.min.js"></script>

		<!-- ELEVATE ZOOM -->
		<script src="vendor/elevatezoom-master/jquery.elevatezoom.js"></script>

		<script src="js/main.min.js"></script>

	</body>
</html>