<!DOCTYPE html>
<html>
<head>
	<title>Jimmy Theme</title>
	<?php wp_head(); ?>
</head>
<?php
	if( is_front_page() ):
		$jimmy_classes = array('jimmy-class', 'my-class');
	else :
		$jimmy_classes = array('no-jimmy-class');
	endif;
?>
<body <?php body_class($jimmy_classes); ?>>

	<img src="<?php header_image(); ?>">

	<nav>
		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	</nav>
