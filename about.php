<?php /**
 * Template Name: Über uns
 *
 * @package enzgold
 * @subpackage enzgold
 */
?>

<?php get_header(); ?>

<section class="about pb100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 data-sr="enter top, wait 1s"><?php the_field('headline_uber_uns'); ?></h1>
				<p data-sr="enter top, wait 1.5s" class="center mt40 mb80"><?php the_field('introtext_uber_uns'); ?></p>
			</div>
		</div>
	</div>
		
	<div data-sr="enter bottom, wait 2s" class="col-md-12 parallax mb80" style="background: url(<?php the_field('parallax_image_uber_uns'); ?>);">
		<div class="overlay"></div>
	</div>
	<?php if( have_rows('team_repeater') ): ?>
	<div class="container">
		<div class="row">
			<?php while ( have_rows('team_repeater') ) : the_row(); ?>
				<div class="col-lg-4 col-md-4 col-xs-6 member" data-sr="enter left">
					<div class="pImage">
						<img src="<?php the_sub_field('person_bild'); ?>" alt="<?php the_sub_field('person_name'); ?>">
						<!-- <span class="addInfo">+</span> -->
					</div>
					<div class="pInfo">
						<h6><?php the_sub_field('person_name'); ?></h6>
						<span class="skills"><?php the_sub_field('person_skills'); ?></span>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
</section>
<section class="manifest pb100" data-sr="enter bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mb80"><?php the_field('headline_manifest'); ?></h1>
			</div>
			<div class="col-md-7 col-xs-12">
				<p><?php the_field('text_manifest'); ?></p>
			</div>
			<div class="col-md-5">
				<img src="<?php the_field('bild_manifest'); ?>" alt="<?php the_field('headline_manifest'); ?>">
			</div>
		</div>
	</div>
</section>

<section class="leistungen cd-product cd-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 data-sr="enter top, wait 1s"><?php the_field('headline_leistungen'); ?></h1>
				<span data-sr="enter top, wait 1.2s" class="line"></span>
				<h3 data-sr="enter top, wait 1.5s"><?php the_field('subheadline_leistungen'); ?></h3>
			</div>
		</div>
	</div>
	<div class="imagemap mt60 cd-product-wrapper" data-sr="enter bottom">
		<img src="<?php the_field('bild_leistungen'); ?>">
		<?php if( have_rows('repeater_leistungen') ): ?>
		<ul>
		<?php while ( have_rows('repeater_leistungen') ) : the_row(); ?>
			<li class="cd-single-point">
				<a class="cd-img-replace" href="#0">More</a>
				<?php
					$field = get_sub_field_object('ausrichtung_leistung');
					$value = get_sub_field('ausrichtung_leistung');
					$label = $field['choices'][ $value ];
				?>
				<div class="cd-more-info cd-<?php echo $label; ?>">
					<h2><?php the_sub_field('headline_leistung'); ?></h2>
					<p><?php the_sub_field('infotext_leistung'); ?></p>
					<a href="#0" class="cd-close-info cd-img-replace">Close</a>
				</div>
			</li> <!-- .cd-single-point -->
		<?php endwhile; ?>
		</ul>
		<?php endif;?>
		<div class="overlay"></div>
	</div>
</section>
<div class="footsec">
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<?php $valuesL = get_field('headline_footer_teaser_left');
			
			if($valuesL): ?>
				<a href="<?php the_field('footer_teaser_left_link'); ?>">
					<div class="teaser teaser-left">
						<div class="table">
							<div class="table-cell">
								<h1><?php the_field('headline_footer_teaser_left'); ?></h1>
								<p><?php the_field ('subline_footer_teaser_left'); ?></p>
							</div>
						</div>
					</div>
				</a>
			<?php endif; ?>
		</div>
		<div class="col-md-6 col-xs-12">
			<?php $valuesR = get_field('headline_footer_teaser_right');
			
			if($valuesR): ?>
				<a href="<?php the_field('footer_teaser_right_link'); ?>">
					<div class="teaser teaser-right">
						<div class="table">
							<div class="table-cell">
								<h1><?php the_field('headline_footer_teaser_right'); ?></h1>
								<p><?php the_field('subline_footer_teaser_right'); ?></p>
							</div>
						</div>
					</div>
				</a>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer();?>