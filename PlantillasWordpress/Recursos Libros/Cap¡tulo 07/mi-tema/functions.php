<?php
	if (function_exists('register_sidebar')) {
		register_sidebar();
	}
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'principal' => 'Men&#250; principal'
			)
		);
	}
// Personalización del tema con la API Customizer
function theme_customize_register($wp_customize){
  // Inclusión de la sección
  $wp_customize->add_section('mi_seccion', array(
    'title' => 'Opciones de Mi tema',
    'description' => 'Personalización del tema Mi tema',
    'priority' => 200,
  ));
 
  /********* Selector de color **********/
  // Inclusión de ajuste
  $wp_customize->add_setting('color_enlaces', array(
    'default' => '000',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'type' => 'theme_mod',
    'transport' => 'refresh',
  ));
  // Inclusión del control
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
    'label' => 'Color de los enlaces',
    'section' => 'mi_seccion',
    'settings' => 'color_enlaces',
  )));
    
  /********* Campo de texto **********/
  // Inclusión de ajuste
  $wp_customize->add_setting('texto_pie_de_pagina', array(
    'default' => 'Introduzca el texto',
  ));
  // Inclusión del control
  $wp_customize->add_control('texto_pie_de_pagina', array(
    'label' => 'Texto del pie de página',
    'section' => 'mi_seccion',
    'type' => 'text',
  ));

  /********* Casilla de verificación **********/
  // Inclusión de ajuste
  $wp_customize->add_setting('ver_texto_pdp');
  // Inclusión del control
  $wp_customize->add_control('ver_texto_pdp', array(
    'type' => 'checkbox',
    'label' => 'Ver el texto del pie de página',
    'section' => 'mi_seccion',
  ));
  /********* Lista desplegable **********/
  // Inclusión de ajuste
  $wp_customize->add_setting('alineacion_titulo', array(
    'default' => 'left',
  ));
  // Inclusión del control
  $wp_customize->add_control('alineacion_titulo', array(
    'label' => 'Alineación del título',
    'section' => 'mi_seccion',
    'type' => 'radio',
    'choices' => array(
      'left' => 'Izquierda',
      'center' => 'Centrado',
      'right' => 'Derecha',
      ),
  ));
  
  /********* Cargar una imagen  **********/
  // Inclusión de ajuste
  $wp_customize->add_setting('cargar_imagen');
  // Inclusión del control
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'cargar_imagen', array(
    'label' => 'Imagen de fondo: 960x250 px',
    'section' => 'mi_seccion',
    'settings' => 'cargar_imagen'
    )
  ));
    
}
add_action('customize_register', 'theme_customize_register');

/********** Creación de la regla CSS **********/
function theme_customize_css() {
  ?>
    <style type="text/css">
      a { color:<?php echo get_theme_mod('color_enlaces', '#000000'); ?>; }
      #cabecera h1 {text-align:<?php echo get_theme_mod('alineacion_titulo','left'); ?>;}
      #cabecera {
        background-image: url(<?php echo get_theme_mod('cargar_imagen','none'); ?>);
        height: <?php if(get_theme_mod('cargar_imagen')!=='') { echo '250px' ; } else { echo 'auto' ; } ?>;
      }
    </style>
  <?php
}
add_action( 'wp_head', 'theme_customize_css');



?>