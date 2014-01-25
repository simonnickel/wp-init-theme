<?php get_header(); ?>

<?php get_sidebar(); ?>

	<main role="main">
		<section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section><!-- .section -->
	</main>

<?php get_footer(); ?>
