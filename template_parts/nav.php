<nav class="front__nav--main clearfix">
    <p><a href="<?php bloginfo('url');?>">home</a></p>
    <?php
    $args = array(
        'theme_location' => 'hauptmenu'
    );
    wp_nav_menu($args);
    ?>
    <div class="clearfix"></div>
</nav>