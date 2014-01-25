<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$post_format = ( get_post_format() ? get_post_format() : 'standard' );
		get_template_part( 'content/loop', $post_format ); 
	?>
	</article><!-- .loop-article -->

<?php endwhile; ?>

<?php else: ?>

	<article>
		<?php get_template_part( 'content/default', 'empty' ); ?>
	</article><!-- .empty -->

<?php endif; ?>

<div class="pagination">
<?php
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
?>
</div>