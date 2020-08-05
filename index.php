<?php
require 'includes/db.php';
require 'includes/addtocart.php';
require 'includes/addtowischlist.php';
require 'includes/addcompare.php';
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 1 | Malias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

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
<!-- bootstrap JS -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php require 'templates/header.php'; ?>

<!-- Category slider area start -->
<div class="category-slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php require 'templates/sidebar.php'; ?>
            </div>
            <div class="col-md-9">
                <!-- slider -->
                <div class="slider-area">
                    <div class="bend niceties preview-1">
                        <div id="ensign-nivoslider" class="slides">
                            <img src="img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
                            <img src="img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
                            <img src="img/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3"/><!--
									<img src="img/sliders/slider-1/bg4.jpg" alt="" title="#slider-direction-4"/>  -->
                        </div>
                        <!-- direction 1 -->
                        <div id="slider-direction-1" class="t-lfr slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-1-1 ">
                                <h1 class="title1">LUMIA 888 DESIGN</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2">
                                <p class="title2">Elegant design for business</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <h2 class="title3">$966.82</h2>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-1-4">
                                <a href="#" class="title4">shopping now</a>
                            </div>
                        </div>
                        <!-- direction 2 -->
                        <div id="slider-direction-2" class="slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-2-1">
                                <h1 class="title1">WATERPROOF SMARTPHONE</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2-2">
                                <p class="title2">RODUCTS ARE EYE-CATCHING DESIGN. YOU CAN TAKE PHOTOS EVEN WHEN Y</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-2-3">
                                <a href="#" class="title3">shopping now</a>
                            </div>
                        </div>
                        <!-- direction 3 -->
                        <div id="slider-direction-3" class="slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-3-1">
                                <h2 class="title1">BUY AIR LACOTE</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-3-2">
                                <h1 class="title2">SUPER TABLET, SUPER GIFT</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3-3">
                                <p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-3-4">
                                <a href="#" class="title4">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider end-->
            </div>
        </div>
    </div>
