<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<?php get_template_part("files/assets/styles/inline_header"); ?>
	
	<?php wp_head(); ?>
	
	
    <style>
      
    </style>

</head>

<body <?php body_class("testsite"); ?>>

<?php wp_body_open(); ?>
	<?php get_template_part("template-parts/header"); ?>

	<main id="main" class="main">