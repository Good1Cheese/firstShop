<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact Us | Malias</title>
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
							<li><a href="/">Home</a></li>
							<li class="active"><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-3">
                    </div>
						<!-- START SMALL-PRODUCT-AREA -->
						<!-- END SMALL-PRODUCT-AREA -->
					</div>
					<div class="col-md-9">
						<!-- Start Map area -->
						<div class="map-area">
							<div id="googleMap" style="width:100%;height:350px;"></div>
						</div>
						<!-- End Map area -->
						<!-- Start Contact-Message -->
						<div class="contact-message">
							<fieldset>
								<form method="post" action="mail.php">
									<legend>Contact Form</legend>
									<div class="form-group form-horizontal">
										<div class="row">
											<label class="col-sm-2 control-label"><sup>*</sup>Your Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="name"/>
											</div>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="row">
											<label class="col-sm-2 control-label"><sup>*</sup>E-Mail Address</label>
											<div class="col-sm-10">
												<input class="form-control" type="email" name="email"/>
											</div>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="row">
											<label class="col-sm-2 control-label"><sup>*</sup>Enquiry</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="10" name="message"></textarea>
											</div>
										</div>
									</div>
									<div class="buttons pull-right">
										<input class="btn btn-primary" type="submit" value="submit" name="submit"/>
									</div>
								</form>
							</fieldset>
						</div>
						<!-- End Contact-Message -->
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
        <script src="js/jquery-price-slider.js"></script>
        <!-- Nivo slider js
		============================================ --> 		
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		
		<script>
			function initialize() {
				var mapOptions = {
					zoom: 5,
					scrollwheel: false,
					center: new google.maps.LatLng(40.7058316, -74.2581978)
				};

				var map = new google.maps.Map(document.getElementById('googleMap'),
					mapOptions);

				var marker = new google.maps.Marker({
					position: map.getCenter(),
					animation:google.maps.Animation.BOUNCE,
					icon: 'img/map-marker.png',
					map: map
				});
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>
