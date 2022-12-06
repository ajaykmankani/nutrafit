<!-- Ingredients-area -->
<section id="ingredient" class="ingredients-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-7">
                <div class="ingredients-img">
                    <img src="assets/img/others/ingredients_img.png" alt="img">
                    <img src="assets/img/others/ingredients_shape.png" alt="img" class="shape">
                </div>
            </div>
            <div class="col-xl-8 col-lg-9">
                <div class="ingredients-items-wrap text-center">
                    <div class="section-title mb-60">
                        <p class="sub-title">.. Increased Energy With <?= $name ?> ..</p>
                        <h2 class="title"><?= $name ?> Ingredients</h2>
                    </div>
                    <div class="row  ">


                        <?php for ($x = 1; $x <= 9; $x++) {
                        ?>
                            <div class="col-md-4 ">
                                <div class=" wow fadeInUp" data-wow-delay=".2s">

                                    <div class="">
                                        <img src="assets\img\ingredients\ing (<?= $x ?>).webp">
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ingredients-area-end -->