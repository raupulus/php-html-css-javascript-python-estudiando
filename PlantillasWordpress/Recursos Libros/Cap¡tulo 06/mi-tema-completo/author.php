<?php get_header(); ?> <!-- Llamada a la plantilla de pie de cabecera -->

<main class="unit-100">
	<h1><?php echo get_the_author(); ?></h1>
	<h2>Sobre el autor</h2>
	<p class="autor"><?php the_author_meta( 'description' ); ?></p>
	<h2>Perfil:</h2>
	<p>
		<strong>Correo</strong>: <?php echo the_author_meta('user_email'); ?><br />
		<strong>Web</strong>: <?php echo the_author_meta('user_url'); ?><br />
	</p>
	<p><?php echo get_the_author(); ?> ha escrito <?php echo get_the_author_posts(); ?> entradas en esta web.</p>
</main>

<?php get_footer(); ?> <!-- Llamada a la plantilla de pie de página -->