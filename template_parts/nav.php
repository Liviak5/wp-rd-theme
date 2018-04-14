<nav id="mainnav" class="nav clearfix hidden">
    <?php
    $args = array(
        'theme_location'    => 'hauptmenu',
	    'container_class'   => 'main-menu__wrapper',
	    'menu_class'        =>  'main-menu__list'
    );
    wp_nav_menu($args);
    ?>
    <div class="footer-menu">
		<?php
		$imp = array(
			'theme_location'    =>  'fuss',
			'menu_class'        =>  'footer-menu__list',
			'container_class'   => 'footer-menu__wrapper'
		);
		wp_nav_menu($imp);
		?>
    </div>
</nav>