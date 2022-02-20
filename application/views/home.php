	<!-- Jumbotron -->
	<div class="col-lg-12 banner">
		<div class="jumbotron py-4 my-0">
			<div class="row align-items-center">
				<div class="col-lg-7 col-sm-12">
					<div class="banner">
						<i>
							<h1 class="banner-title text-darken font-weight-bold">
								Know Your Nutritional Needs With UniHealth
							</h1>
						</i>
						<a href="<?= base_url('calculator'); ?>" class="btn btn-dark mt-4 get-started-button">
							Get Started <i class="fas fa-play pl-2"></i>
						</a>
					</div>
				</div>

				<div class="col-lg-5 col-sm-12 text-center">
					<div class="banner-image ">
						<img src="<?= base_url('assets/images/banner.png'); ?>" alt="Banner Image">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Jumbotron -->

	<!-- Food Card -->
	<div class="col-lg-12 mt-0 food-section">
		<div class="row px-3 my-5">
			<?php foreach ($foods as $food) : ?>
				<div class="col-lg-4">
					<div class="card shadow-lg mt-4">
						<img class="card-img-top" src="<?= $food->recipe->image; ?>" alt="<?= $food->recipe->label; ?>" lazyload="true">
						<div class="card-body">
							<h3 class="card-title text-center"><?= $food->recipe->label; ?></h3>
						</div>

						<div class="card-body d-flex justify-content-between align-items-center px-3 py-0 food-energy">
							<p class="energy mb-0"><?= $food->recipe->totalNutrients->ENERC_KCAL->label ?></p>
							<p class="total-calory mb-0"><?= number_format($food->recipe->totalNutrients->ENERC_KCAL->quantity, 0) .  $food->recipe->totalNutrients->ENERC_KCAL->unit; ?></p>
						</div>

						<hr>

						<div class="card-body d-flex justify-content-between align-items-center px-4 pt-2 pb-4">
							<p class="diet-label mb-0">
								<?php foreach($food->recipe->dietLabels as $f) : ?>
									<?= $f ?> <br>
								<?php endforeach; ?>
							</p>
							<a href="<?= base_url('foods/detailFood/?url=' . rawurlencode($food->recipe->uri)); ?>" class="btn px-3 read-more-btn">
								Read more
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="col-md-12 py-5 about">
		<h2 class="mt-3 ml-4 about-title"> About </h2>

		<div class="container">
			<div class="fact mt-5">
				<div class="row align-items-center">
					<div class="col-sm-9">
						<p class="fact-title">
							Did you know ?
						</p>
						<p class="fact-explain mt-5">
							Nutrisi atau gizi adalah substansi organik yang dibutuhkan
							organisme untuk fungsi normal dari sistem tubuh, pertumbuhan,
							pemeliharaan kesehatan. Penelitian di bidang nutrisi mempelajari
							hubungan antara makanan dan minuman
						</p>
					</div>

					<div class="col-sm-3 text-right about-image">
						<img src="<?= base_url('assets/images/about1.png'); ?>" alt="Did You Know?">
					</div>
				</div>
			</div>

			<div class="why" style="margin-top: 100px;">
				<div class="row align-items-center">
					<div class="col-sm-3 text-left about-image">
						<img src="<?= base_url('assets/images/about2.png'); ?>" alt="Why UniHealth">
					</div>

					<div class="col-sm-9">
						<p class="fact-title">
							Why UniHealth ?
						</p>
						<p class="fact-explain mt-5">
							Nutrisi atau gizi adalah substansi organik yang dibutuhkan
							yang dibutuhkan oleh tubuh untuk berfungsi secara normal, UniHealth dapat membantu seseorang
							yang merasa kesulitan dalam memenuhi kebutuhan nutrisi yang dibutuhkannya.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>