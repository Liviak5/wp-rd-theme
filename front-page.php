<?php get_header(); ?>
    <header>
        <div>
            <img src="" alt="">
        </div>
        <?php get_template_part('template_parts/nav'); ?>
    </header>

    <main>
        <section>
        <?php
        // The Loop
        $args = array('category_name' => 'Startseite');

        $start_loop = new WP_Query($args);

        if ($start_loop->have_posts() ) : while ($start_loop->have_posts() ) : $start_loop->the_post(); ?>
                <article class="jumbotron" <?php post_class()?>>
                    <h2><a href="<?php the_permalink()?>"> <?php the_title()?></a></h2>
                    <p><?php the_content()?></p>
                </article>
        <?php endwhile;
        endif; wp_reset_postdata(); ?>
        </section>
        <?php get_sidebar();?>
    </main>
<?php get_footer(); ?>