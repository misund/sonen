<aside class="sidebar" id="secondary">
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- #primary-sidebar -->
	<?php else: ?>
<p>Hei, dette er en sidebar</p>
<?php endif; ?>
</aside>
