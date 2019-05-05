<?php 
 session_start();

 include "core/produitC.php";
 include "core/commandeC.php";
 $produitC =new ProduitC();
 $listeProduit=$produitC->afficherProduit();
 include "core/categorieC.php";
 $categorieC =new categorieC();
 $listeCategorie=$categorieC->afficherCategorie();
 $pa=new PanierC();
 $count=$pa->count();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Checkout</title>
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
			<nav class="navbar-desktop has-bg static">
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
						
					</li>
					
					<li class="has-children current">
						<a href="#">
							Shop
						</a>
						<div class="sub-menu">
							<div class="wrapper">
								<ul>
									<li>
										<a href="shop-list.html">Shop List</a>
									</li>
									<li>
										<a href="shop-three-column.html">Three Columns Grid</a>
									</li>
									<li>
										<a href="shop-three-column-wide.html">Three Columns Wide</a>
									</li>
									<li>
										<a href="shop-four-column.html">Four Colums Grid</a>
									</li>
									<li>
										<a href="shop-four-column-wide.html">Four Colums Wide</a>
									</li>
									<li>
										<a href="shop-cart.html">Shop Cart</a>
									</li>
									<li>
										<a href="shop-single.html">Shop Single</a>
									</li>
									<li>
										<a href="sign-in.html">Sign In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li class="current">
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
							<img src="images/notify-black.png" alt="">
							<span class="notify-amount"><?php echo $pa->Count(); ?></span>
			
              <!-- WIDGET SHOPPING -->
              <?php 
                         $panier=new PanierC();

                        $listeproduits  =$panier->afficherProduits();
                        $total=$panier->Total();
                        $_SESSION['total']=$total;
               
                        


                ?>  
							<div id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">
								<div class="widget_shopping_cart_content">
									<ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <?php
                    foreach ($listeproduits as $p ) { 
                      ?>
										<li class="woocommerce-mini-cart-item mini_cart_item clearfix">

											<a href="shop-cart.php?del=<?php echo $p['ID_PRO']; ?>" class="remove remove_from_cart_button" aria-label="Remove this item">
												<span class="lnr lnr-cross-circle"></span>
											</a>					    
											<a href="#" class="image-holder">
												<img src="samples/<?php echo $p['image']; ?>.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
												<span class="product-name"><?php echo $p['nom']; ?></span>
											</a>
											<span class="quantity"> 
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol"><?php echo $p['prix']*$p['QTE']; ?> DT</span>
												</span>
												<?php echo $p['QTE'];?>
											</span>					
										</li>
                    <?php
                  }
                  ?>
									</ul>
									
									<p class="woocommerce-mini-cart__total total">
										<strong>Total:</strong> 
										<span class="woocommerce-Price-amount amount color-cdaa7c">
											<span class="woocommerce-Price-currencySymbol"><?php echo $total;?></span> Dt
										</span>
									</p>
									<p class="woocommerce-mini-cart__buttons buttons">
										<a href="shop-cart.php" class="button wc-forward view-cart">View cart</a>
										<a href="checkout.php" class="button checkout wc-forward">Checkout</a>
									</p>
								</div>
							</div>
						</div>	
						<span class="lnr lnr-magnifier search-icon" data-toggle="modal" data-target="#modalSearch"></span>
						<span class="lnr lnr-menu menu-sidebar-icon"></span>
					</div>
				</div>
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
			<!-- PAGE BREADCRUMB -->
			<section class="page-breadcrumb">
				<div class="container">
					<div class="row justify-content-between align-content-center">
						<div class="col-md-auto">
							<h3>CheckOut</h3>
						</div>
						<div class="col-md-auto">
							<ul class="au-breadcrumb">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="shop-list.php">Shop List</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<!-- SHOPPING CHECKOUT -->
			<section class="checkout-page section-primary pt-120">
				<div class="container">
					<div class="woocommerce">
						<div class="woocommerce-info-wrapper">
							
								
								<div id="collapseTwo" class="collapse" data-parent="#accordion">
									<form class="checkout_coupon" method="post" action="ajoutCmd.php">
										<p class="form-row form-row-first">
											<input type="text" name="coupon_code" class="form-control" placeholder="Coupon code" id="coupon_code" value="">
										</p>
										<p class="form-row form-row-last">
											<input type="submit" class="button au-btn has-bg round" name="apply_coupon" value="Apply coupon">
										</p>
									</form>
								</div>
							</div>
						</div>

						<?php 
						$panier=new PanierC();

					   $listeproduits  =$panier->afficherProduits();
					   $total=$panier->Total();
					   $_SESSION['total']=$total;
			  
					   foreach ($listeproduits as $p ) { 


			   ?>  

						
								<div class="col-md-6">
									<div class="woocommerce-checkout-review-order-wrap">
										

										<div id="order_review" class="woocommerce-checkout-review-order">
											<table class="shop_table woocommerce-checkout-review-order-table">
                      <form class="checkout_coupon" method="post" action="ajoutCmd.php">
											    <tbody>
											        
											        <tr class="cart_item">
											            <td class="product-name">
											                <img src="samples/<?php echo $p['image']; ?>.jpg" style ="width  :20%">
											                <div class="review-wrap">
											                	<span class="rv-titel"><?php echo $p['nom']; ?></span>
															 	<span class="product-quantity">x<?php echo $p['QTE'];?></span>
															 </div>
                                  </td>
                                  <?php
                  }
                  ?>
											            <td class="product-total">
															                
														</td>
													</tr>
											    </tbody>
										   	</table>
										   	<div class="cart-total">
											    <div class="cart-subtotal">
										        	<p>
										        		<span class="title">total</span>
										        		<span class="woocommerce-Price-amount amount">
											        		<span class="woocommerce-Price-currencySymbol"><strong><?php echo $total;?> DT</strong></span>
												        </span>
										        	</p>
											    </div>
											    
											    
                         </div>
                         <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Livraison</h3>
                <label for="s_sm" class="d-flex">
                  <input type="radio" name="livraison" value="Retrait au restaurant" id="s_sm" class="mr-2 mt-1" checked > <span class="text-black">Retrait au Restaurant</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="livraison" value="Livraison à domicile" id="s_md" class="mr-2 mt-1"> <span class="text-black">Livraison à domicile</span>
                </label>
                
                 </div>

                   <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Payment</h3>
                
                <label for="s_sm" class="d-flex">
                  <input type="radio" name="Payment" value="Bons" id="s_sm" class="mr-2 mt-1" checked > <span class="text-black">Bons</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="radio" name="Payment" value="Espèce" id="s_md" class="mr-2 mt-1"> <span class="text-black">Espèce</span>
                </label>
                
                 </div>
												<div class="form-row place-order">
                        <button type ="submit" class="button alt au-btn round has-bg">Place Order</button>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
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