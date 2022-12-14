<!-- testimonial-area -->
<?php
$file = fopen("assets/review_nutra.csv", "r");







?>

<section class="testimonial-area testimonial-bg" data-background="assets/img/bg/testimonial_bg.jpg">
    <div class="testimonial-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-9 col-lg-11">
                <div class="testimonial-active">



                    <?php while (($data = fgetcsv($file)) !== false) { ?>

                        <div class="testimonial-item text-center">
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>“ <?= $data[1] ?></p>
                            <div class="testimonial-avatar-wrap">
                                <div class="testi-avatar-img">
                                    <img src="assets/img/others/testi_avatar01.jpg" alt="img">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5 class="name"><?= $data[0] ?></h5>
                                </div>
                            </div>
                        </div>


                    <?php };
                    fclose($file);
                    ?>





                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->