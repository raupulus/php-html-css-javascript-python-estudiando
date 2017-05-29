<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>
		<?php bloginfo('name'); ?>
		<?php if(is_home() || is_front_page()) : ?>
			&mdash; <?php bloginfo('description'); ?>
			<?php else : ?>
			&mdash; <?php wp_title("",true); ?>
		<?php endif; ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/kube.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<script src="<?php bloginfo('template_url') ?>/js/kube.min.js" type="text/javascript"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Inicio de la caja de #cabecera -->
	<div id="cabecera" class="units-row">
		<!-- Menú "principal" activo -->
		<?php if ( has_nav_menu( 'principal' ) ) : ?>
		<nav id="principal" class="unit-100">
			<?php wp_nav_menu( array('theme_location'=>'principal')); ?>
		</nav>
		<?php endif; ?>
		<header class="unit-100">
			<h1 class="inline"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2 class="inline"><?php bloginfo('description'); ?></h2>
		</header>
		<!-- Menú "secundario" activo -->
		<?php if ( has_nav_menu( 'secundario' ) ) : ?>
		<nav id="secundario" class="unit-100">
			<?php wp_nav_menu( array('theme_location'=>'secundario')); ?>
		</nav>
		<?php endif; ?>
	</div> <!-- Cierre de la caja de #cabecera -->
	<!-- Apertura del contenedor #contenido -->
	<div id="contenido" class="units-row">
