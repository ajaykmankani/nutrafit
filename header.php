<?php include('variables.php'); ?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themegenix.net/html/<?= $name ?>-preview/<?= $name ?>/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 22:49:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $name ?> - <?= $tagline ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- Pre-loader-start -->
    <div id="preloader">
        <div class="tg-cube-grid">
            <div class="tg-cube tg-cube1"></div>
            <div class="tg-cube tg-cube2"></div>
            <div class="tg-cube tg-cube3"></div>
            <div class="tg-cube tg-cube4"></div>
            <div class="tg-cube tg-cube5"></div>
            <div class="tg-cube tg-cube6"></div>
            <div class="tg-cube tg-cube7"></div>
            <div class="tg-cube tg-cube8"></div>
            <div class="tg-cube tg-cube9"></div>
        </div>
    </div>
    <!-- Pre-loader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header id="home">
        <div id="header-top-fixed"></div>
        <div id="sticky-header" class="menu-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="flaticon-layout"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li><a href="#home" class="section-link">Home</a></li>
                                        <li><a href="#features" class="section-link">Features</a></li>
                                        <li><a href="#paroller" class="section-link">Product</a></li>
                                        <li><a href="#ingredient" class="section-link">Ingredient</a></li>
                                        <li><a href="#pricing" class="section-link">Pricing</a></li>
                                        <!-- <li class="menu-item-has-children"><a href="shop.php">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.php">Our Shop</a></li>
                                                <li><a href="shop-details.php">Shop Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#news" class="section-link">News</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Our Blog</a></li>
                                                <li><a href="blog-details.php">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">contacts</a></li> -->
                                    </ul>
                                </div>
                                <div class="header-action d-none d-sm-block">
                                    <ul>
                                        <!-- <li class="header-shop-cart">
                                            <a href="#" class="cart-count"><i class="flaticon-shopping-cart"></i>
                                                <span class="mini-cart-count">2</span>
                                            </a>
                                            <div class="header-mini-cart">
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget list-wrap">
                                                    <li class="woocommerce-mini-cart-item d-flex align-items-center">
                                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                                        <div class="mini-cart-img">
                                                            <img src="assets/img/products/cart_p01.jpg" alt="Product">
                                                        </div>
                                                        <div class="mini-cart-content">
                                                            <h4 class="product-title"><a href="shop-details.php">Antiaging and Longevity</a></h4>
                                                            <div class="mini-cart-price">1 ×
                                                                <span class="woocommerce-Price-amount amount">$49</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="woocommerce-mini-cart-item d-flex align-items-center">
                                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                                        <div class="mini-cart-img">
                                                            <img src="assets/img/products/cart_p02.jpg" alt="Product">
                                                        </div>
                                                        <div class="mini-cart-content">
                                                            <h4 class="product-title"><a href="shop-details.php">Branched Chain Amino Acids</a></h4>
                                                            <div class="mini-cart-price">2 ×
                                                                <span class="woocommerce-Price-amount amount">$69</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p class="woocommerce-mini-cart__total">
                                                    <strong>Subtotal:</strong>
                                                    <span class="woocommerce-Price-amount">$149</span>
                                                </p>
                                                <p class="checkout-link">
                                                    <a href="shop-details.php" class="button wc-forward">View cart</a>
                                                    <a href="shop-details.php" class="button checkout wc-forward">Checkout</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li> -->
                                        <li class="offCanvas-btn d-none d-xl-block"><a href="#" class="navSidebar-button"><i class="flaticon-layout"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
                <marquee class="menu-area sticky-menu" style="background-color: #0d9b4d;color: #fff; top: 92px;z-index: 80;">

                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>GLUTEN FREE </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>NON-GMO </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>NO ARTIFICAL FLAVOURS </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>NO PRESERVATIVES </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>SOY FREE </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>GLUTEN FREE </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>NON-GMO </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>NO ARTIFICAL FLAVOURS </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>NO PRESERVATIVES </span>
                    &nbsp;&nbsp;<i class="fas fa-star"></i>&nbsp;&nbsp;<span>SOY FREE </span>

                </marquee>
            </div>

        </div>

        <!-- header-search -->
        <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="search-wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" placeholder="Enter your keyword...">
                                    <button class="search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-backdrop"></div>
        <!-- header-search-end -->

        <!-- offCanvas-start -->
        <div class="offCanvas-wrap">
            <div class="offCanvas-toggle"><img src="assets/img/icons/close.png" alt="icon"></div>
            <div class="offCanvas-body">
                <div class="offCanvas-content">
                    <h3 class="title">Getting all of the <span>Nutrients</span> you need simply cannot be done without supplements.</h3>
                    <p>
                    <p>All <?= $brandname ?> products are manufactured and packaged in India and undergo rigorous quality assurance procedures to ensure the highest quality. We are committed to providing state-of-the-art nutraceuticals to support your optimal health and well-being.</p>
                    </p>
                </div>
                <div class="offcanvas-contact">
                    <h4 class="number"><?= $phone ?></h4>
                    <h4 class="email"><?= $show_email ?></h4>
                    <p><?= $address ?></p>
                    <ul class="offcanvas-social list-wrap">
                        <li><a href="<?= $social_facebook ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?= $social_twitter ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?= $social_instagram ?>"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offCanvas-overlay"></div>
        <!-- offCanvas-end -->

    </header>
    <!-- header-area-end -->