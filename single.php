<?php /**
 * Template Name: Single Portfolio Item
 *
 * @package enzgold
 * @subpackage enzgold
 */
?>
<?php get_header(); ?>

<section class="hero"> 
	<?php the_post_thumbnail();?>
	<h1 class="portfolio_headline">
		<?php the_field('headline_portfolio_item'); ?>
		<span><?php the_field('portfolio_typ'); ?></span>
	</h1>
	<div class="container">
		<div class="table">
			<div class="table-cell">
				
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-12">
				<h1 class="portfolio_headline">
					<?php the_field('headline_portfolio_item'); ?>
				</h1>
			</div>
		</div> -->
	</div>
</section>

<section class="portfolioitem">
	<!-- <div class="row">
		<div class="col-md-12">
			<h1><?php the_field('headline_portfolio_item'); ?></h1>
		</div>
	</div> -->
	<?php if( have_rows('portfolio_row') ): ?>
	<?php while ( have_rows('portfolio_row') ) : the_row(); ?>
	<div class="row">
		
		<div class="col-md-12">
			<div class="row">
				<?php the_sub_field('inhalt'); ?>
			</div>
		</div>
		
	</div>
	<?php 

	$image = get_sub_field('big_image');

	if( !empty($image) ):
	?>
	<div class="row">
		<div class="col-md-12">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
<div class="metanav">
	<a href="">
		<?php next_post_link( '<strong>%link</strong>' ); ?>
		<span class="prev"></span>
	</a>
	<a href="">
		<span class="next"></span>
	</a>
</div>
<div class="footsec">
	<div class="row">
		<div class="col-md-6">
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
		<div class="col-md-6">
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
<?php get_footer(); ?>