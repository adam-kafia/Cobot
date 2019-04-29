
<?php  
session_start();
    include "../../config.php";
    include "../../entities/Forum.php";
    include "../../core/ForumCore.php";

    include "../../entities/Post.php";
    include "../../core/PostCore.php";

    // MailUser For newsletter
    include "../../entities/MailUser.php";
    include "../../core/MailUserCore.php";

    $page = new ForumCore();
    $liste = $page->afficher();

            if(isset($_POST['mail'])) { 
               $element = new mailUser($_POST['mail']);
               $element->ajouterMailUser($element);
               header("location: forumList.php");
            }

             if(isset($_POST['ajouter'])) {
                 var_dump($_FILES);
               $element= new Forum($_POST['titre'],$_POST['des'],$_FILES["image"]["name"]);
               $fc = new ForumCore();
               $fc->ajouterForum($element);

			if(isset($_POST['message']) ) {		 
               $element = new Post($_POST['message'],$_POST['des']);
               $element->ajouterPost($element);
            }
		header("location: forumList.php");
            }
            

    ?>
    <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Projet</title>
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
						<a href="index.php">
							Home
						</a>
						</li>
						<li class="current">
						<a href="forumList.php">
							Forum
						</a>
						</li>
			
					<li class="has-children">
						<a href="#">
							Reservation
						</a>
						
					
					<li class="has-children">
						<a href="#">
							Shop
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="#">Shop List</a>
									</li>
										<a href="#">Shop Cart</a>
									</li>
									<li>
										<a href="#">Sign In</a>
									</li>
									<li>
										<a href="#">Sign Up</a>
									</li>
									<li>
										<a href="#">CheckOut</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
				<div class="right">
					<div class="action">
							
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
									<span class="notify-amount">0</span>
					
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
						
					</div>
				</div>
				<nav id="main-nav">
					<ul>
						<li>
							<a href="index.html" target="_blank">Home</a>
						</li>
						<li class="current">
							<a href="forumList.php" target="_blank">Forum</a>
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
			<section class="page-info set-bg" data-bg="images/biga.jpg">
				<div class="section-header">
					<h1 class="text-white">Liste Des Forums</h1>
					<span>~ Bienvenue	 ~</span>
				</div>
			</section>
			
			<!-- SHOP LIST -->
			<section class="section-primary pt-150 pb-113 shop-list">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="sorting">
								<form method="get" class="woocommerce-ordering">
									<p class="woocommerce-result-count">
										Showing 1–15 of 27 results
									</p>
									<div class="form-holder">
										<select name="orderby" class="orderby form-control">
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
										<span class="lnr lnr-chevron-down"></span>
									</div>
								</form>
							</div>
							<div class="row products">
							<?php  
                           foreach($liste as $row){
   							 ?>
								<div class="col-md-6 col-lg-4">
									<div class="item">
										<div class="thumb">
											<a href="shop-single.lnr-phone-handsetml" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
												<img src="<?PHP echo 'uploads/'.$row['image'];?>" alt="">
											</a>
											<form action="forumDis.php" method="GET" >
												<input type="text" name="forum" hidden value="<?PHP echo $row['id']; ?>">
												<button type="submit"  class="button product_type_simple add_to_cart_button ajax_add_to_cart" >Rejpoindre </button>
												
											</form>
											




									</div>
										<div class="info">
											<h5 class="woocommerce-loop-product__title">
												<a href="shop-single.html"><?PHP echo $row['des']; ?></a>
											</h5>
											<div class="star-rating">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											
										</div>
									</div>
								</div>
							 <?php
}
?>
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
										<a href="#" class="page-numbers inactive">
											2
										</a>
									</li>
									<li>
										<a href="#" class="page-numbers inactive">
											3
										</a>
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
								<!-- SEARCH -->
								<div class="widgets widget_search">
									<form method="get" class="search-form">
										<input class="form-control" type="text" name="s" id="s" placeholder="Search">
										<button class="search-icon">
											<span class="lnr lnr-magnifier"></span>
										</button>
									</form>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		










		    <!-- BOOK A TABLE -->
		    <section class="booking">
		    	<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 px-0">
							<div class="image-holder"></div>
						</div>
						<div class="col-md-6 px-0">
							<div class="booking-content">
								<div class="section-header">
									<h2 class="text-white">Ajouter un sujet</h2>
									<span>~ découvrez notre forum  ~</span>
								</div>
								<form method="POST" action="forumList.php" enctype="multipart/form-data">
									
									<div class="form-row">
										
										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="text" class="form-control" placeholder=" Titre Du sujet" name='titre'>
			                                </div>
										</div>
									</div>
									<div class="form-row">

										<div class="form-col">
			                                <div class="form-holder">
                                                <textarea class="form-control" name="des" placeholder="Description du sujet" cols="3"></textarea>
<!--
<input type="text" class="form-control" placeholder=" Titre Du sujet" name='des'>-->
			                                </div>
										</div>
									</div>
									<div class="form-row">

										<div class="form-col">
			                                <div class="form-holder">
			                                	<input type="file" class="form-control" placeholder=" Titre Du sujet" name='image'>
			                                </div>
										</div>
									</div>
										
									<div class="btn-holder">
										<button name="ajouter" class="au-btn has-bg au-btn--hover round">Ajouter le sujet </button>
									</div>
								</form>
							</div>
						</div>
					</div>
		    	</div>
		    </section>




























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
								<form method="POSt">
									<div class="form-inner">
										<form action="forumList.php" method="POST">
										 <input type="text" placeholder="Enter your mail" name="mail">
										<button type="submit">
											<span class="lnr lnr-envelope"></span>
										</button>
									</form>
										
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