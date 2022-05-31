<?php get_header();
/* Template name: O nama strana */
?>
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
						$value = get_field('slika');

						$image = $value['sizes']['large'];

						echo "<img src='".$image."' alt=''>";
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>