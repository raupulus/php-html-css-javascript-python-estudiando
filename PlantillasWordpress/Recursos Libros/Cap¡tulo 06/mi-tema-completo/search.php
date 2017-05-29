<?php get_header(); ?> <!-- Llamada a la plantilla de cabecera -->

<main class="unit-100">
	<?php if ( have_posts() ) : ?>
	<h1>Resultado de la búsqueda de: <?php echo get_search_query(); ?></h1>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
			get_template_part( 'content', 'search' );
			endwhile;
		// Visualización si no se encuentra contenido
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</main>

<?php get_footer(); ?> <!-- Llamada a la plantilla de pie de página -->
