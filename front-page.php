<?php get_template_part( 'template_parts/front-header' ); ?>
<main>
<?php
if ( have_rows( 'slides' ) ) : ?>
<div class="slider-for">
    <div class="slide" style="background-image: url(<?php background_image(); ?>)">
        <h1 class="main-title typo-front-page"><?php bloginfo( 'name' ) ?></h1>
        <h2 class="post__title typo-front-page"><?php bloginfo( 'description' ) ?></h2>
    </div>
	<?php
	while ( have_rows( 'slides' ) ) : the_row();
		$backgroundimage = get_sub_field( 'backgroundimage' ); ?>
        <div class="slide" style="background-image: url(<?php echo $backgroundimage['url'] ?>)">
            <div class="content-front__post">
				<?php
				the_sub_field( 'teaser' );
				the_sub_field( 'maincontent' );
				?>
            </div>
        </div>
	<?php
	endwhile;
	endif;
	?>
</div>
</main>
<?php get_footer(); ?>