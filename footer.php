</main>
<footer class="rodape-bg">
	<div class="rodape container">
		<div>
			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
			if (has_custom_logo()) {
				echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"' . 'class="img-fluid">';
			} else {
				echo '<h2>' . get_bloginfo('name') . '</h2>';
			} ?>
		</div>
		<ul class="redes-sociais">
			<li>
				<a href="<?= get_theme_mod('set_github'); ?>" target="blank">
					<img src="<?= INCLUDE_PATH ?>/dist/img/icones/redes-sociais/icone-github.svg" alt="Github">
				</a>
			</li>
			<li>
				<a href="<?= get_theme_mod('set_linkedin'); ?>" target="blank">
					<img src="<?= INCLUDE_PATH ?>/dist/img/icones/redes-sociais/icone-linkedin.svg" alt="Linkedin">
				</a>
			</li>
			<li>
				<a href="mailto:<?= get_theme_mod('set_email'); ?>" target="blank">
					<img src="<?= INCLUDE_PATH ?>/dist/img/icones/redes-sociais/icone-email.svg" alt="E-mail">
				</a>
			</li>
		</ul>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>