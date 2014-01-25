<?php
/**
 * The template for displaying a normal post
 */
?>
<header class="entry-header">
	<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;
	?>

	<div class="entry-meta">
		<?php 
			if ( is_sticky() && is_home() && ! is_paged() ) {
				echo '<span class="featured-post">' . __( 'Sticky', 'twentyfourteen' ) . '</span>';
			}

			// Set up and print post meta information.
			printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
				esc_url( get_permalink() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);

			the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' );
		?>
		<span class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="entry-content">
	<?php
		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
	?>
</div><!-- .entry-content -->
