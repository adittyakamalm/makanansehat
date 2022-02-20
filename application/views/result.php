    <?php if ($this->session->userdata('user_username')) { ?>
        <div class="container">
            <h3 class="text-center">Result</h3>

            <div class="d-flex justify-content-center align-items-center mt-4">
                <div class="nutrient-result">
                    <img class="rounded-circle" src="<?= base_url('assets/images/icon/cal-icon.png'); ?>">
                    <p class="nutrient-number text-center">
                        <?= number_format($calorie, 0); ?> kcal
                    </p>
                </div>

                <div class="nutrient-result">
                    <img class="rounded-circle" src="<?= base_url('assets/images/icon/fat-icon.png'); ?>">
                    <p class="nutrient-number text-center">
                        <?= number_format($fat, 0); ?> g
                    </p>
                </div>

                <div class="nutrient-result">
                    <img class="rounded-circle" src="<?= base_url('assets/images/icon/pro-icon.png'); ?>">
                    <p class="nutrient-number text-center">
                        <?= number_format($protein, 0); ?> g
                    </p>
                </div>

                <div class="nutrient-result">
                    <img class="rounded-circle" src="<?= base_url('assets/images/icon/carb-icon.png'); ?>">
                    <p class="nutrient-number text-center">
                        <?= number_format($carb, 0); ?> g
                    </p>
                </div>

                <div class="nutrient-result">
                    <img class="rounded-circle" src="<?= base_url('assets/images/icon/fiber-icon.png'); ?>">
                    <p class="nutrient-number text-center">
                        <?= number_format($fiber, 0); ?> g
                    </p>
                </div>
            </div>

            <div class="recomendation-food">
                <h3 class="recommendation-title text-center mt-3">Reccomendation Foods</h3>

                <div class="row">
                    <?php foreach ($foods as $food) : ?>
                        <div class="col-lg-4">
                            <div class="card mt-4">
                                <img class="card-img-top" src="<?= $food->recipe->image ?>" lazyload="true">

                                <div class="card-body">
                                    <h3 class="card-title mb-2"><?= $food->recipe->label; ?></h3>
                                    <p class="card-subtitle mb-2"><?= $food->recipe->healthLabels[0]; ?></p>
                                </div>

                                <div class="nutrition">
                                    <div class="d-flex justify-content-between mx-4">
                                        <div class="nutrition-info">
                                            <p class="calorie mb-1">Cal. <?= number_format($food->recipe->totalNutrients->ENERC_KCAL->quantity, 0); ?> kcal</p>
                                            <p class="carbo">Carb. <?= number_format($food->recipe->totalNutrients->CHOCDF->quantity, 0); ?> g</p>
                                        </div>

                                        <div class="nutrition-info">
                                            <p class="protein mb-1">Protein <?= number_format($food->recipe->totalNutrients->PROCNT->quantity, 0); ?> g</p>
                                            <p class="fat">Fat <?= number_format($food->recipe->totalNutrients->FAT->quantity, 0); ?> g</p>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-1">

                                <div class="card-body d-flex justify-content-between align-items-center px-4 pt-2 pb-4">

                                    <?php foreach ($food->recipe->dietLabels as $f) : ?>
                                        <p class="diet-labels mb-0"><?= $f; ?></p>
                                    <?php endforeach ?>

                                    <a href="<?= base_url('foods/detailFood/?url=' . rawurlencode($food->recipe->uri)); ?>" class="btn px-3 read-more-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container mt-5">
            <div class="alert alert-danger" role="alert">
                <p class="text-center">
                    You must be logged in to view the result!
                </p>
            </div>
        </div>
    <?php } ?>