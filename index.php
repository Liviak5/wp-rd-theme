<?php get_header(); ?>
    <header class="header">
            <img class="header__image" src="<?php header_image(); ?>" alt="header">
        <?php get_template_part('template_parts/nav'); ?>
    </header>

    <main class="content">
        <section>
	        <?php
	        // The Loop
	        if ( have_posts() ) {
		        while ( have_posts() ) {
			        the_post();
			        echo '<article class="content__post">';
			        echo '<h2 class="title__medium"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
			        the_content();
			        echo '</article>';
			        echo '<aside class="content__sidebar">';
			        the_post_thumbnail('kl-rd__postimage');
			        echo '</aside>';
			        $backgroundimage = get_field( 'hintergrundbild' );
		        }
	        }
	        ?>
        </section>
    </main>
    <style>
        body {
            background: url("<?php echo $backgroundimage; ?>");
        }
    </style>
<?php get_footer(); ?>