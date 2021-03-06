<?php get_header(); ?>
    <main class="content">
        <section class="content__section">
			<?php
			$args = array(
				'posts_per_page' => 1,
				'orderby'        => 'date',
				'post_type'      => 'kl_storytbcs'
			);

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <article class="content__post">
                    <h2 class="post__title"><a href="<?php get_the_permalink() ?>"><?php the_title() ?></a></h2>
					<?php the_content(); ?>
                </article>

				<?php $backgroundimage = get_field( 'hintergrundbild' ); ?>
			<?php endforeach;
			wp_reset_postdata();
			?>
        </section>
        <aside class="sidebar">
            <ul class="sidebar__list">
				<?php $args = array(
					'type'            => 'alpha',
					'format'          => 'html',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'ASC',
					'post_type'       => 'kl_storytbcs'
				);
				wp_get_archives( $args ); ?>
            </ul>
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