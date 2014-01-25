<header class="entry-header">
	<h1 class="entry-title">This is a quote!</h1>

	<div class="entry-meta">
		<?php printf('<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"> by <span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
				esc_url(get_permalink()),
				esc_attr(get_the_date('c')),
				esc_html(get_the_date()),
				esc_url(get_author_posts_url(get_the_author_meta('ID'))),
				get_the_author()
			);
		?>
			<p class="entry-categories">Categories: <?php the_category(' '); ?></p>
			<p class="entry-tags">Tags: <?php the_tags(' '); ?></p>
			<p class="entry-comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></p>
	</div>
</header> <!-- /entry-header -->