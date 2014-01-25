<?php get_header(); ?>

<?php get_sidebar(); ?>

	<main role="main">
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>

			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

			<?php the_content(); // Dynamic Content ?>

			<?php comments_template(); ?>

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
