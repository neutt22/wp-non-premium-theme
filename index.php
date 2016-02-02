<?php get_header(); ?>

<h1>Sample index.php file!</h1>

<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<small><?php the_time('F j, Y g:i a') .  the_category(); ?></small>
		<?php the_content(); ?>		
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>