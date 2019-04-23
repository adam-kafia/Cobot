<?php 
include "core/produitC.php";
$produitC =new ProduitC();
$listeProduit=$produitC->afficherProduit();
include "core/categorieC.php";
$categorieC =new categorieC();
$listeCategorie=$categorieC->afficherCategorie();
if (isset($_GET['s']))
{
	$listeProduit=$produitC->rechercherListeEmployes($_GET['s']);
}
if (isset($_GET['inputCat']))
{
	$listeProduit=$produitC->rechercherListeEmployesParCat($_GET['inputCat']);
}
if (isset($_GET['orderby']))
{
	if($_GET['orderby']=="1"){ $listeProduit=$produitC->afficherProduitParNom(); }
	if($_GET['orderby']=="2"){ $listeProduit=$produitC->afficherProduitParPrix(); }
	if($_GET['orderby']=="3"){ $listeProduit=$produitC->afficherProduitParPrix_d(); }
}

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
						<span class="lnr lnr-menu menu-sidebar-icon"></span>
					</div>
				</div>
			</nav>
		
			<!-- /////////////////////////////////////////////////////////////////SearchM///////////////////////////////////////////////////////////////////////// -->
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
			

		</header>
		
		<main>
			<!-- PAGE INFO -->
			<section class="page-info set-bg" data-bg="samples/biga.jpg">
				<div class="section-header">
					<h1 class="text-white">Shop list</h1>
					<span>~ Delicious food ~</span>
				</div>
			</section>
			
			<!-- SHOP LIST -->
			<section class="section-primary pt-150 pb-113 shop-list">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="sorting">
								<form method="get" class="woocommerce-ordering">
									<div class="form-holder">
										<select name="orderby" class="orderby form-control">
											<option value="1"><button class="btn btn-light" id="se" type="submit">Sort by ahphabet</button></option>
											<option value="2"><button class="btn btn-light" id="se" type="submit">Sort by price: low to high</button></option>
											<option value="3"><button class="btn btn-light" id="se" type="submit">Sort by price: high to low</button></option>
										</select>
										<span class="lnr lnr-chevron-down"></span>
									</div>
									<button class="btn btn-light" id="se" type="submit">Sort</button>
								</form>
							</div>
							<!--////////////////////////////////////////////////////////////////////PRODUITS//////////////////////////////////////////////////////////////////////////////////////////////-->
							<div class="row products">
								<?php foreach($listeProduit as $produit){
									?>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img <?php echo "<img src = 'samples/".$produit['image'].".jpg'";?> alt=''>
											</a>
											<a href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
										</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="shop-single.php?id=<?php echo $produit['id'];?>"><?PHP echo $produit['nom']; ?></a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<span class="price">
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">DT</span><?PHP echo $produit['Prix']; ?>
												</span>
											</span>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="woocommerce-pagination">
								<ul class="page-numbers">
									<li>
										<a href="#" class="page-numbers prev">
											<span class="lnr lnr-arrow-left"></span>
										</a>
									</li>
									<li>
										<span class="page-numbers current">1</span>
									</li>
									<li>
										<a href="#" class="page-numbers next">
											<span class="lnr lnr-arrow-right"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="sidebar">
								<!-- ///////////////////////////////////////////////////SEARCHMMMMMMMMMMM////////////////////////////////////////////// -->
								<div class="widgets widget_search">
									<form method="get" action="shop-list.php" class="search-form">
										<input class="form-control" type="text" name="s" id="s" placeholder="Search">
										<button class="search-icon" id="se" type="submit">
											<span class="lnr lnr-magnifier"></span>
										</button>
									</form>
								</div>
								<!-- FILTER -->
								<div class="widgets woocommerce widget_price_filter">
									<div class="widget-title">
										<h5>Filter by price</h5>
									</div>
									<form method="get">
										<div class="price_slider_wrapper">
											<div id="slider"></div>
											<div class="price_slider_amount">
												<div class="price_label">
													Price: 
													<span class="from">
														$<span id="lower-value">69</span>
													</span> — 
													<span class="to">
														$<span id="upper-value">69</span>
													</span>
												</div>
												<button type="submit" class="button">Filter</button>
											</div>
										</div>
									</form>
								</div>
								<!--////////////////////////////////////////////////////////////// CATEGORIES /////////////////////////////////////////////////////////////////////////-->
								<div class="widgets widget_categories">
									<div class="widget-title">
										<h5>Categories</h5>
									</div>
									<ul>
										<?php foreach($listeCategorie as $categorie) { ?>
										<li>
											<form method="get" action ="shop-list.php" class="search-form">
											<button class="btn btn-light" type="submit">
											<?php echo $categorie['nom_c'];?>
											<input class="form-control" name="inputCat" type="hidden" value="<?php echo $categorie['nom_c'];?>">
											</button>
											</form>
										</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
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