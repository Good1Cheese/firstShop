<?php require 'includes/db.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Account | Malias</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/header.css"
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
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
							<li class="active"><a href="my-account.php">My Account</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-3">
                        <?php require 'templates/sidebar.php'; ?>
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
						<!-- entry-header-area start -->
						<div class="entry-header-area">
							<div class="row">
								<div class="col-md-12">
									<div class="entry-header">
										<h2 class="entry-title">My Account</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- entry-header-area end -->
						<!-- Start checkout-area -->
						<div class="checkout-area">
							<div class="row">
								<div class="col-md-12">
									<!-- Accordion start -->
									<div class="panel-group" id="accordion">
										<!-- Start My-First-Address -->
                                        <br><br><br>
                                        <?php
                                        if(isset($_SESSION['log_user']))
                                        {
                                            $user = R::findOne('users', 'id = ?', array($_SESSION['log_user']['id']));
                                            $avatar = $user['image'];
                                        } else {
                                            echo "<script>confirm('Чтобы увидеть профиль вам нужно зарегистриваться')</script>";
                                            echo "<script>window.location.href='http://shop/';</script>";
                                        }
                                        ?>
                                        <div class="container">
                                            <div id="main">
                                                <div class="row" id="real-estates-detail">
                                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <header class="panel-title">
                                                                    <div class="text-center">
                                                                          <strong>user</strong>
                                                                    </div>
                                                                </header>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="text-center" id="author">
                                                                    <?php
                                                                    if(isset($user['image'])) :
                                                                      echo "<img width='198' height='198' src='avatars/$avatar'>";
                                                                    else :
                                                                        echo '<img width="198" height="198" src="/avatars/avatar.png"/>';
                                                                    endif
                                                                    ?>
                                                                    <h3><?php echo $user['name'] ?></h3>
                                                                    <small class="label label-warning"><?php echo $user['country'] ?></small>
                                                                    <p style="margin-top: 15px;"><?php echo $user['description'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-xs-12">
                                                        <div class="panel">
                                                            <div class="panel-body">
                                                                <ul class="nav nav-pills">
                                                                    <li class="active"><a href="settings_user.php">Редактировать</a></li>
                                                                </ul>
                                                                <div  class="tab-content">
                                                                    <hr>
                                                                    <div class="tab-pane fade active in" id="detail">
                                                                        <h4>Описание профиля</h4>
                                                                        <table class="table table-th-block">
                                                                            <tbody>
                                                                            <tr><td class="active">Страна:</td><td><?php empte($user['country']); ?></td></tr>
                                                                            <tr><td class="active">Город:</td><td><?php empte($user['city']); ?></td></tr>
                                                                            <tr><td class="active">Пол:</td><td><?php empte($user['sex']); ?></td></tr>
                                                                            <tr><td class="active">Полных лет:</td><td><?php empte($user['age']); ?></td></tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- /.main -->
                                    </div><!-- /.container -->
                                </div>
										</div>
										<!-- End My-First-Address -->


									</div>
									<!-- Accordion end -->
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->

						<!-- My-Account-Area start -->
						<div class="my-account-area">
							<div class="row">
								<div class="col-md-6">

								</div>
							</div>
						</div>
						<!-- My-Account-Area end -->
					</div>
				</div>
			</div>
			<!-- START BRAND-LOGO-AREA -->
			<div class="brand-logo-area carosel-navigation">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="area-title">
								<h3 class="title-group border-red gfont-1">Brand Logo</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-brand-logo">
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/1.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/2.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/3.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/4.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/5.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/6.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/1.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/2.png" alt=""></a>
								</div>
							</div>
							<div class="col-md-2">
								<div class="single-brand-logo">
									<a href="#"><img src="img/brand/3.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END BRAND-LOGO-AREA -->
			<!-- START SUBSCRIBE-AREA -->
			<div class="subscribe-area">
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
