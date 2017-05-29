<?php get_header() ; ?> <!-- Llamada a cabecera -->
<main>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article>
			<header class="titulo-article">
				<h2><a href="<?php the_permalink(); ?>">
					<?php the_title(); ?></a></h2>
			</header>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_sidebar(); ?> <!-- Llamada a barra lateral -->
<?php get_footer(); ?> <!-- Llamada a pie de página -->