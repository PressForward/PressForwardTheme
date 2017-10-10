<div id="sidebar1" class="sidebar large-2 medium-2 columns" role="complementary">

	<?php if ( is_active_sidebar( 'usecase-sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'usecase-sidebar' ); ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
	<?php else: ?>
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
