<?php get_template_part( 'template_parts/front-header' ); ?>
<main>
<?php
if ( have_rows( 'slides' ) ) : ?>
<div class="slider-for">
    <div class="slide" style="background-image: url(<?php echo get_bloginfo('template_url').'/assets/img/home.jpg';?>)">
        <h1 class="main-title typo-front-page"><?php bloginfo( 'name' ) ?></h1>
        <h2 class="post__title typo-front-page"><a href="https://rodneydent.ch/category/geschichten"><?php bloginfo( 'description' ) ?></a></h2>
    </div>
	<?php
	while ( have_rows( 'slides' ) ) : the_row();
		$backgroundimage = get_sub_field( 'backgroundimage' ); ?>
        <div class="slide" style="background-image: url(<?php echo $backgroundimage['url'] ?>)">
            <div class="content__post--front">
                <button class="egde"></button>
                <div class="content__teaser--front visible-content">
	                <?php
	                the_sub_field( 'teaser' );
	                ?>
                </div>
				<div class="content__main--front">
					<?php
					the_sub_field( 'maincontent' );
					?>
                </div>
            </div>
        </div>
	<?php
	endwhile;
	?>
</div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>