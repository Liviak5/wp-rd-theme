<nav class="navigation">
    <p class="navigation__paragraph"><a class="navigation__link" href="<?php bloginfo('url');?>">home</a></p>
    <?php
    $args = array(
        'theme_location'    => 'hauptmenu',
	    'container_class'   => 'main-menu__wrapper',
	    'menu_class'        =>  'main-menu__list'
    );
    wp_nav_menu($args);
    ?>
</nav>