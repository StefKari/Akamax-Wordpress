<?php get_header();
/* Template name: Blog strana */
?>


<div class="page-section sk-top-page-content">
	<div class="container">


		<div class="col-sm-12">
			<div class="blog-single-wrap">
				<div class="header">
					<div class="post-thumb">
						<img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="">
					</div>
					<div class="meta-header">
						<div class="post-author">
							<div class="avatar">
								<img src="<?php echo bloginfo('template_directory'); ?>/img/person/person_3.jpg" alt="">
							</div>
							by <a href="#">Stephen Doe</a>
						</div>

						<div class="post-sharer">
							<a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
							<a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
							<a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
							<a href="#" class="btn"><span class="mai-mail"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row my-5">
			<?php

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'blog',
				'posts_per_page' => 20, // ogranicavamo broj postova po strani na 4
				'paged' => $paged // sluzi kao offset WP-u
			);


			// kreiramo novi upit i prosledjujemo mu gornje parametre
			$wp_query = new WP_Query($args);
			// odavde je sve poznato.
			while ($wp_query->have_posts()) : $wp_query->the_post();
			?>

				<div class="col-lg-4 py-3">
					<div class="card-blog">
						<div class="header">
							<div class="post-thumb">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full', array('class' => 'imageFW')); ?>
								</a>
								<!-- <img src="<?php // echo bloginfo('template_directory'); 
												?>/img/blog/blog-1.jpg" alt=""> -->
							</div>
						</div>
						<div class="body">
							<h5 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
							<div class="post-date">Posted on <a href="#"><?php the_time('F j, Y'); ?></a></div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		</div>



		<nav aria-label="Page Navigation">
			<?php
			$big = 999999999; // need an unlikely integer
			echo paginate_links(array(
				'base' => str_replace($big, '%#%', get_pagenum_link($big)),
				'format' => '/page/%#%',
				'current'       => max(1, get_query_var('paged')),
				'prev_text'     => '< Prethodna',
				'next_text'   => 'Sledeća >'
			));
			?>
		</nav>





	</div>
</div>


</div>

<?php get_footer(); ?>