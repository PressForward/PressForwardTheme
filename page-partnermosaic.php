<?php
/*
Template Name: Partner Mosaic
*/
?>
<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row">
    <main id="main" class="large-12 medium-12 columns" role="main">
  <h1><?php the_title(); ?></h1>
<div class="row small-up-2 medium-up-3 large-up-4">

  <?php
  $postcats = array('post_type'  => 'partner',
                    'posts_per_page' => 100);
  $feat_posts = get_posts($postcats);
  $bullets = 1;
  foreach($feat_posts as $post) {

        echo '<div class="column column-block">';
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
        if(empty($thumb)) {
          echo 'Error! A thumbnail is missing.';
        } else {
          echo '<a href="' . get_permalink() . '"><img src="' . $thumb[0] . '" class="thumbnail"></a></div>';
        }
  }
  ?>
</div>
</div>
</main>
</div>
</div>


<?php get_footer(); ?>
