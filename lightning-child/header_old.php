<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
global $lightning_theme_options;
$lightning_theme_options = get_option( 'lightning_theme_options' );
?>
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to the content', 'lightning' ); ?></a>
<a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to the Navigation', 'lightning' ); ?></a>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
do_action( 'lightning_header_before' );
?>
<header class="<?php lightning_the_class_name( 'header' ); ?>">
	<h1 id="logo">
		<a href="#">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="ロゴ">
		</a>
	</h1>
	<nav>
			<ul class="cf hnav">
				<li class="about"><a href="#">About</a></li>
				<li class="works"><a href="#">Works</a></li>
				<li class="blog"><a href="#">Blog</a></li>
				<li class="contact"><a href="#">Contact</a></li>
			</ul>
	</nav>
</header>
<?php do_action( 'lightning_header_after' ); ?>
