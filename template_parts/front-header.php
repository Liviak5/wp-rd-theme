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
</head>
<body>
<div class="wrapper">
<div class="nav__block--frontpage">
    <button id="hamburger"></button>
</div>
<div class="nav--frontpage">
	<?php get_template_part( 'template_parts/nav' ); ?>
</div>

