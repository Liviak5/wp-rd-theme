<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <title><?php bloginfo('name');?><?php wp_title(' :: ');?></title>
    <?php wp_head();?>
    <style>
        .header{
            background-image:url("<?php header_image(); ?>");
        }
    </style>
</head>
<body>
<div class="wrapper">
<div class="nav__block"><button id="hamburger"></button></div>

    <header class="header">
        <h1 class="main-title">
			<?php if (is_page()){wp_title('');}
            elseif (is_single()){single_post_title();}
			else {single_cat_title();}?>
        </h1>
    </header>
	<?php get_template_part('template_parts/nav'); ?>
