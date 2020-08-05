<?php require 'includes/db.php'; ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Malias shop</title>
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
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

<?php require 'templates/header.php'; $errors = array(); $data = $_POST; ?>
<div class="register">
    <h2 style="margin-bottom: 30px;">Login</h2>
    <form method="post" action="login.php">
        <div style="margin-right: auto;margin-left: auto;">
            <p>name</p>
            <p><input type="text" name="name" required maxlength="15" value="<?php echo $data['name'] ?>"></p>
            <p>email</p>
            <p><input type="email" name="email" required maxlength="15" value="<?php echo $data['email'] ?>"></p>
            <p>password</p>
            <p><input type="password" name="password" required minlength="8" value="<?php echo $data['password'] ?>"></p>
            <input type="submit" name="send" value="Submit">
        </div>
    </form>
    <?php
    if( isset($data['send']) ) :

        if(! empty($errors))
        {
            echo '<div style="margin: 15px;">'.'<p style="color:forestgreen;">'.array_shift($errors).'</p>'.'</div>';
        } else {
            $user = R::findOne('users', 'name = ? AND password =?', array($data['name'], $data['password']));
            if($user)
            {
                $_SESSION['log_user'] = $user;
                echo "<script>window.location.href='http://shop/';</script>";
            } else {
                echo  'Че то как то лох';
            }
        }

    endif
    ?>
</div>

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

                        <div class="product-info">
                            <h1>Aenean eu tristique</h1>
                            <div class="price-box-3">
                                <hr />
                                <div class="s-price-box">
                                    <span class="new-price">$160.00</span>
                                    <span class="old-price">$190.00</span>
                                </div>
                                <hr />
                            </div>
                            <a href="shop.php" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->


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

