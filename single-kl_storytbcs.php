<?php get_header(); ?>
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
	                    echo get_previous_post_link('%link','zurück').' | '. get_next_post_link('%link','weiterlesen');
                        echo '</article>';
                        $backgroundimage = get_field( 'hintergrundbild' );
                    }
                }
                ?>

            </section>
            <aside class="sidebar">
               <?php the_post_thumbnail('kl-rd__postimage');?>
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