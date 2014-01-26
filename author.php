<?php get_header(); ?>

	<section class="author postlist">

		<header class="archive-header">
			<h1 class="archive-title">
			<?php
				/*
				 * Queue the first post, that way we know what author
				 * we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop properly
				 * with a call to rewind_posts().
				 */
				the_post();
				printf( __( 'All posts by %s', 'twentyfourteen' ), get_the_author() );
			?>
			</h1>
			<?php if (get_the_author_meta('description')) : ?>
				<div class="author-description"><?php the_author_meta('description'); ?></div>
			<?php endif; ?>
		</header>

	<?php 
		/*
		 * Since we called the_post() above, we need to rewind
		 * the loop back to the beginning that way we can run
		 * the loop properly, in full.
		 */
		rewind_posts();

		get_template_part('loop'); 
	?>

	</section>

<?php get_footer(); ?>