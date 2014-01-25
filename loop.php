<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		get_template_part( 'content', get_post_format() );
	
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else:

		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

endif; ?>
