<?php require 'includes/db.php'; ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <style>
        body{background:url(https://bootstraptema.ru/images/bg/bg-1.png)}
        ​
        #main {
            background-color: #f2f2f2;
            padding: 20px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            border-bottom: 4px solid #ddd;
        }
        #real-estates-detail #author img {
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            border: 5px solid #ecf0f1;
            margin-bottom: 10px;
        }
        #main {
            background-color: #f2f2f2;
            padding: 20px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            border-bottom: 4px solid #ddd;
        }
        #real-estates-detail #author img {
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            border: 5px solid #ecf0f1;
            margin-bottom: 10px;
        }
        #real-estates-detail .sosmed-author i.fa {
            width: 30px;
            height: 30px;
            border: 2px solid #bdc3c7;
            color: #bdc3c7;
            padding-top: 6px;
            margin-top: 10px;
        }
        .panel-default .panel-heading {
            background-color: #fff;
        }
        #real-estates-detail .slides li img {
            height: 450px;
        }
    </style>
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
                    <li class="active"><a href="my-account.php">My Account</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                <?php require 'templates/sidebar.php'; ?>
            </div>
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
                                <h2 class="entry-title"><a href="my-account.php">My Account</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- entry-header-area end -->
                <!-- Start checkout-area -->
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Ваша страна</label>
                        <input type="text" name="country" class="form-control rounded" placeholder="Укажите Ваше Страну" value="<?php echo $_SESSION['log_user']['country'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Ваш город</label>
                        <input type="text" name="city" class="form-control rounded" placeholder="Укажите Ваш Город" value="<?php echo $_SESSION['log_user']['city'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Ваш пол</label>
                        <input type="text" name="sex" class="form-control rounded" placeholder="Укажите Ваш Пол" value="<?php echo $_SESSION['log_user']['sex'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Ваш возраст </label>
                        <input type="number" name="age" class="form-control rounded" placeholder="Укажите Ваш Возраст" value="<?php echo $_SESSION['log_user']['age'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Ваша аватарка</label>
                        <p><input type="file" name="avatar"></p>
                    </div>
                    <p><?php echo $error; ?></p>
                    <div class="form-group">
                        <label>Немного о себе</label>
                    <textarea class="form-control rounded" name="description"  style="height: 100px;"><?php echo $_SESSION['log_user']['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="do_change" class="btn btn-success" value="Submit">
                    </div>
                </form>
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
