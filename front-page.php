<?php get_header(); ?>
    <link rel="stylesheet" href="assets/slick-1.8.0/slick/slick.css">
    <link rel="stylesheet" href="assets/slick-1.8.0/slick/slick-theme.css">
    </head>
    <body>
        <div class="nav__block">
            <button id="hamburger"></button>
        </div>
        <?php get_template_part( 'template_parts/nav' ); ?>
        <!--TODO: Der Slider sollte über die ganze Seite gehen und Sliden :-)-->
            <main class="lazy slider" data-sizes="100vw">
                <div class="slide" style="background-image: url(<?php background_image(); ?>)">
                    <h1 class="main-title"><?php bloginfo( 'name' ) ?></h1>
                    <h2 class="post__title typo-front-page"><?php bloginfo( 'description' ) ?></h2>
                </div>
                <?php
                if ( have_rows( 'slides' ) ) {
                    while ( have_rows( 'slides' ) ) {
                        the_row();
                        $backgroundimage = get_sub_field( 'backgroundimage' );
                        echo '<div class="slide" style="background-image: url(' . $backgroundimage . ')">';
                        echo '<article class="content-front__post">';
                        the_sub_field( 'teaser' );
                        the_sub_field( 'maincontent' );
                        echo '</article>';
                        echo '</div>';
                    }
                }
                ?>
            </main>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="assets/slick-1.8.0/slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script>
            $(document).ready(function () {
                $(".lazy").slick({
                    lazyLoad: 'ondemand', // ondemand progressive anticipated
                    infinite: true
                });
            });
        </script>
        <?php get_footer(); ?>