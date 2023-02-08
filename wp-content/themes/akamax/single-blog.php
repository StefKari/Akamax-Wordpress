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
                                        <img src="<?php echo bloginfo('template_directory'); ?>/img/blog/blog.jpg" alt="" class="img-fluid w-100">
                                    <?php } ?>
                                </div>
                                <div class="meta-header">
                                    <div class="post-author">
                                        <div class="avatar">
                                            <img src="<?php echo bloginfo('template_directory'); ?>/img/person/person_3.jpg" alt="">
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
                            <h1 class="post-title"><?php the_title(); ?></h1>
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
                                <h4 class="widget-title">Kategorija</h4>
                                <div class="divider"></div>

                                <?php

                                $categories = get_the_category();

                                foreach ($categories as $cat) :
                                ?>
                                    <ul class="categories">
                                        <li><a href="<?php echo "/" . $cat->slug; ?>">
                                                <?php echo $cat->name ?></a></li>
                                    </ul>

                                <?php endforeach; ?>

                            </div>

                            <!-- Widget recent post -->
                            <div class="widget-box">
                                <h4 class="widget-title">Poslednje novosti</h4>
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
                                                    <img src="<?php echo bloginfo('template_directory'); ?>/img/no-image.png" alt="" class="img-fluid">

                                                <?php } ?>
                                                <!-- <img src="../assets/img/blog/blog-1.jpg" alt=""> -->
                                            </a>
                                            <div class="content">
                                                <h6 class="post-title"><a href="#"><?php the_title(); ?></a></h6>
                                                <div class="meta">
                                                    <a href="#"><span class="mai-calendar"></span> <?php the_time('F j, Y'); ?><a>
                                                            <a href="#"><span class="mai-person"></span> <?php the_author(); ?></a>
                                                            <!-- <a href="#"><span class="mai-chatbubbles"></span> 19</a> -->
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
                                <h4 class="widget-title">Tagovi</h4>
                                <div class="divider"></div>

                                <?php
                                    $tags = get_tags();

                                    echo get_the_term_list( get_the_ID(), 'test', '', ',' );
                                    // echo "<pre>";
                                    // var_dump($categories);

                                    // var_dump($tags);

                                    // var_dump(get_the_tags());
                                    // echo "</pre>";
                                    // /var_dump(get_post_meta(get_the_ID(), 'test', true));

                               

                                foreach ($tags as $tag) :
                                ?>

                                    <div class="tag-clouds">
                                        <a href="#" class="tag-cloud-link"><?php echo $tag->name ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

<?php endwhile;
    else : ?>
<p><?php esc_html_e('Žao nam je, nijedan post ne odgovara vašim kriterijumima.'); ?></p>
<?php endif; ?>

</div>

<?php get_footer(); ?>