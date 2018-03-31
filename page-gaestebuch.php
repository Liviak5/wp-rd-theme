<?php get_header(); ?>
    <style>
        .header {
            background-image: url("<?php header_image(); ?>");
        }
    </style>
    </head>
    <body>
    <div class="nav__block">
        <button id="hamburger"></button>
    </div>
<div class="wrapper">
    <header class="header">
        <h1 class="main-title">
			<?php if ( is_page() ) {
				wp_title( '' );
			} elseif ( is_single() ) {
				single_post_title();
			} else {
				single_cat_title();
			} ?>
        </h1>
    </header>
	<?php get_template_part( 'template_parts/nav' ); ?>
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
					echo '<div class="comment__list">';
					echo '<br>';
					wp_list_comments( array(
						'style' => 'div'
					) );
					echo '</div>';
					echo '</article>';
					$backgroundimage = get_field( 'hintergrundbild' );
				}
			}
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