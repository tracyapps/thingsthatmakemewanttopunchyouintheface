<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package punch
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://fonts.googleapis.com/css?family=Nobile:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<h1><span class="things">things</span> that make me want to <span class="punch">punch you in the face</span></h1>

<div id="tile" class="wrap">