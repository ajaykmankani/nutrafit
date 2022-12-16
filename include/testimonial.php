<!-- testimonial-area -->


<?php
// $user = json_decode(
//     file_get_contents(
//         'https://randomuser.me/api/?results=20&gender=female&nat=in'
//     ),
//     true
// );
// // var_dump($user);
// foreach ($user["results"] as $value) {
//     echo "<img src = " . $value["picture"]["large"] . ">";
//     echo $value['name']["first"] . " " . $value['name']["last"];
//     echo "<br>";
// }

?>



<?php
$file = fopen("assets/review_nutra.csv", "r");







?>

<section class="testimonial-area testimonial-bg" data-background="assets/img/bg/testimonial_bg.jpg">
    <div class="testimonial-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-9 col-lg-11">
                <div class="testimonial-active">



                    <?php $x = 0;
                    while (($data = fgetcsv($file)) !== false) {
                        $x++; ?>

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
                                    <?php if ($data[2] == 'm') { ?>
                                        <img src="https://randomuser.me/api/portraits/men/<?= $x ?>.jpg" alt="img">
                                    <?php } else { ?>
                                        <img src="https://randomuser.me/api/portraits/women/<?= $x ?>.jpg" alt="img">
                                    <?php } ?>
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