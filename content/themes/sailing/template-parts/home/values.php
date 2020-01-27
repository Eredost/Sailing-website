<?php
$args = [
    'tag' => 'escales'
];

$wpQueryEscales = new WP_Query($args);

$args = [
    'tag' => 'rencontres'
];

$wpQueryRencontres = new WP_Query($args);

$args = [
    'tag' => 'semaines-en-mer'
];

$wpQuerySemaines = new WP_Query($args);

$nb_escales = $wpQueryEscales->found_posts;
$nb_rencontres = $wpQueryRencontres->found_posts;
$nb_semaines = $wpQuerySemaines->found_posts;
?>

<section class="counters" id="counters">

    <div class="counter">

        <h3 class="counter__name">Escales</h3>
        <p class="counter__number"><?= $nb_escales ?></p>

    </div>

    <div class="counter">

        <h3 class="counter__name">Semaines en mer</h3>
        <p class="counter__number"><?= $nb_semaines ?></p>

    </div>

    <div class="counter">

        <h3 class="counter__name">Rencontres</h3>
        <p class="counter__number"><?= $nb_rencontres ?></p>

    </div>

</section>

<?php
$args = [
    'pagename' => 'a-propos',
];

$wpQueryApropos = new WP_Query($args);

if ($wpQueryApropos->have_posts()) :
    while ($wpQueryApropos->have_posts()) :
        $wpQueryApropos->the_post();
?>

<section class="values">
    <p class="values__paragraph">
        <?php the_content(); ?>
    </p>
</section>

<?php
    endwhile;
    $wpQueryApropos->reset_postdata();
endif;
