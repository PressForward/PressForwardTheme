<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'resourcessb' ) ) : ?>

		<?php dynamic_sidebar( 'resourcessb' ); ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
	<?php else: ?>
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
