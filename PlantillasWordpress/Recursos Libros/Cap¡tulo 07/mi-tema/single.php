<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="entrada-unica">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<p class="metadata">Por: <?php the_author(); ?></p>
			<p class="metadata">Publicación: <?php the_date(); ?></p>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>