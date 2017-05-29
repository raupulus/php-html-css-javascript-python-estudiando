	</div> <!-- Cierre de la caja #contenido -->
	<footer>
		<h2>
		  <?php bloginfo('description'); ?>
		</h2>
		<p>
		<?php
		if( get_theme_mod( 'ver_texto_pdp' ) == true) {
		  echo get_theme_mod( 'texto_pie_de_pagina', 'Web creada con WordPress' );
		  }
		?>
		</p>
	</footer>
<?php wp_footer(); ?>
</body>
</html>