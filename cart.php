<?php require 'includes/db.php'; require 'includes/addtocart.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart | Malias</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/header.css"
    </head>
    <body>

        <!-- Add your site or application content here -->

        <?php require 'templates/header.php'; ?>

		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="#">Shopping Cart</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>categories</h2>
	                            </div>
	                            <div class="category-menu-list">
	                                <ul>
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus active">
	                                        <a href="#">Cameras & Photography</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Handbags</a>
	                                                <ul>
	                                                    <li><a href="#">Blouses And Shirts</a></li>
	                                                    <li><a href="#">Clutches</a></li>
	                                                    <li><a href="#">Cross Body</a></li>
	                                                    <li><a href="#">Satchels</a></li>
	                                                    <li><a href="#">Sholuder</a></li>
	                                                    <li><a href="#">Toter</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Tops</a>
	                                                <ul>
	                                                    <li><a href="#">Evening</a></li>
	                                                    <li><a href="#">Long Sleeved</a></li>
	                                                    <li><a href="#">Short Sleeved</a></li>
	                                                    <li><a href="#">Sleeveless</a></li>
	                                                    <li><a href="#">T-Shirts</a></li>
	                                                    <li><a href="#">Tanks And Camis</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Dresses</a>
	                                                <ul>
	                                                    <li><a href="#">Belts</a></li>
	                                                    <li><a href="#">Cocktail</a></li>
	                                                    <li><a href="#">Day</a></li>
	                                                    <li><a href="#">Evening</a></li>
	                                                    <li><a href="#">Sundresses</a></li>
	                                                    <li><a href="#">Sweater</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Accessories</a>
	                                                <ul>
	                                                    <li><a href="#">Bras</a></li>
	                                                    <li><a href="#">Hair Accessories</a></li>
	                                                    <li><a href="#">Hats And Gloves</a></li>
	                                                    <li><a href="#">Lifestyle</a></li>
	                                                    <li><a href="#">Scarves</a></li>
	                                                    <li><a href="#">Small Leathers</a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
										<!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="#">Tv & Audio</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">BAGS</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">CLOTHING</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">LINGERIE</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Shoes</a>
	                                                <ul>
	                                                    <li><a href="#">Blazers</a></li>
	                                                    <li><a href="#">Bootees Bags</a></li>
	                                                    <li><a href="#">Jackets</a></li>
	                                                    <li><a href="#">Shoes</a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus">
	                                        <a href="#">SmartPhones & Tablets</a>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu cat-left-drop-menu-photo-contain">
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">Women</a>
	                                                <ul>
	                                                    <li><a href="#">Belts</a></li>
	                                                    <li><a href="#">Jewelry</a></li>
	                                                    <li><a href="#">Socks</a></li>
	                                                    <li><a href="#">Sunglasses</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left">
	                                                <a class="menu-item-heading" href="#">CLOTHING</a>
	                                                <ul>
	                                                    <li><a href="#">Boots</a></li>
	                                                    <li><a href="#">Brands We Love</a></li>
	                                                    <li><a href="#">Casuals</a></li>
	                                                    <li><a href="#">Gifts And Tech</a></li>
	                                                    <li><a href="#">Gifts And Tech</a></li>
	                                                    <li><a href="#">Slippers</a></li>
	                                                    <li><a href="#">Speakers</a></li>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left cat-left-drop-menu-photo">
	                                            	<a href="#"><img src="img/megamenu/vmega_blog1.jpg" alt="Product"></a>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li>
	                                        <a href="#">Laptop & Computer</a>
	                                    </li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="#">Sony</a></li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="#">Mobile</a></li>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <li><a href="#">Sports</a></li>
	                                    <!-- Single menu end -->

	                                    <!-- MENU ACCORDION START -->
	                                    <li class=" rx-child">
	                                        <a href="#">Books</a>
	                                    </li>
	                                    <li class=" rx-parent">
	                                        <a class="rx-default">
	                                            More categories <span class="cat-thumb  fa fa-plus"></span> 
	                                        </a>
	                                        <a class="rx-show">
	                                            close menu <span class="cat-thumb  fa fa-minus"></span>
	                                        </a>
	                                    </li>
	                                    <!-- MENU ACCORDION END -->
	                                </ul>
	                            </div>
	                        </div>
	                    </div>	
						<!-- END CATEGORY-MENU-LIST -->
						<!-- START SMALL-PRODUCT-AREA -->
						<?php require 'templates/bestSidebar.php'?>
						<!-- END SMALL-PRODUCT-AREA -->
					</div>
					<div class="col-md-9">
						<!-- START PRODUCT-BANNER -->
						<div class="product-banner">
							<div class="row">
								<div class="col-xs-12">
									<div class="banner">
										<a href="#"><img src="img/banner/12.jpg" alt="Product Banner"></a>
									</div>
								</div>
							</div>
						</div>
						<!-- END PRODUCT-BANNER -->
						<!-- Start Shopping-Cart -->
						<div class="shopping-cart">
							<div class="row">
								<div class="col-md-12">
									<div class="cart-title">
										<h2 class="entry-title">Shopping Cart</h2>
									</div>
									<!-- Start Table -->
									<div  style="margin-bottom: 30px; overflow: hidden;" class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<td class="text-center">Image</td>
													<td class="text-left">Product Name</td>
													<td class="text-left">Quantity</td>
													<td class="text-right">Unit Price</td>
													<td class="text-right">Total</td>
												</tr>
											</thead>
											<tbody>
                                          <?php
                                          if(isset($_SESSION['log_user'])) :
                                          if( ! empty($_SESSION['shop_cart']) ) :
                                              foreach( $_SESSION['shop_cart'] as $product ) :  ?>
												<tr>
													<td class="text-center">
														<a href="#"><img style="height: 100px;" class="img-thumbnail" src="img/product/mediam/<?php echo $product['image'] ?>" alt="#" /></a>
													</td>
													<td class="text-left">
														<a href="#"><?php echo $product['title'] ?></a>
													</td>
													<td class="text-left">
														<div class="btn-block cart-put">
                                                            <form method="post">
