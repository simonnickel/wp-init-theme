<?php
/**
 * The template for displaying a "No posts found" message
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyfourteen' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_search() ) : ?>

	<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
	
	<?php else : ?>

	<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>

	<?php endif; ?>

	<?php get_search_form(); ?>
</div><!-- .page-content -->