<?php
/*
Template Name: Gaestebuch
*/
get_header(); ?>
    <main class="content">
        <section class="content__section">
			<?php
			// The Loop
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					echo '<div class="content__post no-bg">';
					echo '<h2 class="post__title">LIEBER LESER</h2>';
					the_content();
					echo '</div>';
					echo '<article class="content__post">';
                    comments_template();
					echo '</article>';
					$backgroundimage = get_field( 'hintergrundbild' );
				}
			}
			echo '<br>';
			echo '<br>';
			?>
        </section>
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