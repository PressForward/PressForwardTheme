<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->

<section class="entry-content large-8 medium-8 columns" itemprop="articleBody">
  <div class="featuredimage">
    <?php the_post_thumbnail('medium'); ?>
</div>



	     <?php the_content(); ?>


</section> <!-- end article section -->
<section class="entry-content large-4 medium-4 columns">
	<?php $site_url = get_post_meta($post->ID, "site_url", false);
	if (!empty($site_url)) {
  echo '<a class="button primary" href="' . implode($site_url) . '">View Site</a>';
	} ?>
  <?php $launchyear = get_post_meta($post->ID, "date_launched", false);
  if (!empty($launchyear)) {
    echo '<h3>Publication Details</h3>';
    echo '<p>Launched in: ' . implode($launchyear) . '</p>';
  } ?>

	<?php $missionstatement = get_post_meta($post->ID, "mission_statement", false);
	if (!empty($missionstatement)) {
		echo '<h4>Mission Statement</h4>';
		echo '<p>' . implode($missionstatement) . '</p>';
	} ?>
<?php $pubstaff = get_post_meta( $post->ID, $key = 'publication_staff', $single = false );
if (!empty($pubstaff)) {
	echo '<h4>Publication Staff</h4>';
	echo '<p>' . implode($pubstaff) . '</p>';
} ?>
  <?php $links = get_post_meta($post->ID, "Links", false);
  if (!empty($links)) {
    echo '<h4>Links:</h4>';
    echo '<ul>';
    foreach($links as $link) {
    echo '<li>' . $link . '</li>';
    }
    echo '</ul>';
  } ?>



</section>

<div class="row text-center row-rule">
  <div class="small-3 small-centered columns">
  <hr>
</div>
</div>

<section class="entry-content large-12 medium-12 columns">
<?php $press = get_post_meta($post->ID, "press_release", false); ?>
      <?php if(!empty($press)) {
        echo '<h3>Press</h3>';
        echo '<p>' . implode($press) . '</p>';
      } ?>
</section>
<section class="entry content large-12 medium-12 columns">
  <?php $orgchart = get_post_meta($post->ID, "org_chart", false ); ?>
  <?php $orgchart_alt = get_post_meta($post->ID, "OrgChart_AltText", false ); ?>
  <?php if(!empty($orgchart)) {
    echo '<h3>Organizational Chart</h3>';
    echo '<img src="' . implode($orgchart) . '" alt="' . implode($orgchart_alt) . '">';
  } ?>

</section>
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->
