<div class="flex-container">
    <div class="flexslider">
        <ul class="slides">
            <?php if (have_rows('home_page_slider')) : ?>
                <?php while (have_rows('home_page_slider')) : the_row(); ?>
                    <li class="item">
                        <?php $description = get_sub_field('description'); ?>
                        <?php $link = get_sub_field('link'); ?>
                        <?php if (!empty($link)) { ?>
                            <a href="<?php echo $link; ?>">
                                <img class="desktop_banner" src="<?php the_sub_field('desktop_img'); ?>" />
                                <img class="mob_banner" src="<?php the_sub_field('mobile_img'); ?>" />
                            </a>
                        <?php } else { ?>
                            <img class="desktop_banner" src="<?php the_sub_field('desktop_img'); ?>" />
                            <img class="mob_banner" src="<?php the_sub_field('mobile_img'); ?>" />
                        <?php } ?>
                        <div class="container">
                            <div class="sliderDesc">
                                <?php echo $description; ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>