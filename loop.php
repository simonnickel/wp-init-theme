<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php get_template_part( 'content', get_post_format() ); ?>
	
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article id="post-none">

		<?php get_template_part( 'content', 'none' ); ?>

	</article>
	<!-- /article -->

<?php endif; ?>
