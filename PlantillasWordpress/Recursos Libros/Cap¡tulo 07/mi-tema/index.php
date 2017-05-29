<?php get_header() ; ?> <!-- Llamada a la cabecera -->
<main>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article>
			<header class="titulo-entrada">
				<h2><a href="<?php the_permalink(); ?>">
					<?php the_title(); ?></a></h2>
			</header>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_sidebar(); ?> <!-- Llamada a la barra lateral -->
<?php get_footer(); ?> <!-- Llamada al pie página -->