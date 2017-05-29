<?php
/* Plantilla de entrada con formato Estándar */
?>
<header class="entrada">
	<h1><?php the_title() ?></h1>
</header>
<div class="contenido">
	<div class="extracto">
		<?php if(has_excerpt()) {
		the_excerpt() ;
		}
		?>
	</div>
	<?php the_content() ?>
</div>
<footer class="entrada">
	<?php the_category() ?> - <?php the_tags() ?> - <?php the_date() ?> - <?php the_author_posts_link() ?> - <?php edit_post_link() ?>
</footer>