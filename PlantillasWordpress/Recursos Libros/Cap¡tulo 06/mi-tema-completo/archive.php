<?php get_header(); ?> <!-- Llamada a la plantilla de cabecera -->

<main class="unit-100">
		<?php if ( have_posts() ) : ?>
			<h3><?php the_archive_title(); ?></h3>
			<p><?php the_archive_description(); ?></p>
			<?php
				while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
				endwhile;
		// Visualización de la plantilla si no hay contenido para mostrar
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</main>
<?php get_footer(); ?> <!-- Llamada a la plantilla de pie de página -->
