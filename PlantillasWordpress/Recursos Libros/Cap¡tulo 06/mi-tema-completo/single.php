<?php get_header(); ?> <!-- Llamada a la plantilla de cabecera -->

<!-- Las dos barras laterales están activas  -->
<?php if ( is_active_sidebar('izquierda') && is_active_sidebar('derecha') ) : ?>
	<aside id="izquierda" class="unit-25">
		<?php get_sidebar( 'izquierda' ); ?>
	</aside>
	<main class="unit-50">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="article">
				<!-- Elección del formato de la entrada -->
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php the_post_navigation(); ?>
				<?php // Abrir comentarios
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</main>
	<aside id="derecha" class="unit-25">
		<?php get_sidebar( 'derecha' ); ?>
	</aside>
<!-- La barra lateral izquierda está activa - La barra lateral derecha está inactiva -->
<?php elseif ( is_active_sidebar('izquierda') && is_active_sidebar('derecha')==false ) : ?>
<aside id="izquierda" class="unit-25">
	<?php get_sidebar( 'izquierda' ); ?>
</aside>
<main class="unit-75">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="article">
			<!-- Elección del formato de la entrada -->
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php the_post_navigation(); ?>
			<?php // Abrir comentarios
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<!-- La barra lateral izquierda está inactiva - La barra lateral derecha está activa -->
<?php elseif ( is_active_sidebar('izquierda')==false && is_active_sidebar('derecha') ) : ?>
<main class="unit-75">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="article">
			<!-- Elección del formato de la entrada -->
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php the_post_navigation(); ?>
			<?php // Abrir comentarios
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<aside id="derecha" class="unit-25">
	<?php get_sidebar( 'derecha' ); ?>
</aside>
<!-- Las dos barras laterales están inactivas  -->
<?php elseif ( is_active_sidebar('izquierda')==false && is_active_sidebar('derecha')==false ) : ?>
<main class="unit-100">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="article">
			<!-- Elección del formato de la entrada -->
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php the_post_navigation(); ?>
			<?php // Abrir comentarios
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php endif; ?>

<?php get_footer(); ?> <!-- Llamada a la plantilla de pie de página -->