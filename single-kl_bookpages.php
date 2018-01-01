<?php get_header(); ?>
    <style>
        .header{
            background-image:url("<?php header_image(); ?>");
        }
    </style>
    <header class="header">
        <h1 class="main-title">
			<?php if (is_page()){wp_title('');}
			else if (is_single()){single_post_title();}
			else {single_cat_title();}?>
        </h1>
    </header>
    <?php get_template_part('template_parts/nav'); ?>
    <main class="content">
        <section class="content__section">
	        <?php
	        // The Loop
	        if ( have_posts() ) {
		        while ( have_posts() ) {
			        the_post();
			        echo '<article class="content__post">';
			        echo '<h2 class="post__title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
			        the_content();
			        echo '</article>';
			        $backgroundimage = get_field( 'hintergrundbild' );
		        }
	        }
	        ?>
        </section>
        <aside class="sidebar">
	        <?php if( get_field('cover') ): ?>
                <img class="sidebar__image" src="<?php the_field('cover'); ?>" />
	        <?php endif; ?>

	        <?php if( get_field('pdf-download') ): ?>
                <h2 class="post__title">Buchdownload</h2>
                <a href="<?php the_field('pdf-download'); ?>" target="_blank">Download File</a>
	        <?php endif; ?>
        </aside>
    </main>

    <style>
        body {
            background: url("<?php
            if($backgroundimage!='')
                    {echo $backgroundimage;}
            else    {background_image();}
            ?>");
        }
    </style>
<?php get_footer(); ?>