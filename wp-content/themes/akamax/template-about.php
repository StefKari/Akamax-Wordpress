<?php get_header();
/* Template name: O nama strana */
?>
<div class="page-section sk-top-page-content">
	<!-- Section 1-->
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<h2 class="title-section"><?php echo get_field('naslov') ?></h2>
				<div class="divider"></div>

				<p><?php echo get_field('opis') ?></p>
			</div>
			<div class="col-lg-6 ">
				<div class="img-fluid">

					<?php

					$aboutImg = get_field('slika');
					?>
					<?php if (!empty($aboutImg)) { ?>
						<img src="<?php echo $aboutImg; ?>" alt="">
					<?php } else { ?>
						<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="" class="img-fluid">
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Section 1-->

	<!-- Section 2-->
	<div class="container mt-5">

		<div class="row">
			<div class="col-lg-6">
				<h2 class="title-section"><?php echo get_field('naslov-2') ?></h2>
				<div class="divider"></div>

				<p><?php echo get_field('opis-2') ?></p>
			</div>
			<div class="col-lg-6">
				<div class="img-fluid">

					<?php

					$aboutImg2 = get_field('slika-2');
					?>
					<?php if (!empty($aboutImg2)) { ?>
						<img src="<?php echo $aboutImg2; ?>" alt="">
					<?php } else { ?>
						<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="" class="img-fluid">
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- End Section 2-->
</div>


<?php get_footer(); ?>