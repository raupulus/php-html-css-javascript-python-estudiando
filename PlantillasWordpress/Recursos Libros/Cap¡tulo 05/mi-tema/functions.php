<?php
  /* Añadir el uso de la sidebar */
	if (function_exists('register_sidebar')) {
		register_sidebar();
	}
	/* Añadir una ubicación de menú  */
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'principal' => 'Men&#250; principal'
			)
		);
	}

?>