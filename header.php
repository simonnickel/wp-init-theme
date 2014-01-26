<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header role="banner">
	<div class="wrap-body"><section>

		<h2 class="site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h2>
		<?php $description = get_bloginfo('description', 'display');
			if ( ! empty($description)) : ?>
				<span class="site-description"><?php echo esc_html( $description ); ?></span>
		<?php endif; ?>

		<nav class="nav" role="navigation">
			<?php wp_nav_menu(array(
				'theme_location'  => 'header-menu',
				'menu'            => '',
				'container'       => 'div',
				'container_class' => 'menu-{menu slug}-container',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul>%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			)); ?>
		</nav> <!-- /nav -->

	</section></div> <!-- /wrap-header -->
</header> <!-- /header -->

<main role="main"><div class="wrap-body">
