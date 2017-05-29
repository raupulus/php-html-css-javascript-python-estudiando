<?php
/* Template name: Página sin barra lateral */

get_header(); ?> <!-- Llamada a la plantilla de cabecera -->

<main class="unit-100">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="article">
			<!-- Elección de la plantilla de página -->
			<?php get_template_part( 'content', 'page' ); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?> <!-- Llamada a la plantilla de pie de página -->