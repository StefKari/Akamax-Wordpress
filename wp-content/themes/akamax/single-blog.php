<?php get_header(); ?>

<div class="page-section sk-top-section">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrap">
                            <div class="header">
                                <div class="post-thumb">
                                    <?php
                                    $imgID = get_field('background_image');
                                    ?>
                                    <?php if (!empty($imgID)) { ?>
                                        <img src="<?php echo $imgID; ?>" alt="" class="img-fluid w-100">
                                    <?php } else { ?>
                                        <img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog-1.jpg" alt="" class="img-fluid w-100">
                                    <?php } ?>
                                </div>
                                <div class="meta-header">
                                    <div class="post-author">
                                        <div class="avatar">
                                            <img src="../assets/img/person/person_1.jpg" alt="">
                                        </div>
                                        by <a href="#"><?php the_author(); ?></a>
                                    </div>

                                    <div class="post-sharer">
                                        <a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
                                        <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                                        <a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
                                        <a href="#" class="btn"><span class="mai-mail"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h1 class="post-title"><?php the_title(); ?>r</h1>
                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="icon">
                                        <span class="mai-time-outline"></span>
                                    </span> <a href="#"> <?php echo the_time('F j, Y'); ?></a>
                                </div>

                            </div>
                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="widget">

                            <!-- Widget Categories -->
                            <div class="widget-box">
                                <h4 class="widget-title">Category</h4>
                                <div class="divider"></div>

                                <?php
                                    $taxonomy = 'categories';
                                    $args1=array(
                                        'include'=> array(12,30)
                                        );
                                
                                    $terms = get_terms('categories',$args1 );
                                                      
                                    foreach ($terms as $term) {
                                        $term_link = get_term_link( $term, 'categories' );
                                
                                ?>
                                    <ul class="categories">
                                        <li><a href="<?php echo $term_link; ?>"><?php echo $term->name ?></a></li>
                                    </ul>
                                <?php }?>
                            </div>

                            <!-- Widget recent post -->
                            <div class="widget-box">
                                <h4 class="widget-title">Recent Post</h4>
                                <div class="divider"></div>

                                <?php
                                // the query
                                $wpb_all_query = new WP_Query(array('post_type' => 'blog', 'post_status' => 'publish', 'posts_per_page' => 3)); ?>

                                <?php if ($wpb_all_query->have_posts()) : ?>

                                    <!-- the loop -->
                                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>

                                        <div class="blog-item">

                                            <a class="post-thumb" href="<?php the_permalink(); ?>">

                                                <?php if (!empty(get_the_post_thumbnail())) { ?>

                                                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>

                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-date.png" alt="" class="img-fluid">
                                                <?php } ?>
                                                <!-- <img src="../assets/img/blog/blog-1.jpg" alt=""> -->
                                            </a>
                                            <div class="content">
                                                <h6 class="post-title"><a href="#"><?php the_title(); ?></a></h6>
                                                <div class="meta">
                                                    <a href="#"><span class="mai-calendar"></span><?php the_time('F j, Y'); ?><a>
                                                            <a href="#"><span class="mai-person"></span> Admin</a>
                                                            <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                                </div>
                                            </div>    
                                        </div>

                                        <?php endwhile; ?>
                                        <!-- end of the loop -->

                                    <?php else : ?>
                                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                                    <?php endif; ?>
                                    
                            </div>

                            <!-- Widget Tag Cloud -->
                            <div class="widget-box">
                                <h4 class="widget-title">Tag Cloud</h4>
                                <div class="divider"></div>

                                <div class="tag-clouds">
                                    <a href="#" class="tag-cloud-link">Projects</a>
                                    <a href="#" class="tag-cloud-link">Design</a>
                                    <a href="#" class="tag-cloud-link">Travel</a>
                                    <a href="#" class="tag-cloud-link">Brand</a>
                                    <a href="#" class="tag-cloud-link">Trending</a>
                                    <a href="#" class="tag-cloud-link">Knowledge</a>
                                    <a href="#" class="tag-cloud-link">Food</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
</div>


<?php endwhile;
    else : ?>
<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>