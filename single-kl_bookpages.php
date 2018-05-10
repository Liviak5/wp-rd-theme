<?php get_header(); ?>
    <main class="content">
        <section class="content__section">
			<?php
			// The Loop
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					echo '<article class="content__post">';
					the_content();
					echo '</article>';

					$backgroundimage = get_field( 'hintergrundbild' );
				}
			}

			$images = get_field( 'bildergalerie' );
			$size   = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
			if ( $images ) {
				echo '<article class="content__post--galerie">';
				foreach ( $images as $image ) {
					echo '<span class="content__img"> <a href="' . $image['url'] . '">';
					echo '<img src="' . $image['sizes']['kl-rd__postimage'] . '" alt="' . $image['alt'] . '"/>';
					echo '</a></span>';
				};
				echo '</article>';
			}
			echo '<br><br>';

			?>
        </section>
        <aside class="sidebar">
			<?php if ( get_field( 'cover' ) ): ?>
                <img class="sidebar__image" src="<?php the_field( 'cover' ); ?>"/>
			<?php endif; ?>

			<?php
			if ( have_rows( 'pdf-download' ) ):
				echo '<h3>Downloads</h3>';
				while ( have_rows( 'pdf-download' ) ) : the_row();
				    $pdf = get_sub_field( 'pdf' );
					echo '<h4><a href="' . $pdf['url'] . '">'. $pdf['title'] .'</a></h4>';
				endwhile;
			endif;
			?>
			<?php
			$link = get_field( 'link' );
			if ( $link ): ?>
            <h4><a href="<?php echo $link['url']; ?>"
                   target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></h4>
			<?php endif; ?>
            <div class="content__spacer"><br><br><br></div>
        </aside>
        <div class="content__spacer"><br><br><br></div>
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