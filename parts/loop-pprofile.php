<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->

<section class="entry-content large-8 medium-8 columns" itemprop="articleBody">
			<?php if ( has_post_thumbnail( get_the_ID() ) ): ?>
		<div class="media-object">
			  <div class="media-object-section">
			    <div class="thumbnail">
		           <?php the_post_thumbnail('full'); ?>
	       </div>
       </div>
       <div class="media-object-section main-section">
		        <?php the_content(); ?>
	     </div>
    </div> <?php else: ?>
	     <?php the_content();
     endif; ?>

</section> <!-- end article section -->
<section class="entry-content large-4 medium-4 columns">
  <?php $links = get_post_meta($post->ID, "Links", true);
  if (!empty($links)) {
    echo "<ul>";
    foreach($links as $link) {
    echo "<li>" . $link . "</li>";
    }
    echo "</ul>";
  } ?>
</section>
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->