<!--                                                                --><?php //if(isset($_POST['change'])) {$_SESSION[$product['title']]['quantity'] = $_POST['num'];} ?>
															<input class="form-control" name="num" type="number" placeholder="<?php echo $product['quantity'] ?>" />
															<div class="input-group-btn cart-buttons">
                                                                    <input type='hidden' name='code' value="<?php echo $product['title']; ?>" />
                                                                    <input type='hidden' name='action' value="change" />
                                                                    <input type="submit" name="change" class="btn btn-primary" data-toggle="tooltip" value="Update">
                                                            </form>
                                                            <form method="post">
                                                                    <input type='hidden' name='code' value="<?php echo $product['title']; ?>" />
                                                                    <input type='hidden' name='action' value="remove" />
                                                                    <input type="submit" name="remove" class="btn btn-danger" data-toggle="tooltip" value="Remove">
                                                            </form>
															</div>
														</div>
													</td>
													<td class="text-right"><?php echo '$'. $product['price'] ?></td>
													<td class="text-right"><?php $unit_price = $product['price']*$product['quantity']; echo '$'. $unit_price; ?></td>
												</tr>
                                            <?php $total_price += $product['price'] * $product['quantity'];
                                                  endforeach;
                                            else : ?>
                                            <h2>Login or sign up to see your cart</h2>
                                            <?php endif; ?>
											</tbody>
										</table>
                                        <?php echo $text; ?>
                                        <div class="row">
                                            <div class="col-sm-4 col-sm-offset-8">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-right">
                                                            <strong>Total:</strong>
                                                        </td>
                                                        <td class="text-right"><?php echo '$'.$total_price; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
									</div>
                                <?php else : ?>
                                    <div style="padding: 30px;" class="text-left">
                                        <h2>Your cart is empty</h2>
                                    </div>
                                <?php endif; ?>
									<!-- End Table -->
									<div style="text-align: center;" class="shopping-checkout">
										<a style="margin-bottom: 5px;" href="/" class="btn btn-default ">Continue Shopping</a>
                                        <form method="post">
										<button type="submit" name="doCart"><a class="btn btn-primary ">Checkout</a></button>
                                        </form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->
					</div>
				</div>
			</div>
			<!-- START SUBSCRIBE-AREA -->
			<div style="margin-top: 100px;" class="subscribe-area">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-7 col-xs-12">
							<label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="Enter Your E-mail">
									<button type="submit">Subscribe</button>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-5 col-xs-12">
							<div class="social-media">
								<a href="#"><i class="fa fa-facebook fb"></i></a>
								<a href="#"><i class="fa fa-google-plus gp"></i></a>
								<a href="#"><i class="fa fa-twitter tt"></i></a>
								<a href="#"><i class="fa fa-youtube yt"></i></a>
								<a href="#"><i class="fa fa-linkedin li"></i></a>
								<a href="#"><i class="fa fa-rss rs"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- END SUBSCRIBE-AREA -->
		</section>
		<!-- END PAGE-CONTENT -->

        <?php require 'templates/footer.php';
        if(isset($_POST['doCart'])) {
            $_SESSION['order'] = array(
            'amout' => $total_price
            );
        }
        ?>

		<!-- jquery
		============================================ -->		
        <script src="js/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
		============================================ -->		
        <script src="js/countdon.min.js"></script>
        <!-- jquery-price-slider js
		============================================ --> 
        <script src="js/jquery-price-slider.js"></script>
        <!-- Nivo slider js
		============================================ --> 		
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