</div>
<!-- Category slider area End -->
<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <?php require 'templates/hotDeals.php'; ?>
                        </div>
                    </div>
                </div>
                <!-- END HOT-DEALS-AREA -->
            <?php require 'templates/bestSidebar.php';?>
                <!-- START SIDEBAR-BANNER -->
                <div class="sidebar-banner">
                    <div class="active-sidebar-banner">
                        <div class="single-sidebar-banner">
                            <a href="#"><img src="img/banner/1.jpg" alt="Product Banner"></a>
                        </div>
                        <div class="single-sidebar-banner">
                            <a href="#"><img src="img/banner/2.jpg" alt="Product Banner"></a>
                        </div>
                    </div>
                </div>
                <!-- END SIDEBAR-BANNER -->
            </div>
            <div class="col-md-9 col-sm-9">
                <!-- START PRODUCT-BANNER -->
                <div class="product-banner home1-banner">
                    <div class="row">
                        <div class="col-md-7 banner-box1">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/3.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-1">
                                    <h2>head phone 2015</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 banner-box2">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/4.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-2">
                                    <h2>Deals <span>50%</span></h2>
                                    <p>lumina n85</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-BANNER -->
                <!-- START PRODUCT-AREA (1) -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Electronic</h3>
                                    <div class="message_box" style="margin:10px 0px;">
                                        <?php echo $text ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <div class="clear"></div>
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <?php $electronic_sec = R::findLike('products', array(
                                                    'sec_category_id' => array('10', '3')
                                                ), 'ORDER BY id desc LIMIT 4');
                                                foreach($electronic_sec as $item ) :
                                                    ?>
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <!--<span class="new">new</span>-->
                                                            </div>
                                                            <div class="sale-off">
                                                                <!--<span class="sale-percent">-55%</span>-->
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="/product/<?php echo $item['id'] ?>">
                                                                    <img style="height: 180px;" class="primary-img" height="180px" width="180px" src="img\product\mediam\<?php echo $item['image'] ?>" alt="Product">
                                                                    <img class="secondary-img" src="img\product\mediam\<?php echo $item['image'] ?>" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a id="title" href="#"><?php echo $item['title'] ?></a></h5>
                                                                <div class="price-box">
                                                                    <span id="price" class="price">$<?php echo $item['price'] ?>.00</span>
                                                                    <!--<span class="old-price">$120.00</span>-->
                                                                </div>
                                                                <span class="rating">
																		 <?php rate($item['rate']); ?>
																	</span>
                                                            </div>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <form method="post">
                                                                            <input type="hidden" name="check" value="<?php echo $item['title'] ?>" />
                                                                            <button type="submit" name="btn-buy" class="btn-buy">Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <button name="do_wish" type="submit"><a data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></button>
                                                                        <button type="submit" name="do_compare"><a data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-1-1 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
                <!-- END PRODUCT-AREA (1) -->
                <!-- START PRODUCT-AREA (2) -->
                <div class="product-area">
                    <!-- Start Product-Menu -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product-menu  border-red">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Computer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Start Product = display-2-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <?php $electronic_sec = R::findLike('products', array(
                                                    'sec_category_id' => array('12', '4')
                                                ), 'ORDER BY id desc LIMIT 4');
                                                foreach($electronic_sec as $item ) :
                                                    ?>
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <!--<span class="new">new</span>-->
                                                            </div>
                                                            <div class="sale-off">
                                                                <!--<span class="sale-percent">-55%</span>-->
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="product/<?php echo $item['id'] ?>">
                                                                    <img class="primary-img" height="180px;" width="180px;" src="img\product\mediam\<?php echo $item['image'] ?>" alt="Product">
                                                                    <img class="secondary-img" src="img\product\mediam\<?php echo $item['image'] ?>" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#"><?php echo $item['title'] ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$<?php echo $item['price'] ?>.00</span>
                                                                    <!--<span class="old-price">$120.00</span>-->
                                                                </div>
                                                                <span class="rating">
																	 <?php rate($item['rate']); ?>
																	</span>
                                                            </div>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <form method="post">
                                                                            <input type="hidden" name="check" value="<?php echo $item['title'] ?>" />
                                                                            <button type="submit" name="btn-buy" class="btn-buy">Add to Cart</button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                <?php endforeach; ?>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-2-1 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
                <!-- END PRODUCT-AREA (2) -->
                <!-- START PRODUCT-AREA (3) -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Smart Phone</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Start Product = display-3-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <?php $electronic_sec = R::findLike('products', array(
                                                    'sec_category_id' => array('3')
                                                ), 'ORDER BY id desc LIMIT 4');
                                                foreach($electronic_sec as $item ) :
                                                    ?>
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <!--<span class="new">new</span>-->
                                                            </div>
                                                            <div class="sale-off">
                                                                <!--<span class="sale-percent">-55%</span>-->
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="product/<?php echo $item['id'] ?>">
                                                                    <img style="height: 180px;" class="primary-img" height="180px" width="180px" src="img\product\mediam\<?php echo $item['image'] ?>" alt="Product">
                                                                    <img class="secondary-img" src="img\product\mediam\<?php echo $item['image'] ?>" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#"><?php echo $item['title'] ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$<?php echo $item['price'] ?>.00</span>
                                                                    <!--<span class="old-price">$120.00</span>-->
                                                                </div>
                                                                <span class="rating">
																		 <?php rate($item['rate']); ?>
																	</span>
                                                            </div>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <form method="post">
                                                                            <input type="hidden" name="check" value="<?php echo $item['title'] ?>" />
                                                                            <button type="submit" name="btn-buy" class="btn-buy">Add to Cart</button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                <?php endforeach; ?>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-3-1 -->
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA (3) -->
                <!-- START PRODUCT-BANNER -->
                <div class="product-banner">
                    <div class="row">
                        <div class="col-md-7 banner-box1">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/5.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-1">
                                    <h2>ApBle 4s</h2>
                                    <p>Vibrant colors beautifully designed</p>
                                    <span>$888.66</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 banner-box2">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/6.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-2">
                                    <h2>Htc <span>N8.</span></h2>
                                    <p>lumina n85</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-BANNER -->

                <!-- END SMALL-PRODUCT-AREA (1) -->
            </div>
        </div>
    </div>

    <!-- START SUBSCRIBE-AREA -->
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                    <div class="subscribe">
                        <form method="post">
                            <input type="email" required placeholder="Enter Your E-mail">
                            <button name="do_spam" type="submit">Subscribe</button>
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
<!-- END HOME-PAGE-CONTENT -->
<?php require 'templates/footer.php';?>
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="#" src="img/product/quickview-photo.jpg"/>
                            </div>
                        </div><!-- .product-images -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>

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
