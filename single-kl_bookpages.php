<?php get_header(); ?>
    <main class="content">
        <section class="content__section">
			<?php
			// The Loop
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					echo '<article class="content__post">';
					echo '<h2 class="post__title">' . get_the_title() . '</h2>';
					the_content();
					echo '</article>';

					$backgroundimage = get_field( 'hintergrundbild' );
				}
			}

			$images = get_field( 'bildergalerie');
			$size   = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
			if ($images) {
				echo '<article class="content__post">';
				foreach ( $images as $image ) {
					echo '<span class="content__img"> <a href="'. $image['url'].'">';
					echo '<img src="'.$image['sizes']['thumbnail'].'" alt="'.$image['alt'].'"/>';
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

			<?php if ( get_field( 'pdf-download' ) ): ?>
                <h2 class="post__title">Buchdownload</h2>
                <a href="<?php the_field( 'pdf-download' ); ?>" target="_blank">Download File</a>
			<?php endif; ?>
            <br>
			<?php
			$link = get_field( 'link' );
			if ( $link ): ?>
                <a class="button" href="<?php echo $link['url']; ?>"
                   target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
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