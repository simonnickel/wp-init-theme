<aside class="sidebar" role="complementary">

	<h2>Sidebar</h2>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</div> <!-- /primary-sidebar -->
	<?php endif; ?>

</aside> <!-- /sidebar -->