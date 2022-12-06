<?php include('include/popup.php'); ?>
<?php include('include/floating.php'); ?>
<!-- Footer-area -->
<footer class="footer-area">
    <div class="footer-instagram">
        <div class="container">
            <div class="row g-0 instagram-active">
                <div class="col-2">
                    <div class="footer-insta-item">
                        <a href="assets/img/others/instagram_post01.jpg" class="popup-image"><img src="assets/img/others/instagram_post01.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-insta-item">
                        <a href="assets/img/others/instagram_post02.jpg" class="popup-image"><img src="assets/img/others/instagram_post02.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-insta-item">
                        <a href="assets/img/others/instagram_post03.jpg" class="popup-image"><img src="assets/img/others/instagram_post03.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-insta-item">
                        <a href="assets/img/others/instagram_post04.jpg" class="popup-image"><img src="assets/img/others/instagram_post04.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-insta-item">
                        <a href="assets/img/others/instagram_post05.jpg" class="popup-image"><img src="assets/img/others/instagram_post05.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="footer-insta-item">
                        <a href="assets/img/others/instagram_post06.jpg" class="popup-image"><img src="assets/img/others/instagram_post06.jpg" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-widgets-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-widget">
                            <div class="footer-about">
                                <div class="footer-logo logo">
                                    <a href="index.php"><img src="assets/img/logo/white_logo.png" alt="Logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>All <?= $name ?> products are manufactured and packaged in India and undergo rigorous quality assurance procedures to ensure the highest quality. We are committed to providing state-of-the-art nutraceuticals to support your optimal health and well-being.</p>


                                </div>
                                <div class="footer-social">
                                    <a href="<?= $social_facebook ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?= $social_twitter ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?= $social_pinterest ?>"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="<?= $social_linkedin ?>"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <!-- <div class="footer-widget">
                            <h4 class="fw-title">About Us</h4>
                            <ul class="list-wrap">
                                <li><a href="#">About Company</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Customer Spotlight</a></li>
                                <li><a href="#">Reseller Program</a></li>
                                <li><a href="shop.php">Our Shop</a></li>
                                <li><a href="#">Price & Plans</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <!-- <div class="footer-widget">
                            <h4 class="fw-title">Support</h4>
                            <ul class="list-wrap">
                                <li><a href="#">Knowledge Base</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="#">Developer API</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="footer-widget">
                            <h4 class="fw-title">CONTACT US</h4>
                            <div class="footer-contact-wrap">
                                <p><?= $address ?></p>
                                <ul class="list-wrap">
                                    <li class="phone"><i class="fas fa-phone"></i> <?= $phone ?></li>
                                    <li class="mail"><i class="fas fa-envelope"></i> <?= $email ?></li>
                                    <li class="website"><i class="fas fa-globe"></i><?= $website ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape one">
            <img src="assets/img/others/footer_shape01.png" alt="img" class="wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
        </div>
        <div class="footer-shape two">
            <img src="assets/img/others/footer_shape02.png" alt="img" class="wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="copyright-text">
                        <p>Copyright © 2022 <?= $name ?> All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="payment-card text-center text-md-end">
                        <img src="assets/img/others/card_img.png" alt="card">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-area-end -->

<!-- JS here -->

<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.inview.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/validator.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from themegenix.net/html/<?= $name ?>-preview/<?= $name ?>/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 22:50:00 GMT -->

</html>