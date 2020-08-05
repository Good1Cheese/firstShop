<?php
require 'includes/db.php';
require 'includes/addtocart.php';
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

    <section style="height: 600px" class="page-content">
        <div style=" height:300px; width: 100%; display: flex;">
            <?php
            if(empty($_SESSION['compare_list_2']) and empty($_SESSION['compare_list_1'])) : ?>
              <h2>Your compare list is empty</h2>
            <?php
            else :
                if(!empty($_SESSION['compare_list_1'])) :
                    foreach($_SESSION['compare_list_1'] as $item) : ?>
                <div style="padding:0 50px 0 50px;" class="Wishlist-area">
                    <div class="table-responsive">
                        <table style="width:847px; height:104px;" class="table table-bordered table-hover">
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
                            <tr>
                                <td class="text-center">
                                    <a href="product/10"><img width="50px" height="50px" src="img/product/mediam/<?php echo $item['img'] ?>" alt="#" /></a>
                                </td>
                                <td class="text-left">
                                    <a href="/product/10"><?php echo $item['title']  ?></a>
                                </td>
                                <td class="text-right">In Stock</td>
                                <td class="text-right">
                                    <div class="price-box">
                                        <span class="price"><?php echo '$'.$item['price']  ?></span>
                                        <span class="old-price"><?php $unit_price = $item['price']*1.6; echo '$'. $unit_price; ?></span>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <form method="post">
                                        <input type="hidden" name="check" value="<?php echo 1; ?>">
                                        <button type="submit" name="btn-buy" class="btn btn-primary" data-toggle="tooltip" title="Add to Cart" ><i class="fa fa-shopping-cart"></i></button>
                                        <button style="background: red;" type="submit" name="ComplainRem" class="btn btn-primary"><i class="fa fa-times"></i></button>
                                    </form>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach;
            endif; ?>
            <?php
                if(!empty($_SESSION['compare_list_2'])) :
                    foreach($_SESSION['compare_list_2'] as $item) : ?>
                        <div class="Wishlist-area">
                            <div class="table-responsive">
                                <table style="width:847px; height:104px;" class="table table-bordered table-hover">
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
                                    <tr>
                                        <td class="text-center">
                                            <a href="product/10"><img width="50px" height="50px" src="img/product/mediam/<?php echo $item['img'] ?>" alt="#" /></a>
                                        </td>
                                        <td class="text-left">
                                            <a href="/product/10"><?php echo $item['title']  ?></a>
                                        </td>
                                        <td class="text-right">In Stock</td>
                                        <td class="text-right">
                                            <div class="price-box">
                                                <span class="price"><?php echo '$'.$item['price']  ?></span>
                                                <span class="old-price"><?php $unit_price = $item['price']*1.6; echo '$'. $unit_price; ?></span>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <form method="post">
                                                <input type="hidden" name="check" value="<?php echo 2; ?>">
                                                <button type="submit" name="btn-buy" class="btn btn-primary" data-toggle="tooltip" title="Add to Cart" ><i class="fa fa-shopping-cart"></i></button>
                                                <button style="background: red;" type="submit" name="ComplainRem" class="btn btn-primary"><i class="fa fa-times"></i></button>
                                            </form>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                <?php endforeach;
                endif;
                endif;?>
    </section>

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

