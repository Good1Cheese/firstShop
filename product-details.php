<?php require 'includes/db.php'; require 'includes/addtocart.php'; addReview();
   $reviewsCount = R::count('reviews', 'products_id = ?', [$_GET['id']]); ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details | Malias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'><!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" />
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/header.css">
</head>
<body>

<!-- Add your site or application content here -->

<?php require 'templates/header.php'; ?>
<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php require 'templates/sidebar.php'; ?>
                <?php require 'templates/bestSidebar.php';?>
                <!-- START SIDEBAR-BANNER -->
                <div class="sidebar-banner hidden-sm hidden-xs">
                    <div class="active-sidebar-banner">
                        <div class="single-sidebar-banner">
                            <a href="#"><img src="/img/banner/1.jpg" alt="Product Banner"></a>
                        </div>
                        <div class="single-sidebar-banner">
                            <a href="#"><img src="/img/banner/2.jpg" alt="Product Banner"></a>
                        </div>
                    </div>
                </div>
                <!-- END SIDEBAR-BANNER -->
            </div>
            <?php $product = R::findOne('products', 'id = ?', array($_GET['id']) ); ?>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <!-- Start Toch-Prond-Area -->
                <div class="toch-prond-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="clear"></div>
                            <div class="tab-content">
                                <!-- Product = display-1-1 -->
                                <div role="tabpanel" class="tab-pane fade in active" id="display-1">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img width="325px" height="325px" src="/img/product/mediam/<?php echo $product['image'] ?>" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-1 -->
                                <!-- Start Product = display-1-2 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-2">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="/img/toch/2.jpg" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-2 -->
                                <!-- Start Product = di3play-1-3 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-3">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="/img/toch/3.jpg" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-3 -->
                                <!-- Start Product = di3play-1-4 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-4">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="/img/toch/4.jpg" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-4 -->
                            </div>

                            <!-- Start Toch-prond-Menu -->
                            <!--                            <div class="toch-prond-menu">-->
                            <!--                                <ul role="tablist">-->
                            <!--                                    <li role="presentation" class=" active"><a href="#display-1" role="tab" data-toggle="tab"><img src="/img/toch/1.jpg" alt="#" /></a></li>-->
                            <!--                                    <li role="presentation"><a href="#display-2" role="tab" data-toggle="tab"><img src="/img/toch/2.jpg" alt="#" /></a></li>-->
                            <!--                                    <li role="presentation"><a href="#display-3"  role="tab" data-toggle="tab"><img src="/img/toch/3.jpg" alt="#" /></a></li>-->
                            <!--                                    <li role="presentation"><a href="#display-4"  role="tab" data-toggle="tab"><img src="/img/toch/4.jpg" alt="#" /></a></li>-->
                            <!--                                </ul>-->
                            <!--                            </div>-->
                            <!-- End Toch-prond-Menu -->
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <h2 class="title-product"><?php echo $product['title'] ?></h2>
                            <div class="about-toch-prond">
                                <p>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
                                    <a href="#"><?php echo $reviewsCount.' reviews'; ?></a>
                                </p>
                                <hr />
                                <p class="short-description"><?php echo substr(strip_tags($product['text']) ,0, 500)?> ...</p>
                                <hr />
                                <span class="current-price">$<?php echo $product['price'] ?>.00</span>
                                <span class="item-stock">Availability: <span class="text-stock">In Stock</span></span>
                            </div>

                            <div class="product-quantity">
                                <form method="post">
                                    <input type="hidden" name="check" value="<?php echo $product['title'] ?>"/>
                                    <button type="submit" name="btn-buy" style="margin : 0 0 15px 0;" class="btn-buy toch-button toch-compare">Add to Cart</button>
                                </form>
                                <button type="submit" class="toch-button toch-wishlist">wishlist</button>
                                <button type="submit" class="toch-button toch-compare">Compare</button>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <!-- Start Toch-Box -->
                    <div class="toch-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Start Toch-Menu -->
                                <div class="toch-menu">
                                    <ul role="tablist">
                                        <li role="presentation" class=" active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (<?php echo $reviewsCount ?>)</a></li>
                                    </ul>
                                </div>
                                <!-- End Toch-Menu -->
                                <div class="tab-content toch-description-review">
                                    <!-- Start display-description -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="description">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-description">
                                                    <p><?php echo $product['text'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End display-description -->
                                    <!-- Start display-reviews -->
                                    <div role="tabpanel" class="tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-reviews">
                                                    <?php
                                                    $useful = R::load('products', $_GET['id']);
                                                    foreach($useful->ownReviewsList as $review) :
                                                        $user = R::find('users', 'id = ?', [$review->user_id]);
                                                        foreach ($user as $item) :
                                                            ?>
                                                    <div class="toch-table">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td><strong><?php echo $item['name'] ?></strong></td>
                                                                <td class="text-right"><strong><?php echo date('d/m/Y', strtotime($review->date) ) ?></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <p><?php echo $review->text ?></p>
                                                                   <?php rate($review->rate) ?>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php endforeach; endforeach; ?>
                                                    <form method="post">
                                                        <div class="toch-review-title">
                                                            <h2>Write a review</h2>
                                                        </div>
                                                        <div class="review-message">
                                                            <div class="col-xs-12">
                                                                <textarea name="reviewText" placeholder="Text of your review." class="form-control"></textarea>
                                                                </p>
                                                            </div>
                                                            <div class="help-block">
                                                                <span class="note">Note:</span>
                                                                HTML is not translated!
                                                            </div>
                                                            <div class="get-rating">
                                                                Bad
                                                                <input type="radio" value="1" name="rating" />
                                                                <input type="radio" value="2" name="rating" />
                                                                <input type="radio" value="3" name="rating" />
                                                                <input type="radio" value="4" name="rating" />
                                                                <input type="radio" value="5" name="rating" />
                                                                Good
                                                            </div>
                                                            <div class="buttons clearfix">
                                                                <button type="submit" name="do_review" class="btn btn-primary pull-right">Continue</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-reviews -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Toch-Box -->
                <!-- START PRODUCT-AREA -->
                <div style="min-height: 400px" class="product-area">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Related Products</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <div class="clear"></div>
                    <?php ?>

                    <!-- Start Product -->
                    <div class="product carosel-navigation">
                        <div class="row">
                            <div class="active-product-carosel">
                                <!-- Start Single-Product -->
                                <div class="col-xs-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-img" src="/img/product/mediam/3bg.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="#">Various Versions</a></h5>
                                            <div class="price-box">
                                                <span class="price">$80.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                            </div>
                        </div>

                    </div>
                    <!-- End Product -->
                </div>
                <!-- END PRODUCT-AREA -->
            </div>
            <!-- End Toch-Prond-Area -->
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
<script src="/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="/js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="/js/wow.min.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="/js/jquery.scrollUp.min.js"></script>
<!-- countdon.min JS
============================================ -->
<script src="/js/countdon.min.js"></script>
<!-- jquery-price-slider js
============================================ -->
<script src="/js/jquery-price-slider.js"></script>
<!-- Nivo slider js
============================================ -->
<script src="/js/jquery.nivo.slider.js" type="text/javascript"></script>
<!-- Image zoom js
============================================ -->
<script src="/js/imagezoom.js"></script>
<!-- plugins JS
============================================ -->
<script src="/js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="/js/main.js"></script>
</body>
</html>
