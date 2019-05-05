<?php  
session_start();
    include "C:/xampp/htdocs/Projet/front/core/config.php";
    include "C:/xampp/htdocs/Projet/front/entities/Avis.php";
    include "C:/xampp/htdocs/Projet/front/core/ForumCore.php";
    include "C:/xampp/htdocs/Projet/front/core/AvisC.php";


// Load Composer's autoloader
require 'vendor/autoload.php';




if(isset($_POST['ajouter'])){
    $avisc = new AvisC();
    $avis = new Avis($_POST['produit'],$_POST['user'],$_POST['commentaire'],$_POST['note']);
    $avisc->ajouteravis($avis);
    //mail
    $to ="ahmed.midassi@esprit.tn";
		$subject ="Hafood: Forum";
		$message="Merci d'avoir ajouté un commentaire";
		$headers ="From: ahmed001s456@gmail.com";

		mail($to, $subject, $message,$headers);
}
if(isset($_POST['modifier'])){
    $avisc = new AvisC();

    $avis = new Avis($_POST['produitm'],$_POST['userm'],$_POST['commentairem'],$_POST['notem']);
    $avisc->modifieravis($_POST['userm'],$_POST['notem'],$_POST['produitm'],$_POST['commentairem']);

}
if(isset($_POST['supprimer'])){
    $avisc = new AvisC();
    $avisc->supprimeravis($_POST['id']);

}


   	if (isset($_GET['forum'])){

                $fc = new ForumCore();


   	}
   	 	if (isset($_POST['message'])){
   	 		if(! isset($_SESSION['message']) ){
   	 			$_SESSION['message']= $_POST['message'];
   	 		}
   	 		 unset($_SESSION['message']);
   	}
   	
   	 if(isset($_POST['ajouter']) ) {	
   	 			$avis = new Avis($_POST['produit'],$_POST['user'],$_POST['commentaire'],$_POST['note']);	 
                $avisc = new AvisC();
    			
    			$avisc->ajouteravis($avis);
               //header("location: forumDis.php");
            }


    $commentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : NULL;



    

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

		<!-- FAVICON -->
        <link rel="shortcut icon" href="favicon.png">

	    <!-- STYLE CSS -->
	    <link rel="stylesheet" href="css/style.css" />

        <script src="jquery-2.2.4.min.js"></script>
        <script src="jquery.validate.min.js" type="text/javascript"></script>
        <script src="messages_fr.js" type="text/javascript"></script>

        <style>
            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            /****** Style Star Rating Widget *****/

            .rating {
                border: none;
                float: left;
            }

            .rating > input { display: none; }
            .rating > label:before {
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before {
                content: "\f089";
                position: absolute;
            }

            .rating > label {
                color: #ddd;
                float: right;
            }

            /***** CSS Magic to Highlight Stars on Hover *****/

            .rating > input:checked ~ label, /* show gold star when clicked */
            .rating:not(:checked) > label:hover, /* hover current star */
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

            .rating > input:checked + label:hover, /* hover current star when changing rating */
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
        </style>
	</head>
	
	<body class="preload">

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form id="modifier" method="POST" action="#">

                    <div class="modal-header">
                        <h4 class="modal-title">Modifier</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="hiddeninput" name="userm" value="modifier">
                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                            note :<fieldset class="rating">
                                <input required type="radio" id="sstar5" value="modifier" name="notem" value="5" /><label class = "full" for="sstar5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="sstar4" value="modifier" name="notem" value="4" /><label class = "full" for="sstar4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="sstar3" value="modifier" name="notem" value="3" /><label class = "full" for="sstar3" title="Meh - 3 stars"></label>
                                <input type="radio" id="sstar2" value="modifier" name="notem" value="2" /><label class = "full" for="sstar2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="sstar1" value="modifier" name="notem" value="1" /><label class = "full" for="sstar1" title="Sucks big time - 1 star"></label>
                            </fieldset>
                            <input type="hidden" name="produitm" value="modifier">
                            
                        </div>
                        <div class="contact_form_text">
                            <textarea id="contact_form_message" class="form-control" name="commentairem" rows="4" placeholder="Message" required data-error="Please, write us a message." minlength="2" value="modifier"></textarea>
                        </div>
                        <div class="contact_form_button">
                            <input type="submit" name="modifier" value="modifier" class="button contact_submit_button">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
                <script>$("#tovalidates").validate();</script>
            </div>

        </div>
    </div>
		<!-- PAGE LOADER -->

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
							<a href="#" target="_blank">Home</a>
							<ul>
								<li>
									<a href="index.html">HomePage_v1</a>
								</li>
								<li>
									<a href="index-2.html">HomePage_v2</a>
								</li>
								<li>
									<a href="index-3.html">HomePage_v3</a>
								</li>
								<li>
									<a href="index-4.html">HomePage_v4</a>
								</li>
								<li>
									<a href="index-5.html">HomePage_v5</a>
								</li>
								<li>
									<a href="index-6.html">HomePage_v6</a>
								</li>
								<li>
									<a href="index-7.html">HomePage_v7</a>
								</li>
								<li>
									<a href="index-8.html">HomePage_v8</a>
								</li>
								<li>
									<a href="index-9.html">HomePage_v9</a>
								</li>
								<li>
									<a href="index-10.html">HomePage_v10</a>
								</li>
								<li>
									<a href="index-11.html">HomePage_v11</a>
								</li>
								<li>
									<a href="index-12.html">HomePage_v12</a>
								</li>
								<li>
									<a href="index-13.html">HomePage_v13</a>
								</li>
								<li>
									<a href="index-14.html">HomePage_v14</a>
								</li>
								<li>
									<a href="index-15.html">HomePage_v15</a>
								</li>
							</ul>
						</li>
						<li class="current">
							<a href="#">
								Page
							</a>
							<ul>
								<li>
									<a href="about-us.html">About Us</a>
								</li>
								<li class="current">
									<a href="contact-us.html">Contact Us</a>
								</li>
								<li>
									<a href="coming-soon.html">Coming Soon</a>
								</li>
								<li>
									<a href="#">Gallery</a>
									<ul>
										<li>
											<a href="gallery-three-columns.html">Three Colums</a>
										</li>
										<li>
											<a href="gallery-four-columns.html">Four Columns</a>
										</li>
										<li>
											<a href="gallery-three-columns-wide.html">Three Columns Wide</a>
										</li>
										<li>
											<a href="gallery-four-columns-wide.html">Four Colums Wide</a>
										</li>
										<li>
											<a href="masonry-grid.html">Masonry</a>
										</li>
										<li>
											<a href="masonry-wide.html">Masonry Wide</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="project.html">Project</a>
								</li>
								<li>
									<a href="meet-the-chefs.html">Meet The Cheefs</a>
								</li>
								<li>
									<a href="404.html">404</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="menu.html">
								Menu
							</a>
						</li>
						<li>
							<a href="#">
								Reservation
							</a>
							<ul>
								<li>
									<a href="reservation_v1.html">Reservation_v1</a>
								</li>
								<li>
									<a href="reservation_v2.html">Reservation_v2</a>
								</li>
							</ul>
						</li>
						<li class="has-children">
							<a href="#">
								Blog
							</a>
							<ul>
								<li>
									<a href="blog-masonry.html">Blog Masonry</a>
								</li>
								<li>
									<a href="blog-masonry-wide.html">Blog Masonry Wide</a>
								</li>
								<li>
									<a href="blog-standard-right-sidebar.html">Blog Standard Right Sidebar</a>
								</li>
								<li>
									<a href="blog-standard-left-sidebar.html">Blog Standard Left Sidebar</a>
								</li>
								<li>
									<a href="blog-standard-no-sidebar.html">Blog Standard No Sidebar</a>
								</li>
								<li>
									<a href="blog-single.html">Blog Single</a>
								</li>
							</ul>
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

		<main id="contact-us-page">
			<!-- PAGE INFO -->


            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="comments-list">

            <?php
            $avisc = new AvisC();
            $avis = $avisc->afficherAvis($_GET['forum']);
            foreach ($avis as $row) {?>
                <div class="media">
                    <div class="media-body">

                        <span><h4 class="media-heading user_name"><?php echo $row['user']; ?></h4> Note :  <?php echo $row['note']; ?>/5</span>
                        <br>Avis : <?php echo $row['commentaire']; ?>
                        
                            <br>
                            <br>
                            <span class="btn-group"><button class="btn" onclick="modif<?php echo $row['id']; ?>()"  data-toggle="modal" data-target="#myModal">&nbsp&nbsp Modifier &nbsp&nbsp</button> &nbsp;&nbsp;&nbsp;
                                <form method="POST" action="#">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" name="supprimer" value="&nbsp&nbsp Supprimer &nbsp&nbsp" class="btn">
                                </form>
                            </span><br><br><br><br>
                            <script>
                                function modif<?php echo $row['id']; ?>() {
                                    alert("<?php echo $row['id']; ?>")
                                    document.getElementById("hiddeninput").value = "<?php echo $row['id']; ?>";
                                }
                            </script>
                        <?php } ?>
                    </div>
                </div>
            
                        </div></div></div></div>
			<!-- CONTACT US -->
			<section class="contact-us section-primary">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<div class="contact-us-form">
                                <form method="POST" action="">
                                    <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                        note :<fieldset class="rating">
                                            <input required type="radio" id="star5" name="note" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4" name="note" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3" name="note" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2" name="note" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1" name="note" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                        </fieldset>
                                        <input type="hidden" name="produit" value="<?php echo($_GET['forum']); ?>">
                                    </div>
                                    <div class="contact_form_text">
                                        <textarea id="contact_form_message" class="form-control" name="commentaire" rows="4" placeholder="" required minlength="2" data-error="Please, write us a message."></textarea>
                                    </div>
                                    <div class="contact_form_text">
                                        <textarea id="contact_form_message" class="form-control" name="user" rows="4" placeholder="Message" required minlength="2" data-error="Please, write us a message."></textarea>
                                    </div>
                                    <div class="contact_form_button">
                                        <input type="submit" name="ajouter" value="Send Message" class="button contact_submit_button">
                                    </div>
                                </form>

							</div>
						</div>
					</div>				
				</div>
			</section>

			<!-- MAP -->
			<div class="js-google-map" data-makericon="images/map-marker.png" data-makers='[["Royate", "Now that you visited our website,<br> how about checking out our office too?", 40.715681, -74.003427]]'>
				<div class="map__holder js-map-holder map-holder" id="map"></div>
			</div>
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