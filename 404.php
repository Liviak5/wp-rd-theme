<style>
    body {
        background: url("<?php background_image(); ?>");
    }
    .header{
        background-image:url("<?php header_image(); ?>");
    }
</style>
<?php get_header(); ?>
    <header class="header">
        <h1 class="main-title">
            <?php if (is_page()){wp_title('');}
            else if (is_single()){single_post_title();}
            else {single_cat_title();}?>
        </h1>
    </header>
    <?php get_template_part('template_parts/nav'); ?>
    <main class="content">
        <section class="content__section">
            <article class="content__post">
	        <h2 class="post__title">Uups. Diese Seite wurde leider nicht gefunden</h2>
            </article>
        </section>
    </main>
<?php get_footer(); ?>