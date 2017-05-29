<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<title><?php bloginfo('name') ; ?> | <?php bloginfo('description') ; ?></title>
	<meta charset="<?php bloginfo('charset') ; ?>" />
	<link href="<?php bloginfo('stylesheet_url') ; ?>" rel="stylesheet" />
	<?php wp_head() ; ?>
</head>
<body>
<header id="cabecera">
	<h1><?php bloginfo('name') ; ?>
</header>
<nav>
	<?php wp_nav_menu() ; ?>
</nav>
<div id="contenido">