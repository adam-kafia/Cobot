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
			<nav class="navbar-desktop">
				<div class="left">
					<a href="index.html" class="logo">
						<img src="images/logo.png" alt="Royate">
					</a>
				</div>
				<ul>
					<li  class="current">
						<a href="index.php">
							Home
						</a>
						</li>
						<li >
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
					</div>
				</div>
				<nav id="main-nav">
					<ul>
						<li class="current">
							<a href="#" target="_blank">Home</a>
							<ul>
								<li>
									<a href="index.html">HomePage_v1</a>
								</li>
								<li>
									<a href="index-2.html">HomePage_v2</a>
								</li>
								<li class="current">
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
						<li>
							<a href="#">
								Page
							</a>
							<ul>
								<li>
									<a href="about-us.html">About Us</a>
								</li>
								<li>
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
			<div class="modal-search modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
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
				<a href="index.html">
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
							<span>Eric-82@example.com</span>
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

			<!-- SLIDE SHOW -->
			<div class="rev_slider_wrapper">
		        <div id="rev_slider_3" class="rev_slider" data-version="5.4.5">
		            <ul> 
		                <li data-transition="">
		                    <img src="images/biga.jpg" class="rev-slidebg" alt="">

		                    <div class="tp-caption tp-resizeme caption-1"
					        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['33', '33', '33', '33', '33']" 
					        data-voffset="['-164','-110', '-96', '-140', '-150']"
					        data-hoffset="['-127','-127', '-120', '-127', '-127']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	Since
							</div>
				
							<div class="tp-caption tp-resizeme caption-2" 
					        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
					        data-y="middle" 
					        data-voffset="['-165', '-111', '-97', '-141', '-151']"
					        data-width="['auto']"
     						data-height="['auto']"
     						data-type="image"
					        >
								
							</div>
							
							<div class="tp-caption tp-resizeme caption-3"
					        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['33', '33', '33', '33', '33']" 
					        data-voffset="['-164','-110', '-96', '-140', '-150']"
					        data-hoffset="['120','120', '110', '120', '120']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	1986
							</div>
							
							<div class="tp-caption tp-resizeme caption-4"
					        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['67', '67', '67', '67', '67']" 
					        data-voffset="['-42','12', '26', '-18', '-28']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	Restaurant
							</div>
							
							<div class="tp-caption tp-resizeme caption-5"
					        data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'  
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['27', '27', '27', '27', '45']" 
					        data-voffset="['54','108', '122', '78', '68']"
			                data-lineheight="inherit" 
			                data-color="#ffcc66"
					        >
					        	<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
							</div>
											
							<div class="tp-caption tp-resizeme caption-6" 
					        data-frames='[{"delay":3200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
					        data-y="middle" 
					        data-voffset="['98', '152', '166', '122', '112']"
					        data-width="['auto']"
     						data-height="['auto']"
     						data-type="image"
					        >
								
							</div>

							<div class="tp-caption tp-resizeme caption-form"
					        data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'  
					        data-x="center" 
				            data-y="bottom" 
					        data-voffset="['143','93', '73', '78', '73']"
			                data-lineheight="inherit" 
			                data-width="['991', '991', '891', '991', '991']"
			                data-visibility='["on", "off", "off", "off", "off"]'
					        >
					        	<!-- FORM -->
							    <div class="slideshow-form">
							    	<form method="get" >
							    		<div class="inner">
							    			<div class="form-holder">
								        		<select class="form-control">
									        		<option value="1 people">1 people</option>
									        		<option value="2 people">2 people</option>
									        		<option value="3 people">3 people</option>
									        		<option value="4 people">4 people</option>
									        		<option value="5 people">5 people</option>
									        	</select>
									        	<span class="lnr lnr-chevron-down"></span>
								        	</div>
								        	<div class="form-holder">
							                	<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" placeholder="Date">
							                    <span class="lnr lnr-calendar-full big"></span>
							                </div>
								        	<div class="form-holder">
							                	<input type="text" class="form-control time-picker" placeholder="Time">
							                    <span class="lnr lnr-clock big"></span>
							                </div>
							                <button class="au-btn tp-resizeme" 
							                data-fontsize="['18', '18', '18', '18', '18']"
							                >Book now</button>
							    		</div>
							        </form>
							    </div>
							</div>

							<div class="tp-caption tp-resizeme caption-pointer"
					        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="left" 
				            data-y="middle" 
			                data-fontsize="['25', '25', '25', '30', '50']" 
			                data-hoffset="['80','40', '40', '40', '20']"
			                data-lineheight="inherit" 
			                data-color="#fff"
			                data-visibility='["on", "on", "on", "on", "off"]'
			                data-actions='[{
								"event": "click", 
								"action": "jumptoslide", 
								"slide": "previous", 
								"delay": "0"
							}]'
					        >
				        		<span class="lnr lnr-arrow-left"></span>
							</div>

							<div class="tp-caption tp-resizeme caption-pointer"
					        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="right" 
				            data-y="middle" 
			                data-fontsize="['25', '25', '25', '30', '50']" 
			                data-hoffset="['80','40', '40', '40', '20']"
			                data-lineheight="inherit" 
			                data-color="#fff"
			                data-visibility='["on", "on", "on", "on", "off"]'
			                data-actions='[{
								"event": "click", 
								"action": "jumptoslide", 
								"slide": "next", 
								"delay": "0"
							}]'
					        >
				        		<span class="lnr lnr-arrow-right"></span>
							</div>
		                </li>
					 	
					 	<li data-transition="">
		                    <img src="images/slideshow-4.jpg" class="rev-slidebg" alt="">

		                    <div class="tp-caption tp-resizeme caption-3" 
					        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
					        data-y="middle" 
					        data-voffset="['-156', '-102', '-88', '-131', '-141']"
					        data-width="['auto']"
     						data-height="['auto']"
     						data-type="image"
					        >
								<img src="images/restaurant-name.png" alt=""
								data-ww="['419px', '419px', '419px', '419px', '419px']"
				        		data-hh="['88px', '88px', '88px', '88px', '88px']"
								>
							</div>

					        <div class="tp-caption tp-resizeme caption-2"
					        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['44', '44', '44', '44', '44']" 
					        data-voffset="['-4', '50', '64', '21', '11']"
					        data-hoffset="['-167','-167', '-167', '-167', '-167']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	estb
							</div>
				
							<div class="tp-caption tp-resizeme caption-3" 
					        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
					        data-y="middle" 
					        data-voffset="['-61', '-7', '7', '-36', '-46']"
					        data-width="['auto']"
     						data-height="['auto']"
     						data-type="image"
					        >
								<img src="images/fork.png" alt=""
								data-ww="['151px', '151px', '151px', '151px', '151px']"
				        		data-hh="['142px', '142px', '142px', '142px', '142px']"
								>
							</div>
							
							<div class="tp-caption tp-resizeme caption-4"
					        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['44', '44', '44', '44', '44']" 
					        data-voffset="['-4','50', '64', '21', '11']"
					        data-hoffset="['153','153', '153', '153', '153']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	1974
							</div>

							<div class="tp-caption tp-resizeme caption-5" 
					        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
					        data-y="middle" 
					        data-voffset="['78','132', '146', '103', '93']"
					        data-hoffset="['-6','-6', '-6', '-6', '-6']"
					        data-width="['auto']"
     						data-height="['auto']"
     						data-type="image"
					        >
								<img src="images/the-best-food.png" alt=""
								data-ww="['411px', '411px', '411px', '411px', '411px']"
				        		data-hh="['69px', '69px', '69px', '69px', '69px']"
								>
							</div>

							<div class="tp-caption tp-resizeme caption-form"
					        data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'  
					        data-x="center" 
				            data-y="bottom" 
					        data-voffset="['143','93', '63', '123', '133']"
			                data-lineheight="inherit" 
			                data-width="['991', '991', '991', '991', '991']"
			                data-visibility='["on", "off", "off", "off", "off"]'
					        >
					        	<!-- FORM -->
							    <div class="slideshow-form">
							    	<form method="get">
							    		<div class="inner">
							    			<div class="form-holder">
								        		<select class="form-control">
									        		<option value="1 people">1 people</option>
									        		<option value="2 people">2 people</option>
									        		<option value="3 people">3 people</option>
									        		<option value="4 people">4 people</option>
									        		<option value="5 people">5 people</option>
									        	</select>
									        	<span class="lnr lnr-chevron-down"></span>
								        	</div>
								        	<div class="form-holder">
							                	<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" placeholder="Date">
							                    <span class="lnr lnr-calendar-full big"></span>
							                </div>
								        	<div class="form-holder">
							                	<input type="text" class="form-control time-picker" placeholder="Time">
							                    <span class="lnr lnr-clock big"></span>
							                </div>
							                <button class="au-btn tp-resizeme" 
							                data-fontsize="['18', '18', '18', '18', '18']"
							                >Book now</button>
							    		</div>
							        </form>
							    </div>
							</div>

							<div class="tp-caption tp-resizeme caption-pointer"
					        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="left" 
				            data-y="middle" 
			                data-fontsize="['25', '25', '25', '30', '50']" 
			                data-hoffset="['80','40', '40', '40', '20']"
			                data-lineheight="inherit" 
			                data-color="#fff"
			                data-visibility='["on", "on", "on", "on", "off"]'
			                data-actions='[{
								"event": "click", 
								"action": "jumptoslide", 
								"slide": "previous", 
								"delay": "0"
							}]'
					        >
				        		<span class="lnr lnr-arrow-left"></span>
							</div>

							<div class="tp-caption tp-resizeme caption-pointer"
					        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="right" 
				            data-y="middle" 
			                data-fontsize="['25', '25', '25', '30', '50']" 
			                data-hoffset="['80','40', '40', '40', '20']"
			                data-lineheight="inherit" 
			                data-color="#fff"
			                data-visibility='["on", "on", "on", "on", "off"]'
			                data-actions='[{
								"event": "click", 
								"action": "jumptoslide", 
								"slide": "next", 
								"delay": "0"
							}]'
					        >
				        		<span class="lnr lnr-arrow-right"></span>
							</div>
		                </li>

		                <li data-transition="">
		                    <img src="images/slideshow-4.jpg" class="rev-slidebg" alt="">

		                    <div class="tp-caption tp-resizeme caption-1"
					        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'  
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['34', '34', '34', '34', '34']" 
					        data-voffset="['-140','-86', '-72', '-115', '-125']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	<i class="zmdi zmdi-star"></i>
					        	<span>Premium</span>
					        	<i class="zmdi zmdi-star"></i>
					        </div>

					        <div class="tp-caption tp-resizeme caption-2"
					        data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'  
					        data-x="center" 
				            data-y="middle" 
			                data-fontsize="['70', '70', '70', '70', '70']" 
					        data-voffset="['-56','-2', '12', '-31', '-41']"
			                data-lineheight="inherit" 
			                data-color="#fff"
					        >
					        	salmon trout
					        </div>

					        <div class="tp-caption tp-resizeme caption-3" 
					        data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					        data-x="center" 
					        data-y="middle" 
					        data-voffset="['39','93', '107', '64', '54']"
					        data-width="['auto']"
     						data-height="['auto']"
     						data-type="image"
					        >
								<img src="images/special-menu.png" alt=""
								data-ww="['365px', '365px', '365px', '365px', '365px']"
				        		data-hh="['55px', '55px', '55px', '55px', '55px']"
								>
							</div>

					        <div class="tp-caption tp-resizeme caption-form"
					        data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'  
					        data-x="center" 
				            data-y="bottom" 
					        data-voffset="['143','93', '63', '123', '133']"
			                data-lineheight="inherit" 
			                data-width="['991', '991', '991', '991', '991']"
			                data-visibility='["on", "off", "off", "off", "off"]'
					        >
					        	<!-- FORM -->
							    <div class="slideshow-form">
							    	<form method="get">
							    		<div class="inner">
							    			<div class="form-holder">
								        		<select class="form-control">
									        		<option value="1 people">1 people</option>
									        		<option value="2 people">2 people</option>
									        		<option value="3 people">3 people</option>
									        		<option value="4 people">4 people</option>
									        		<option value="5 people">5 people</option>
									        	</select>
									        	<span class="lnr lnr-chevron-down"></span>
								        	</div>
								        	<div class="form-holder">
							                	<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" placeholder="Date">
							                    <span class="lnr lnr-calendar-full big"></span>
							                </div>
								        	<div class="form-holder">
							                	<input type="text" class="form-control time-picker" placeholder="Time">
							                    <span class="lnr lnr-clock big"></span>
							                </div>
							                <button class="au-btn tp-resizeme" 
							                data-fontsize="['18', '18', '18', '18', '18']"
							                >Book now</button>
							    		</div>
							        </form>
							    </div>
							</div>

							<div class="tp-caption tp-resizeme caption-pointer"
					        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="left" 
				            data-y="middle" 
			                data-fontsize="['25', '25', '25', '30', '50']" 
			                data-hoffset="['80','40', '40', '40', '20']"
			                data-lineheight="inherit" 
			                data-color="#fff"
			                data-visibility='["on", "on", "on", "on", "off"]'
			                data-actions='[{
								"event": "click", 
								"action": "jumptoslide", 
								"slide": "previous", 
								"delay": "0"
							}]'
					        >
				        		<span class="lnr lnr-arrow-left"></span>
							</div>

							<div class="tp-caption tp-resizeme caption-pointer"
					        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 
					        data-x="right" 
				            data-y="middle" 
			                data-fontsize="['25', '25', '25', '30', '50']" 
			                data-hoffset="['80','40', '40', '40', '20']"
			                data-lineheight="inherit" 
			                data-color="#fff"
			                data-visibility='["on", "on", "on", "on", "off"]'
			                data-actions='[{
								"event": "click", 
								"action": "jumptoslide", 
								"slide": "next", 
								"delay": "0"
							}]'
					        >
				        		<span class="lnr lnr-arrow-right"></span>
							</div>
		                </li>
		            </ul>
		        </div>
		    </div>

		    <!-- FORM -->
		    <div class="slideshow-form on-mobile">
		    	<div class="container">
		    		<form method="get" >
			    		<div class="inner">
			    			<div class="form-holder">
				        		<select class="form-control">
					        		<option value="1 people">1 people</option>
					        		<option value="2 people">2 people</option>
					        		<option value="3 people">3 people</option>
					        		<option value="4 people">4 people</option>
					        		<option value="5 people">5 people</option>
					        	</select>
					        	<span class="lnr lnr-chevron-down"></span>
				        	</div>
				        	<div class="form-holder">
			                	<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" placeholder="Date">
			                    <span class="lnr lnr-calendar-full big"></span>
			                </div>
				        	<div class="form-holder">
			                	<input type="text" class="form-control time-picker" placeholder="Time">
			                    <span class="lnr lnr-clock big"></span>
			                </div>
			                <button class="au-btn tp-resizeme" 
			                data-fontsize="['18', '18', '18', '18', '18']"
			                >Book now</button>
			    		</div>
			        </form>
		    	</div>
		    </div>

		    <!-- WELCOME TO ROYATE -->
		    <section class="welcome section-primary pt-150 pb-110">
		    	<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="image-group">
								<div class="row">
									<div class="col-md-6">
										<div class="place-holder-1">
										</div>
									</div>
									<div class="col-md-6 ml--10">
										<div class="place-holder-2">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="welcome-content">
								<div class="section-header text-left">
									<h2>Welcome to HaFood</h2>
									<span>~ Luxury & Quality ~</span>
								</div>
								<div class="body">
									<p>Fiere d'etre a votre service</p>
									<a href="about-us.html" class="au-btn__readmore">Read More</a>									
								</div>
							</div>
						</div>
					</div>
		    	</div>
		    </section>
			
			
			<!-- OUR STORY -->
			<section class="our-story">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-xl-6 px-0 order-2 order-lg-1">
							<div class="our-story-primary style-1">
								<div class="inner">
									<div class="heading">
										<h2>Our Story</h2>
									</div>
									<div class="body">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
										<div class="end">
											<img src="images/signature.png" alt="">
											<div class="name">
												<h6>
													<a href="#">Harry Price</a>
												</h6>
												<span>Restaurant Owners</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>	
						</div>
						<div class="col-lg-6 col-xl-6 px-0 order-1 order-lg-2">
							
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