<!-- HEADER-AREA START -->
<header class="header-area">
    <!-- HEADER-TOP START -->
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="top-menu">
                        <!-- Start Language -->
                        <div>
                            <div id="google_translate_element"></div>
                        </div>
                        <!-- End Language -->
                    </div>
                    <!-- Start Top-Link -->
                    <div class="top-link">
                        <ul style="margin-bottom: -3.7px;" class="link">
                            <?php if(! isset($_SESSION['log_user'])) : ?>
                                <li><a href="/registration.php"><i class="fa fa-user"></i>Sign up</a></li>
                                <li><a href="/login.php"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <?php else : ?>
                                <li><a href="/my-account.php"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="/compare.php"><i class="fa fa-compress"></i>Compare List</a></li>
                            <?php
                                if(!empty($_SESSION['wish_list'])) :
                                    $res = array_keys($_SESSION['wish_list']);
                                    $result = count($res);
                            ?>
                                <li><a href="/wishlist.php"><i class="fa fa-heart"></i> Wish List (<?php echo $result; ?>)</a></li>

                            <?php else : ?>
                                <li><a href="/wishlist.php"><i class="fa fa-heart"></i> Wish List (0)</a></li>
                            <?php endif; ?>
                                <li><a href="/logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End Top-Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <div class="header-middle">
        <div class="container">
            <!-- Start Support-Client -->
            <div class="support-client hidden-xs">
                <div class="row">
                    <!-- Start Single-Support -->
                    <div class="col-md-3 hidden-sm">
                        <div class="single-support">
                            <div class="support-content">
                                <i class="fa fa-clock-o"></i>
                                <div class="support-text">
                                    <h1 class="zero gfont-1">working time</h1>
                                    <p>Mon- Sun: 8.00 - 18.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-truck"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Free shipping</h1>
                                <p>On order over $199</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-money"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Money back 100%</h1>
                                <p>Within 30 Days after delivery</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-phone-square"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Phone: 0123456789</h1>
                                <p>Order Online Now !</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                </div>
            </div>
            <!-- End Support-Client -->
            <!-- Start logo & Search Box -->
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="/index.php" title="Malias"><img src="/img/logo.png" alt="Malias"></a>
                    </div>
                </div>

                <div class="col-md-9 col-sm-12">
                    <div class="quick-access">
                        <div class="search-by-category">
                            <div class="header-search">
                                <form style="margin: 0px;" method="get">
                                    <input required type="text" name="search_value" placeholder="Search">
                                    <button name="do_search" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <?php
                        if(isset($_SESSION['log_user'])) :
                        ?>
                        <div class="top-cart">
                            <ul>
                                <li>
                                    <a href="/cart.php">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
                                                    <span class="cart-item">item(s) :</span>
                                                <?php if(!empty($_SESSION["shop_cart"])) :
                                                    $cart_count = count(array_keys($_SESSION["shop_cart"]));
                                                        echo '<span class="cart-item_2">'.$cart_count.'</span>';
                                                      else :
                                                        echo '<span class="cart-item_2">0</span>';
                                                      endif;
                                                ?>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <?php else : ?>
                            <div class="top-cart">
                                <ul>
                                    <li>
                                        <a href="/cart.php">
                                            <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                            <span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
                                                    <span class="cart-item">item(s) :</span>
                                                    <span class="cart-item_2">0</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- End logo & Search Box -->
        </div>
    </div>
    <!-- HEADER-MIDDLE END -->
    <!-- START MAINMENU-AREA -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu hidden-sm hidden-xs">
                        <nav>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about.php">About Us</a></li>
                                <li class="new"><a href="/shop-list.php">New Products</a></li>
                                <li><a href="/contact.php">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN-MENU-AREA -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav id="mobile-menu">
                        <ul>
                            <li><a href="/index.php">Home</a></li>
                            <li><a href="/about.php">About Us</a></li>
                            <li><a href="/shop-list.php">New Products</a></li>
                            <li><a href="/contact.php">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
<!-- HEADER AREA END -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

