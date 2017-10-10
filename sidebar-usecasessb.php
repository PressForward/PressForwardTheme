<div id="sidebar1" class="sidebar large-3 medium-3 columns" role="complementary">

	<?php if ( is_active_sidebar( 'usecasessb' ) ) : ?>

		<?php dynamic_sidebar( 'usecasessb' ); ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
	<?php else: ?>
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
