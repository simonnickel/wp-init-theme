<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$post_format = ( get_post_format() ? get_post_format() : 'standard' );
		get_template_part( 'content/loop', $post_format ); 
	?>
	</article><!-- .loop-article -->

<?php endwhile; ?>

<?php else: ?>

	<article>
		<?php get_template_part( 'content/default', 'empty' ); ?>
	</article><!-- .empty -->

<?php endif; ?>
