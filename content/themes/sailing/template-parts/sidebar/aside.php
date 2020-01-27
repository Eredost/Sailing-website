<aside class="sidebar">

    <div class="logo">
        <img src="content/themes/sailing/public/images/logo-osailing.svg" alt="" class="logo__image">
        <p class="logo__text">Sailing</p>
    </div>

    <?php
    $menu = wp_nav_menu([
        'theme_location'  => 'main',
        'container'       => 'nav',
        'container_class' => 'navbar',
        'echo'            => false,
    ]);

    $menu = str_replace('menu-item ', 'navbar__item menu-item ', $menu);
    $menu = str_replace('<a', '<a class="navbar__item__link" ', $menu);

    echo $menu;
    ?>

</aside>
