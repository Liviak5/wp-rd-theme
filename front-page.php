<?php get_header(); ?>
    <style>
        div.carousel-item {
            background-image: url("<?php background_image(); ?>");
            background-size: cover !important;
            background-attachment: fixed !important;
        }
    </style>
    <div class="nav__block">
        <button id="hamburger"></button>
    </div>
<?php get_template_part( 'template_parts/nav' ); ?>
    <body>
<main class="content-front">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h1 class="main-title"><?php bloginfo( 'name' ) ?></h1>
                <h2 class="post__title typo-front-page"><?php bloginfo( 'description' )?></h2>
            </div>
			<?php
			if ( have_rows( 'slides' ) ) {
				while ( have_rows( 'slides' ) ) {
					the_row();
					$backgroundimage = get_sub_field('backgroundimage');
					echo '<div class="carousel-item" style="background-image: url("'.$backgroundimage.'");">';
					echo '<article class="content-front__post">';
					the_sub_field( 'teaser' );
					the_sub_field( 'maincontent' );
					echo '</article>';
					echo '</div>';
				}
			}
			?>
        </div>

		<?php if ( have_rows( 'slides' ) ):
			while ( have_rows( 'slides' ) ) : the_row();
				?>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only" title="Previous"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only" title="Next"></span>
                </a>

			<?php
			endwhile;
		endif;
		?>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<?php get_footer(); ?>