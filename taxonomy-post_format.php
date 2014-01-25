<?php get_header(); ?>

	<section class="category postlist">

		<header class="archive-header">
			<h1 class="archive-title">
			<?php
				if (is_tax('post_format', 'post-format-aside')) :
					echo 'Asides';
				elseif (is_tax( 'post_format', 'post-format-image')) :
					echo 'Images';
				elseif (is_tax( 'post_format', 'post-format-video')) :
					echo 'Videos';
				elseif (is_tax( 'post_format', 'post-format-audio')) :
					echo 'Audio';
				elseif (is_tax( 'post_format', 'post-format-quote')) :
					echo 'Quotes';
				elseif (is_tax( 'post_format', 'post-format-link')) :
					echo 'Links';
				elseif (is_tax( 'post_format', 'post-format-gallery')) :
					echo 'Galleries';
				else :
					echo 'Archives';
				endif;
			?>
			</h1>
		</header>

		<?php get_template_part('loop'); ?>

	</section> <!-- /archive-section -->

<?php get_footer(); ?>
