<?php /**
 * Template Name: portfolio
 *
 * @package enzgold
 * @subpackage enzgold
 */
?>
<?php get_header(); ?>

<section class="hero">
	<?php the_post_thumbnail();?>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-12">
			<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_field('headline_portfolio_item'); ?></h1>

		<?php endwhile; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6">
				
		</div>
	</div>
</section>

<?php ger_footer(); ?>