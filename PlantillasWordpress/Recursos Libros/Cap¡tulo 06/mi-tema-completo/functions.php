<?php

/* Creación de la ubicación de los menús */
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'principal' => 'Men&#250; principal',
			'secundario' => 'Men&#250; secundario'
			)
		);
}

/* Creación de la ubicación de las sidebars*/
if (function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'id' => 'izquierda',
			'name' => 'Ubicación izquierda',
			'description' => 'Ubicación a la izquierda de los widgets',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'derecha',
			'name' => 'Ubicación derecha',
			'description' => 'Ubicación a la derecha de los widgets',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
}

/* Inclusión de formatos de entrada */
add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'quote', 'link', 'gallery',
	'status', 'audio', 'chat'
) );


?>