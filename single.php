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
	<div class="overlay"></div>
</section>

<section class="portfolioitem">
	<div class="row">
		<div class="col-md-12">
			<h1><?php the_field('headline_portfolio_item'); ?></h1>
		</div>
	</div>
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

<?php ger_footer(); ?>