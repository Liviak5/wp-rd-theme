</div>
<footer class="footer">
    <div id="fb-root"></div>
    <p>© 2016 Orlando Kobler</p>
    <div class="footer-menu">
		<?php
		$imp = array(
			'theme_location'    =>  'fuss',
			'menu_class'        =>  'footer-menu__list',
			'container_class'   => 'footer-menu__wrapper',
			'link_before'       =>  '| '
		);
		wp_nav_menu($imp);
		?>
    </div>
    <p>&nbsp;|</p>
    <div class="fb-like" data-href="https://rodneydent.ch" data-layout="button_count" data-action="recommend" data-show-faces="true" data-share="true"></div>
</footer>
<?php wp_footer();?>
</body>
</html>