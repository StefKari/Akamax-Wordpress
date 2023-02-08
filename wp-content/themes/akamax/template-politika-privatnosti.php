<?php get_header();
/* Template name: Politika privatnosti strana */
?>

<div class="page-section sk-top-page-content">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h2 class="title-section"><?php echo get_field('naslov') ?></h2>
                <div class="divider"></div>
            </div>

            <div class="col-lg-12">
                <p><?php echo get_field('opis') ?></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>