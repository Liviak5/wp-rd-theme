<?php get_header(); ?>
    <style>
        .header{
            background-image:url("<?php header_image(); ?>");
        }
    </style>
    </head>
    <body>
    <button class="hamburger" onclick="showMenu()"></button>
    <div class="wrapper">
        <header class="header">
            <h1 class="main-title">
                <?php if (is_page()){wp_title('');}
                elseif (is_single()){single_post_title();}
                else {single_cat_title();}?>
            </h1>
        </header>
        <?php get_template_part('template_parts/nav'); ?>
        <main class="content">
            <section class="content__section">
                <?php
                $args = array(
                        'posts_per_page'    => 1,
                        'orderby'          => 'date',
                        'post_type'        => 'kl_storytbcs'
                );

                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <article class="content__post">
                        <h2  class="post__title"><a href="<?php get_the_permalink()?>"><?php the_title()?></a></h2>
	                    <?php the_content();?>
                    </article>
                    <?php $backgroundimage = get_field( 'hintergrundbild' );?>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </section>
            <aside class="sidebar">
	            <?php $args = array(
		            'type'              => 'alpha',
		            'format'            => 'html',
		            'show_post_count'   => false,
		            'echo'              => 1,
		            'order'             => 'ASC',
		            'post_type'         => 'kl_storytbcs'
	            );
	            wp_get_archives( $args ); ?>
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