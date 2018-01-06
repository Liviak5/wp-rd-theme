<nav class="navigation clearfix">
    <?php
    $args = array(
        'theme_location'    => 'hauptmenu',
	    'container_class'   => 'main-menu__wrapper',
	    'menu_class'        =>  'main-menu__list'
    );
    wp_nav_menu($args);
    ?>
</nav>