<?php
/* Plantilla de entrada con formato Minientrada  */
?>
<header class="entrada">
	<h1><?php the_title() ?></h1>
</header>
<div class="contenido">
	<?php the_content() ?>
</div>
<footer class="entrada">
	<?php the_date() ?> - <?php the_author() ?>
</footer>