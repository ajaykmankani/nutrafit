<?php include('header.php'); ?>

<!-- main-area -->
<main class="main-area fix">
    <style>
        .banner_right ul li {
            color: #00501c;
            font-size: 20px;
            text-shadow: 1px 1px 0px #ffffff;
            background: url(assets/img/tick-icon.png) 0px 6px no-repeat;
            padding: 0 0 0 29px;
            line-height: 30px;
            font-family: signikasemibold;
            background-size: 19px;
        }
    </style>
    <!-- banner-area -->
    <section class="banner-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-7 col-lg-8 col-md-10">
                    <div class="banner-content text-center">
                        <p class="banner-caption">.. Increased Energy With <?= $name ?> ..</p>
                        <h2 class="title">POWERFUL Weight Loss Formula</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row banner-caption" style="font-size:30px">
                <div class="col-lg-4 text-center" style=" color:#063570"><img src="assets/img/tick-icon.png" style="margin-right: 10px;">Scientifically Tested.</div>
                <div class="col-lg-4 text-center" style=" color:#063570"> <img src="assets/img/tick-icon.png" style="margin-right: 10px;">Burn Fat Fast.</div>
                <div class="col-lg-4 text-center" style=" color:#063570"> <img src="assets/img/tick-icon.png" style="margin-right: 10px;">Increase Energy.</div>
            </div>

        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-7 col-lg-8 col-md-10">
                    <div class="banner-content text-center">
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-two">Shop Now</button>

                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="banner-images text-center">
                        <img src="assets/img/banner/banner_img02.png" alt="img" class="main-img">
                        <img src="assets/img/banner/banner_round_bg.png" alt="img" class="bg-shape">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape one">
            <img src="assets/img/banner/banner_shape01.png" alt="shape" class="wow bannerFadeInLeft" data-wow-delay=".2s" data-wow-duration="2s">
        </div>
        <div class="banner-shape two">
            <img src="assets/img/banner/banner_shape02.png" alt="shape" class="wow bannerFadeInRight" data-wow-delay=".2s" data-wow-duration="2s">
        </div>
        <div class="banner-shape three">
            <img src="assets/img/banner/banner_shape03.png" alt="shape" class="wow bannerFadeInDown" data-wow-delay=".2s" data-wow-duration="2s">
        </div>
        <div class="banner-shape four">
            <img src="assets/img/banner/banner_shape04.png" alt="shape" class="wow bannerFadeInDown" data-wow-delay=".2s" data-wow-duration="2s">
        </div>
    </section>
    <!-- banner-area-end -->



    <?php include('include/feature_area.php'); ?>


    <?php include('include/feature_products.php'); ?>
    <?php include('include/image.php'); ?>




    <?php include('include/feature.php'); ?>



    <?php include('include/Ingredients_area.php'); ?>

    <?php include('include/formula_area.php'); ?>


    <?php include('include/pricing.php'); ?>
    <?php include('include/review/index.php'); ?>
    <?php include('include/testimonial.php'); ?>

    <?= include('include/contact_form.php') ?>







</main>
<!-- main-area-end -->



<?php include('footer.php'); ?>