<?php get_header(); ?>

	<section class="tag postlist">

		<header class="archive-header">
			<h1 class="archive-title"><?php printf('Tag: %s', single_tag_title('', false)); ?></h1>

			<?php
				// Show an optional term description.
				$term_description = term_description();
				if ( ! empty($term_description)) :
					printf('<div class="taxonomy-description">%s</div>', $term_description);
				endif;
			?>
		</header>

		<?php get_template_part('loop'); ?>

	</section> <!-- /archive-section -->

<?php get_footer(); ?>
