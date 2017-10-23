<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-offset-1 large-10 medium-10 large-offset-1 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
