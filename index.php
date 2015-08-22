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
			<div class="preview-portfolio item col-md-12 col-xs-12" style="background: url('<?php the_sub_field('image'); ?>') no-repeat; background-size: cover;">
				<div class="table">
					<div class="table-cell">
						<div class="pv-hover">
							<div class="square">
								<div class="link-box"><a href="<?php the_permalink(); ?>"><i class="fa fa-link fa-2x"></i></a></div>
								<p class="hover-firma" ><?php the_sub_field('name'); ?></p>
								<p class="hover-branche" ><?php the_sub_field('branche'); ?></p>
								<svg version="1.1" class="hover-icon hover-drop" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="19px" height="24px" viewBox="0 0 262 329" enable-background="new 0 0 262 329" xml:space="preserve">
									<path fill="#FFFFFF" d="M130.167,315.683c-48.191,0-88.827-28.505-108.699-76.252C15.186,224.335,12,208.345,12,191.908
										c0-31.031,19.417-57.915,20.245-59.043c5.164-7.057,13.631-18.589,18.816-25.629l64.044-86.976
										c3.805-5.166,9.295-8.129,15.062-8.129c5.767,0,11.256,2.964,15.062,8.129l64.044,86.976c5.186,7.041,13.653,18.573,18.814,25.629
										c0.829,1.129,20.246,28.012,20.246,59.043c0,16.437-3.186,32.427-9.469,47.522C218.994,287.178,178.357,315.683,130.167,315.683z
										 M130.167,26.143c-1.285,0-2.627,0.862-3.779,2.426l-64.044,86.976c-5.179,7.032-13.635,18.551-18.794,25.596
										c-0.17,0.234-17.538,24.402-17.538,50.768c0,14.581,2.823,28.757,8.392,42.14c17.887,42.974,52.792,67.623,95.763,67.623
										c42.972,0,77.878-24.649,95.765-67.623c5.566-13.383,8.391-27.559,8.391-42.14c0-26.366-17.367-50.534-17.542-50.775
										c-5.156-7.039-13.612-18.557-18.79-25.589l-64.044-86.976C132.794,27.004,131.452,26.143,130.167,26.143z"/>
									<path fill="#ffffff" d="M174.917,210.736c-33.631,0-54.476-28.921-87.434-28.921c-32.958,0-48.568,25.626-48.568,25.626
										c3.095,47.717,42.752,83.332,91.252,83.332c48.078,0,87.462-37.099,91.159-84.229C221.184,196.128,208.359,210.736,174.917,210.736z
										"/>
								</svg>
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
