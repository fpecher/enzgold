<section class="kontakt">
	<div class="container">
		<div class="col-md-12">
			<h1>kontakt</h1>
			<span class="line"></span>
			<h3>Lassen Sie uns was Nettes da</h3>
		</div>
		<div class="col-md-12">
			<?php echo do_shortcode( '[contact-form-7 id="40" title="Kontaktformular Footer"]' ); ?>
			<form action="post">
				<input type="text" class="ip-name" name="name" placeholder="name">
				<input type="text" class="ip-mail" name="e-mail" placeholder="e-mail Adresse">
				<input type="text" class="ip-betreff" name="betreff" placeholder="betreff">
				<textarea class="ip-nachricht" name="nachricht" placeholder="Ihre Nachricht an uns"></textarea>
				<button>kontakt aufnehmen</button>
			</form>
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