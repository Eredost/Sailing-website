<section class="articles" id="articles">

    <?php
    $args = [
        'posts_per_page' => 3,
    ];

    $wpQueryArticles = new WP_Query($args);

    if ($wpQueryArticles->have_posts()) :
        while ($wpQueryArticles->have_posts()) :
            $wpQueryArticles->the_post();
    ?>

    <article class="post">

        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="post__image">

        <div class="post__content">

            <h2 class="post__content__title"><?php the_title(); ?></h2>

            <p class="post__content__resume"><?php the_excerpt(); ?></p>

            <a href="<?php the_permalink(); ?>" class="post__content__read-more">Lire la suite</a>

        </div>
    </article>

    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

</section>
