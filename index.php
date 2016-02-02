<?php get_header(); ?>

<h1>Sample index.php file!</h1>

<div style="float: left; width: 70%;">
	<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>

				<?php get_template_part('content', get_post_format()); ?>	
		
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<div style="float: right;">
	<?php get_sidebar(); ?>	
</div>

<div style="clear: both;">
	<?php get_footer(); ?>
</div>