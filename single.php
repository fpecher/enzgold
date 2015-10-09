<?php /**
 * Template Name: Single Portfolio Item
 *
 * @package enzgold
 * @subpackage enzgold
 */
?>
<?php get_header(); ?>

<section class="hero">
	<div>
		<?php the_post_thumbnail();?>
	</div>
	<h1 class="portfolio_headline">
		<?php the_field('headline_portfolio_item'); ?>
		<span><?php the_field('portfolio_typ'); ?></span>
	</h1>
</section>

<section class="portfolioitem">
	<?php if( have_rows('portfolio_row') ): ?>
	<?php while ( have_rows('portfolio_row') ) : the_row(); ?>
	<div class="row">
		
		<div class="col-md-12">
			<div class="row" data-sr="enter bottom">
				<?php the_sub_field('inhalt'); ?>
			</div>
		</div>
		
	</div>
	<?php 

	$image = get_sub_field('big_image');

	if( !empty($image) ):
	?>
	<div class="row">
		<div class="col-md-12" data-sr="enter bottom">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php
	$next_post = get_next_post();
	$prev_post = get_previous_post();
	if (!empty( $next_post)): ?>
	<?php
		// if(empty ($prev_post)){
		// 	$prev_post = get_next_post();
		// };
	?>
	<div class="metanav">
		<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
			<span class="prev"></span>
		</a>

		<a href="<?php echo get_permalink( $next_post->ID ); ?>">
			<span class="next"></span>
		</a>
	</div>
	<?php endif; ?>
	<?php endif; ?>
</section>
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