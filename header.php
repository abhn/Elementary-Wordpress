<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elementary
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<?php get_template_part( 'template-parts/nav' ); ?>
  <hr class="stylish"/>
