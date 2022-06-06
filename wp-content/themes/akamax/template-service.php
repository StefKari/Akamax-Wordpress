<?php get_header();
/* Template name: Ponuda strana */


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'usluge',
	'posts_per_page' => 20, // ogranicavamo broj postova po strani na 4
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
						<div class="features mb-5">
							<div class="header mb-3">
								<!-- <span class="mai-business"></span> -->

								<?php

								// $value = get_field('slika_usluge_post');

								// $image = $value['sizes']['large'];

								//echo "<img src='".$image."' width='60px' height='60px'>";


								$serviceImgID = get_field('slika_usluge_post');
								?>
								<?php if (!empty($serviceImgID)) { ?>
									<img src="<?php echo $serviceImgID; ?>" alt="" class="img-fluid w-100">
								<?php } else { ?>
									<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="" class="img-fluid w-100">
								<?php } ?>


							</div>
							<h5><?php echo get_field('naslov'); ?></h5>
							<p class="mt-3"><?php echo get_field('desc-usluge-post'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>

			</div>

		</div>

 	</div> <!-- .container -->
</div> <!-- .page-section -->



<!-- <div class="page-section bg-light sk-top-page-content-service"> -->
<!-- <div class="container"> -->
<!-- <div class="text-center"> -->
<?php //echo do_shortcode('[WPSM_AC id=44]') 
?>
<!-- </div> -->
<!-- </div>
</div>  -->



<?php get_footer(); ?>