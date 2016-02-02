<h4>content image is this one!</h4>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div class="thumbnail-image">
	<?php the_post_thumbnail(); ?>
</div>
<p>format: <?php echo get_post_format(); ?></p>
<small><?php the_time('F j, Y g:i a') .  the_category(); ?></small>
<?php the_content(); ?>	