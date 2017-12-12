<?php get_header(); ?>
    <header>
        <div>
            <img src="<?php header_image(); ?>" alt="header">
        </div>
        <?php get_template_part('template_parts/nav'); ?>
    </header>

    <main>
        <section>
	        <?php
	        // The Loop
	        if ( have_posts() ) {
		        while ( have_posts() ) {
			        the_post();
			        echo '<article class="jumbotron">';
			        echo '<h2 class="title--medium"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
			        the_content();
			        $backgroundimage = get_field( 'hintergrundbild' );
                    echo '</article>';
		        }
	        }
	        ?>
        </section>
        <?php get_sidebar();?>
    </main>
    <style>
        body {
            background: url(<?php echo $backgroundimage; ?>);
        }
    </style>
<?php get_footer(); ?>