<?php get_header(); ?>

<?php get_sidebar(); ?>

	<main role="main">
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php 
			$post_format = ( get_post_format() ? get_post_format() : 'standard' );
			get_template_part( 'content/single', $post_format ); 
		?>

		</article><!-- .single-post -->

	<?php endwhile; ?>

	<?php else: ?>

		<article id="empty-single">

			<?php get_template_part( 'content/single', 'none' ); ?>

		</article><!-- .empty-loop -->

	<?php endif; ?>

	</section><!-- .section -->
	</main>

<?php get_footer(); ?>
