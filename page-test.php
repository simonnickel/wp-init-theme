/*
Template Name: Custom Page Test
*/

<?php get_header(); ?>

<?php get_sidebar(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
