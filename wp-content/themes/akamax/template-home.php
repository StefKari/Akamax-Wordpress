<?php get_header();
/* Template name: Početna strana */
?>


<section class="main_slider">
	<?php include('inc/main-slider.php'); ?>
</section>


<!-- Section Info -->
<div class="page-section sk-top-page-content">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 pr-6">
				<h2 class="title-section"><?php echo get_field('naslov') ?></h2>
				<div class="divider"></div>

				<p><?php echo get_field('opis') ?></p>
			</div>
			<div class="col-lg-6 ">
				<div class="img-fluid ml-5">

					<?php
					// $value = get_field('slika');

					// $image = $value['sizes']['large'];

					// echo "<img src='" . $image . "' alt=''>";

					$image = get_field('slika');
					?>
					<?php if (!empty($image)) { ?>
						<img src="<?php echo $image; ?>" alt="">
					<?php } else { ?>
						<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="">
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Section O nama -->

<!-- Section Info -->
<div class="page-section banner-info">
	<div class="wrap bg-image" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/img/bg_pattern.svg);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
					<h2 class="title-section"><?php echo get_field('info_naslov'); ?></h2>
					<div class="divider"></div>
					<p><?php echo get_field('info_opis'); ?></p>

					<ul class="theme-list theme-list-light text-white">
						<li>
							<div class="h5"><?php echo get_field('prva_sekcija'); ?></div>
							<p><?php echo get_field('opis_prve_sekcije'); ?></p>
						</li>
						<li>
							<div class="h5"><?php echo get_field('druga_sekcija'); ?></div>
							<p><?php echo get_field('opis_druge_sekcije'); ?></p>
						</li>
					</ul>
				</div>
				<div class="col-lg-6 py-3 wow fadeInRight">
					<div class="img-fluid text-center">
						<?php
						// $value = get_field('info-slika');

						// $image = $value['sizes']['large'];

						// echo "<img src='" . $image . "' alt=''>";


						$homeInfoImgID = get_field('info-slika');
						?>
						<?php if (!empty($homeInfoImgID)) { ?>
							<img src="<?php echo $homeInfoImgID; ?>" alt="">
						<?php } else { ?>
							<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="" class="img-fluid w-100">
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Nnd Section Info  -->

<!-- Section Usluge  -->
<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'usluge',
	'posts_per_page' => 3, // ogranicavamo broj postova po strani na 4
	'paged' => $paged // sluzi kao offset WP-u
);
?>

<div class="page-section bg-light sk-top-page-content">
	<div class="container">
		<div class="text-center">
			<div class="subhead">Naše usluge</div>
			<h2 class="title-section">KAKO MOŽEMO DA VAM POMOGNEMO</h2>
			<div class="divider mx-auto"></div>


			<div class="row">

				<?php

				// kreiramo novi upit i prosledjujemo mu gornje parametre
				$wp_query = new WP_Query($args);
				// odavde je sve poznato.
				while ($wp_query->have_posts()) : $wp_query->the_post();

				?>
					<div class="col-sm-12 col-lg-4 col-xl-4 py-3">
						<div class="features">
							<div class="header mb-3">
								<!-- <span class="mai-business"></span> -->

								<?php

								// $value = get_field('slika_usluge_post');

								// $image = $value['sizes']['large'];

								// echo "<img src='" . $image . "' width='60px' height='60px'>";


								$serviceImgID = get_field('slika_usluge_post');
								?>
								<?php if (!empty($serviceImgID)) { ?>
									<img src="<?php echo $serviceImgID; ?>" alt="" class="img-fluid w-100">
								<?php } else { ?>
									<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="" class="img-fluid w-100">
								<?php } ?>


							</div>
							<h5><?php echo get_field('naslov'); ?></h5>
							<p><?php echo get_field('desc-usluge-post'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>


		</div>
	</div>
</div>
<!-- End Usluge  -->

<!-- Section Prijava  -->
<div class="page-section banner-seo-check">
	<div class="wrap bg-image" style="background-image: url(<?php echo bloginfo('template_directory'); ?>/img/bg_pattern.svg);">
		<div class="container text-center">
			<div class="row justify-content-center wow fadeInUp">
				<div class="col-lg-8">
					<h2>Za naše usluge prijavite se već danas</h2>
					<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]') ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Section Prijava   -->


<!-- Section Latest Blog  -->
<div class="page-section">
	<div class="container">
		<div class="text-center wow fadeInUp">
			<div class="subhead">Naš blog</div>
			<h2 class="title-section">Pročitajte najnovija dešavanja o Računovodstvo & Finansije</h2>
			<div class="divider mx-auto"></div>
		</div>

		<div class="row mt-5">

			<?php
			// the query
			$wpb_all_query = new WP_Query(array('post_type' => 'blog', 'post_status' => 'publish', 'posts_per_page' => 3)); ?>

			<?php if ($wpb_all_query->have_posts()) : ?>

				<!-- the loop -->
				<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
					<div class="col-lg-4 py-3 wow fadeInUp">
						<div class="card-blog">
							<div class="header">
								<div class="post-thumb">

									<?php if (!empty(get_the_post_thumbnail())) { ?>

										<?php the_post_thumbnail('full', array('class' => 'imageFW')); ?>

									<?php } else { ?>
										<img src="<?php echo bloginfo('template_directory'); ?>/img/no-image.png" alt="" class="img-fluid">

									<?php } ?>
								</div>
							</div>
							<div class="body">
								<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<div class="post-date mt-3">Objavljeno <a href="#"><?php the_time('F j, Y'); ?></a></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

			<div class="col-12 mt-4 text-center wow fadeInUp">
				<a href="/list-blog" class="btn btn-primary">Pogledaje više</a>
			</div>
		</div>
	</div>
</div>
<!-- End Section Latest Blog  -->

<?php get_footer(); ?>