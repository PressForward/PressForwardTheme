<?php
// Adjust the amount of rows in the grid
$grid_columns = 2; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="row archive-grid" data-equalizer> <!--Begin Row:-->

<?php endif; ?>
<!--
<div class="card" style="width: 300px;">
  <div class="card-divider">
    This is a header
  </div>
  <img src="assets/img/generic/rectangle-1.jpg">
  <div class="card-section">
    <h4>This is a card.</h4>
    <p>It has an easy to override visual style, and is appropriately subdued.</p>
  </div>
</div>
-->
		<!--Item: -->
		<div class="large-5 columns panel large-offset-1" data-equalizer-watch>

			<article class="card" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

				<section class="featured-image" itemprop="articleBody">
					<?php the_post_thumbnail('full'); ?>
				</section> <!-- end article section -->
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<header class="article-header card-section">
					<h3 class="title"><?php the_title(); ?></h3>

				</header> <!-- end article header -->
        </a>
			</article> <!-- end article -->

		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Row: -->

<?php endif; ?>
