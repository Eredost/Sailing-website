<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <header class="header" id="intro">

            <h1 class="header__title">
                <?php the_title(); ?>
            </h1>

        </header>
<?php
    endwhile;
    wp_reset_postdata();
endif;
