<?php get_header(); ?>

<?php
/*
	Template Name: About Us Template
*/
?>

<h1><?php the_title(); ?></h1>
<hr>

<div style="text-align: center;">
	<img src="http://lorempixel.com/600/200/">
</div>


<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>		
	<?php endwhile; ?>
<?php endif; ?>

<div>
	<div style="display: inline-block;">
		<img style="width: 100%;" src="http://lorempixel.com/200/200/">
	</div>
	<div style="display: inline-block;">
		<img style="width: 100%;" src="http://lorempixel.com/200/200/">
	</div>
	<div style="display: inline-block;">
		<img style="width: 100%;" src="http://lorempixel.com/200/200/">
	</div>
</div>

<?php get_footer(); ?>