<?php /**
 * Template Name: Startseite
 *
 * @package enzgold
 * @subpackage enzgold
 */
?>
<?php get_header(); ?>


<!-- Big video on Frontpage -->
<section class="videobg">
	<div class="table">
		<div class="table-cell">
			<h1><?php the_field('headline_video'); ?></h1>
			<p><?php the_field('introtext_video'); ?></p>
		</div>
	</div>
</section>

<section class="comm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_field('headline_kommunikation'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img class="circles" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kommunikation-x2.png">
			</div>
		</div>
	</div>
</section>


<section class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_field('headline_portfolio') ?></h1>
				<span class="line"></span>
				<h3><?php the_field('subheadline_portfolio') ?></h3>
			</div>
		</div>
	</div>
	
	<div class="landingpage-portfolio">
		<?php if( have_rows('portfolio_repeater') ): ?>
		<div class="row">
			<?php while ( have_rows('portfolio_repeater') ) : the_row(); ?>
			<div class="preview-portfolio item col-md-12 col-xs-12" style="background: url('<?php the_sub_field('image'); ?>');">
				<div class="table">
					<div class="table-cell">
						<div class="pv-hover">
							<div class="square">
								<img class="hover-icon link" src="img/hover-icon.png" alt="">
								<p class="hover-firma" ><?php the_sub_field('name'); ?></p>
								<p class="hover-branche" ><?php the_sub_field('branche'); ?></p>
								<img class="hover-icon hover-drop" src="img/hover-drop.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="leitbild">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_field('headline_leitbild'); ?></h1>
				<span class="line"></span>
				<h3><?php the_field('subheadline_leitbild'); ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<p class="quote"><?php the_field('zitat_leitbild'); ?></p>	
			</div>
			<div class="col-md-6">
				<img src="<?php the_field('bild_zitat'); ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="btnholder">
					<a href="<?php the_field('link_zitat'); ?>" class="btn lined">mehr erfahren</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
