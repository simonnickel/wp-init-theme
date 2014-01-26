<?php get_header(); ?>

	<section class="search">

		<header class="archive-header">
			<h1 class="archive-title"><?php printf('Results for: %s', get_search_query()); ?></h1>
		</header>

		<?php get_template_part('loop'); ?>

	</section>

<?php get_footer(); ?>
