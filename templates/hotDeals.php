<!-- START HOT-DEALS-AREA -->
<div class="hot-deals-area carosel-circle">
    <div class="row">
        <div class="col-md-12">
            <div class="area-title">
                <h3 class="title-group border-red gfont-1">Hot Deals</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="active-hot-deals">
            <?php $hotDealItem = R::findOne('products', 'rate = ?', [5]);
            ?>
            <!-- Start Single-hot-deals -->
            <div class="col-xs-12">
                <div class="single-hot-deals">
                    <div class="hot-deals-photo">
                        <a href="shop/product/<?php echo $hotDealItem['id'] ?>">
                            <img src="img/product/mediam/<?php echo $hotDealItem['image'] ?>" alt="Product">
                        </a>
                    </div>
                    <div class="count-down">
                        <div class="timer">
                            <div data-countdown="2017/12/31"></div>
                        </div>
                    </div>
                    <div class="hot-deals-text">
                        <h5><a href="#" class="name-group"><?php echo $hotDealItem['title'] ?></a></h5>
                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                        <div class="price-box">
                            <span class="price gfont-2"><?php echo $hotDealItem['price'] ?></span>
                            <span class="old-price gfont-2"><?php $prevPrice = 1.5 ; $prevPrice *= $hotDealItem['price']; echo $prevPrice;?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single-hot-deals -->