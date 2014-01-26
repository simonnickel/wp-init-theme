<?php if (have_posts()): while (have_posts()) : the_post(); 

	$post_format = (get_post_format() ? get_post_format() : 'standard' ); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class($post_format); ?>>

		<?php get_template_part( 'article/loop', $post_format ); ?>
	
	</article>

<?php endwhile; ?>

<?php else: ?>

	<article class="loop-empty">

		<?php get_template_part( 'article/loop', 'empty' ); ?>
	
	</article>

<?php endif; ?>

<footer class="pagination">
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
</footer>