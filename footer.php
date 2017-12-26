</div>
<footer class="footer">
    <p>© 2016 Orlando Kobler</p>
		<?php
		$imp = array(
			'theme_location'    =>  'fuss',
			'menu_class'        =>  'sub-menu__list',
			'container_class'   => 'sub-menu__wrapper',
			'link_before'       =>  '| '
		);
		wp_nav_menu($imp);
		?>
</footer>
<?php wp_footer();?>
</body>
</html>