<!-- START SMALL-PRODUCT-AREA -->
<div class="small-product-area carosel-navigation">
    <div class="row">
        <div class="col-md-12">
            <div class="area-title">
                <h3 class="title-group gfont-1">Bestseller</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="active-bestseller sidebar">
            <div class="col-xs-12">
                <?php $bestProduct = R::findLike('products', ['rate' => ['5']], 'LIMIT 4');
                foreach($bestProduct as $item) :
                    ?>
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="/product/<?php echo $item['id'] ?>">
                                <img class="primary-img" height="104px;" width="104px;" src="/img/product/mediam/<?php echo $item['image'] ?>" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="/product/<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a></h5>
                            <div class="price-box">
                                <span class="price"><?php echo '$'.$item['price'] ?></span>
                                <span class="old-price"><?php $oldPrice = 1.6; $oldPrice *= $item['price']; echo '$'.$oldPrice ?></span>
                            </div>
                            <span class="rating">
                                      <?php rate($item['rate']); ?>
                            </span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- END SMALL-PRODUCT-AREA -->