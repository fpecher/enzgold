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
	</div>
</section>

<!-- News Section on Frontpage -->
<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12">
				<h1>News</h1>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="row">
						<article class="col-md-9">
							<div class="date">
							    <span><?php the_time( get_option( 'date_format' ) ); ?></span>
							</div>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<?php the_content(); ?>
						</article>
					</div>
				<?php endwhile; ?>
			</div><!-- ENDE .col-md-9 -->
			<aside class="col-md-3 col-xs-12">
				<h3>Veranstaltungen</h3>
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div><!-- ENDE .container -->
</section>
<section class="abteilungen">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Unsere Abteilungen</h3>
			</div>
			<div class="col-md-12">
				<div class="row item">
					<div class="col-md-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder-1.jpg">
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-8">
								<h2 class="soccer">Fußball</h2>
								<p>Zur Zeit betreiben wir beim 1.FC Steinegg eine Herrenmannschaft und eine Alt-Herren-Mannschaft.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row item">
					<div class="col-md-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder-1.jpg">
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-8">
								<h2 class="boule">Bietbouler</h2>
								<p>Zur Zeit betreiben wir beim 1.FC Steinegg eine Herrenmannschaft und eine Alt-Herren-Mannschaft.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row item">
					<div class="col-md-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder-1.jpg">
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-8">
								<h2 class="walker">Bietwalker</h2>
								<p>Zur Zeit betreiben wir beim 1.FC Steinegg eine Herrenmannschaft und eine Alt-Herren-Mannschaft.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
