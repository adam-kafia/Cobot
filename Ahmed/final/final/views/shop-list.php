<?php 
$connect = mysqli_connect("localhost", "root", "", "ppt");
include "C:/xampp/htdocs/project/config.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shop List</title>
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
						<a href="index.html">
							Home
						</a>
						
					<li class="has-children current">
						<a href="#">
							Page
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li class="current">
										<a href="about-us.html">About Us</a>
									</li>
									<li>
										<a href="contact-us.html">Contact Us</a>
									</li>
									<li>
										<a href="coming-soon.html">Coming Soon</a>
									</li>
									
								</ul>
							</div>
						</div>
					</li>
					<li class="has-children">
						<a href="reservation_v1.html">
							Reservation
						</a>
						
					<li class="has-children">
						<a href="blog-standard-right-sidebar.html">
							Blog
						</a>
					</li>
					<li class="has-children">
						<a href="#">
							Shop
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="shop-list.html">Shop List</a>
									</li>
										<a href="shop-cart.html">Shop Cart</a>
									</li>
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
							<span class="notify-amount">0</span>
			
							<!-- WIDGET SHOPPING -->
							<div id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">
								<div class="widget_shopping_cart_content">
									<ul class="woocommerce-mini-cart cart_list product_list_widget ">
										<li class="woocommerce-mini-cart-item mini_cart_item clearfix">

									<p class="woocommerce-mini-cart__buttons buttons">
								
										<a href="#" class="button checkout wc-forward">Checkout</a>
									</p>
								</div>
							</div>
						</div>	
						<span class="lnr lnr-magnifier search-icon" data-toggle="modal" data-target="#modalSearch"></span>
						<span class="lnr lnr-menu menu-sidebar-icon"></span>
					</div>
				</div>
			</nav>

			<!-- HEADER ON MOBILE -->
			<nav class="navbar-mobile">
				<div class="container">
					<div class="heading">
						<div class="left">
							<a href="#" class="navbar-mobile__toggler">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
						<a href="index.html" class="logo">
							<img src="images/logo.png" alt="Royate">
						</a>
						<div class="right">
							<div class="action">
								<div class="notify">
									<img src="images/notify.png" alt="">
									
					
									<!-- WIDGET SHOPPING -->
									<div class="widget woocommerce widget_shopping_cart">
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
												<strong>Total:</strong> 
												<span class="woocommerce-Price-amount amount color-cdaa7c">
													<span class="woocommerce-Price-currencySymbol">$</span>
												</span>
											</p>
											<p class="woocommerce-mini-cart__buttons buttons">
												
												<a href="ss" class="button checkout wc-forward">Checkout</a>
											</p>
										</div>
									</div>
								</div>	
								<span class="lnr lnr-magnifier search-icon" data-toggle="modal" data-target="#modalSearch"></span>
							</div>
						</div>
						
					</div>
				</div>
				<nav id="main-nav">
					<ul>
						<li>
							<a href="index.html" target="_blank">Home</a>
						</li>
						<li class="current">
							<a href="#">
								Page
							</a>
							<ul>
								<li class="current">
									<a href="about-us.html">About Us</a>
								</li>
								<li>
									<a href="contact-us.html">Contact Us</a>
								</li>
								<li>
									<a href="coming-soon.html">Coming Soon</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="reservation_v1.html">
								Reservation
							</a>
						</li>
						<li class="has-children">
							<a href="blog-standard-right-sidebar.html">
								Blog
							</a>
						</li>
						<li class="has-children">
							<a href="#">
								Shop
							</a>
							<ul>
								<li>
									<a href="shop-list.html">Shop List</a>
								</li>
								<li>	
								<li>
									<a href="shop-cart.html">Shop Cart</a>
								</li>
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
						</li>
					</ul>
				</nav>
			</nav>
		
		
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
			<section class="page-info set-bg" data-bg="images/page-info-bg-5.jpg">
				<div class="section-header">
					<h1 class="text-white">Shop list</h1>
					<span>~ Delicious food ~</span>
				</div>
			</section>
			
			<!-- SHOP LIST -->
			<section class="section-primary pt-150 pb-113 shop-list">
				<?php
				$query = "SElECT * FROM produits ";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows	($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
				<div class="col-md-4">
				<form method="post" action="ajoutpanier.php">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["nom_pro"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["prix"]; ?></h4>

						<input type="text" name="qte" id="qte" value="1" class="form-control" />

						<input type="hidden" name="id_pro" id="id_pro" value="<?php echo $row["id_pro"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["prix"]; ?>" />

						<input type="submit" name="ajouter" style="margin-top:5px;" class="btn btn-success" value="Ajouter" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			</section>
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

		<!-- CAROUSEL JS -->
		<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

		<!-- SWEET ALERT -->
		<script src="js/sweetalert.min.js"></script>

		<!-- SIDENAV MOBILE -->
		<script src="vendor/hcmobilenav/hc-mobile-nav.js"></script>

		<!-- JQUERY UI -->
		<script src="vendor/jquery-ui/jquery-ui.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/datepicker.js"></script>
		<script src="vendor/date-picker/datepicker.en.js"></script>

		<!-- JQUERY TIMEPICKER -->
		<script src="vendor/jquery-timepicker-master/jquery.timepicker.min.js"></script>

        <!-- noUISlider -->
		<script src="vendor/nouislider/nouislider.min.js"></script>

		<script src="js/main.min.js"></script>

	</body>
</html>