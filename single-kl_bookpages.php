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
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="jumbotron" <?php post_class()?>>
                    <h2 class="font__title--medium"><a href="<?php the_permalink()?>"> <?php the_title()?></a></h2>
                    <p><?php the_content()?></p>
                </article>
        <?php endwhile;
        endif; ?>
        </section>
        <?php get_sidebar();?>
    </main>
<?php get_footer(); ?>