<?php get_header(); ?>

		<section class="page">

			<h1><?php the_title(); ?></h1>

		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article> <!-- /article -->

		<?php endwhile; ?>

		</section> <!-- /page-section -->

<?php get_footer(); ?>
