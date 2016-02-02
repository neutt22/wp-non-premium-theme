<?php get_header(); ?>

<h1>Sample index.php file!</h1>

<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>	

	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>