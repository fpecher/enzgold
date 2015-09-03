<?php get_header(); ?>

<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1 class="mb80"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>