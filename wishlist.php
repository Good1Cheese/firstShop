<?php require 'includes/db.php'; require 'includes/addtowischlist.php'; require 'includes/addtocart.php';?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wish List | Malias</title>
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
							<li class="active"><a href="#">Wish List</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                    <?php require 'templates/sidebar.php'; ?>
						<!-- END CATEGORY-MENU-LIST -->
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
						<div class="Wishlist-area">
							<h2>My Wish List</h2>
                            <?php if(!isset($_SESSION['log_user'])) : ?>
                            <h2>Login or Sign up to edit your wish list</h2>
                            <?php elseif(empty($_SESSION['wish_list'])) : ?>
                            <h2>Your wish list is empty</h2>
                            <?php else : ?>
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<td class="text-center">Image</td>
											<td class="text-left">Product Name</td>
											<td class="text-right">Stock</td>
											<td class="text-right">Unit Price</td>
											<td class="text-right">Action</td>
										</tr>
									</thead>
                                    <tbody>
                                    <?php
                                    $item_2 = array_keys($_SESSION['wish_list'], $_POST['check']);
                                    $item = array_search($_POST['check'], $_SESSION['wish_list']);
                                    foreach($_SESSION['wish_list'] as $item=>$key) :
                                       $product = R::findOne('products', 'id = ?', [$key['id']]);
                                    ?>
										<tr>
											<td class="text-center">
												<a href="product/<?php echo $product['id'] ?>"><img width="50px" height="50px" src="img/product/mediam/<?php echo $product['image'] ?>" alt="#" /></a>
											</td>
											<td class="text-left">
												<a href="/product/<?php echo $product['id'] ?>"><?php echo $product['title'] ?></a>
											</td>
											<td class="text-right">In Stock</td>
											<td class="text-right">
												<div class="price-box">
													<span class="price"><?php echo '$'.$product['price'] ?></span>
													<span class="old-price"><?php echo '$'.$total_price += $product['price'] * 1.5;?></span>
												</div>
											</td>
											<td class="text-right">
                                                <form method="post">
                                                    <input type="hidden" name="checkWish" value="<?php echo $product['title'] ?>">
                                                    <input type="hidden" name="check" value="<?php echo $product['title'] ?>">
                                                    <input type="hidden" name="action" value="addCart">
												    <button type="submit" name="btn-buy" class="btn btn-primary" data-toggle="tooltip" title="Add to Cart" ><i class="fa fa-shopping-cart"></i></button>
                                                    <input type="hidden" name="action" value="removeWish">
                                                    <button style="background: red;" type="submit" name="wishRemove" class="btn btn-primary"><i class="fa fa-times"></i></button>
                                                </form>
												</a>
											</td>
										</tr>
                                    <?php endforeach; ?>
									</tbody>
								</table>
							</div>
                            <?php endif; ?>
						</div>
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

        <?php require 'templates/footer.php'; ?>
        

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
