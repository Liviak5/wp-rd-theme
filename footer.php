</div>
<footer>
    <div id="fb-root"></div>
    <p>© 2016 Orlando Kobler | <?php
        $imp = array(
            'theme_location' => 'fuss',
            'menu_class'=> 'fusszeile'
        );
        wp_nav_menu($imp);
        ?> | <div class="fb-like" data-href="https://rodneydent.ch" data-layout="button_count" data-action="recommend" data-show-faces="true" data-share="true"></div></p>
</footer>
<?php wp_footer();?>
</body>
</html>