<section class="kontakt">
	<div class="container">
		<div class="col-md-12">
			<h1>kontakt</h1>
			<span class="line"></span>
			<h3>Lassen Sie uns etwas Nettes da</h3>
		</div>
		<div class="col-md-12">
			<?php echo do_shortcode( '[contact-form-7 id="40" title="Kontaktformular Footer"]' ); ?>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<span class="copyright">copyright <?php echo date('Y'); ?> enzgold</span>
				
				<span><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></span>
			</div>
		</div>
	</div>
</footer>
</body>
</html>