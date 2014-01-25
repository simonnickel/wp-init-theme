<?php get_header(); ?>

	<section class="single">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php 
			$post_format = ( get_post_format() ? get_post_format() : 'standard' );
			get_template_part( 'content/single', $post_format ); 
		?>

		</article> <!-- /post -->

	<?php endwhile; ?>

	</section> <!-- /single-section -->

<?php get_footer(); ?>
