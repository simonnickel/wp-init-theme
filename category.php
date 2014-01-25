<?php get_header(); ?>

	<section class="category">

		<header class="archive-header">
			<h1 class="archive-title"><?php printf('Category: %s', single_cat_title('', false)); ?></h1>

			<?php
				// Show an optional term description.
				$term_description = term_description();
				if ( ! empty($term_description)) :
					printf('<div class="taxonomy-description">%s</div>', $term_description);
				endif;
			?>
		</header> <!-- /category-header -->

		<?php get_template_part('loop'); ?>

	</section> <!-- /category-section -->

<?php get_footer(); ?>
