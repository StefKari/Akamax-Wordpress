<?php get_header(); ?>
<?php
$search = get_search_query();
$args = [
    's' => $search
];

// The Query
$the_query = new WP_Query($args);
?>
<main class="main search-main">
    <div class="container vh-100">
        <?php if ($the_query->have_posts()) {
            _e("<h2 class='search-page-naslov'>Rezultati pretrage za: " . get_query_var('s') . "</h2>");
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="post-item" id="post">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                        <span><?php the_time('F j, Y'); ?></span>
                    </div>
                    <div class="post-content">
                        <h4>
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h4>
                        <?php the_excerpt(); ?>
                    </div>
                </div>

            <?php
            }
        } else {
            ?>
            <h2 class='search-page-naslov'>Nista nije pronadjeno!</h2>
            <div class="alert alert-danger">
                <p>Žao nam je, ali ništa nije odgovaralo vašim kriterijumima pretrage. Pokušajte ponovo sa nekim drugim ključnim rečima.</p>
            </div>
        <?php } ?>
    </div>
</main>
<?php get_footer(); ?>