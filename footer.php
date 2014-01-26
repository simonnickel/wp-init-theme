</div></main> <!-- /wrap-main -->

<footer role="contentinfo">
	<div class="wrap-body">
		<section>
			<header>
				<h2>FOOTER Sidebar</h2>
			</header>
			<?php if (is_active_sidebar('footer-sidebar')) : ?>
			<div id="footer-sidebar" class="footer-sidebar widget-area">
				<?php dynamic_sidebar('footer-sidebar'); ?>
			</div> <!-- /footer-sidebar -->
			<?php endif; ?>
		</section>

		<section>
			<header>
				<h2>FOOTER Section 2</h2>
			</header>
			<article>
				<h2>ARTICLE</h2>
				<p>Article Text</p>
			</article>
		</section>
	</div>
</footer>

		<?php wp_footer(); ?>

	</body>
</html>