<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

		    <div id="block1" class="large-12 medium-12 columns" role="main">
          	<h1>PressForward Builds Content Hubs</h1>
          	<h2>Centralize digital media into a single online resource.</h2>

						<div class="row" id="featuregroups">
          			<div class="large-4 columns block1-circles text-center">
										<span class="fa-stack fa-2x">
											<i class="fa fa-square fa-stack-2x"></i>
											<i class="fa fa-rss fa-stack-1x fa-inverse"></i>
										</span>

										<h3>Gather</h3>
					  				<p>Use the bookmarklet and feed reader to collect content from around the web.</p>
								</div>

								<div class="large-4 columns block1-circles text-center">
										<span class="fa-stack fa-2x">
				  						<i class="fa fa-square fa-stack-2x"></i>
				  						<i class="fa fa-filter fa-stack-1x fa-inverse"></i>
										</span>
										<h3>Organize</h3>
										<p>Filter, sort, and select content in your WordPress dashboard.</p>
          			</div>

								<div class="large-4 columns block1-circles text-center">
										<span class="fa-stack fa-2x">
				  						<i class="fa fa-square fa-stack-2x"></i>
				  						<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
										</span>
				            <h3>Publish</h3>
										<p>Amplify and share the content that matters to you.</p>
          			</div>
        		</div>

				<div class="row text-center" id="downloadbtn">
					<a class="button primary large" href="http://www.wordpress.org/plugins/pressforward">Download the Free WordPress Plugin</a>
				</div>

				<div class="row text-center row-rule">
					<div class="small-3 small-centered columns">
					<hr>
				</div>
				</div>


			</div> <!-- end #block1 (large 12 columns) -->

		</div> <!-- end #inner-content (row) -->


		<div id="blocktest" class="expanded row">
			<div class="row">
			<div class="large-8 columns">
					<div class="row">
							<div class="large-12 feature-row">
								<h1>Gather</h1>
								<ul>
									<li>Add feeds to the RSS reader to bring all your content to PressForward.</li>
									<li>Grab content from around the web with the "Nominate This" bookmarklet.</li>
								</ul>
							</div>
					</div>

					<div class="row">
						 <div class="large-12 feature-row">
							 <h1>Organize</h1>
		 					<ul>
		 						<li>Read and review content without leaving your WordPress dashboard.</li>
		 						<li>Select and draft the posts you want to share with your community</li>
		 						<li>Use folders to group feeds and filter posts</li>
		 					</ul>
						 </div>
				 </div>

				 <div class="row">
						 <div class="large-12 feature-row">
							 <h1>Publish</h1>
			 				<ul>
			 					<li>Preserve original metadata and redirect to the source.</li>
			 					<li>Amplify chosen content by publishing it to your site or sharing it on twitter.</li>
			 					<li>Engage your community by featuring recent and relevant content all in one place.</li>
			 				</ul>
			 				<a class="button primary" href="#">Read more</a>
						 </div>
				 </div>

			</div>
			<div class="large-4 columns">
					<img class="homepageimage" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/full_one_filter_3.png';?>">
			</div>
		</div>
		</div> <!--close blocktest -->

		<div class="row text-center row-rule">
			<div class="small-3 small-centered columns">
			<hr>
		</div>
		</div>

	<div id="content2" class="slider-container">
	<div class="row">
	<div class="medium-12 large-12 columns">
		<?php $slider_autoplay = false;
		echo '<div class="orbit" role="region" data-options="' . $slider_autoplay . '" aria-label="Editor\'s Choice" data-orbit>'; ?>
	  	<ul class="orbit-container">
	    	<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
	    	<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

				<?php
				$postcats = array('post_type'  => 'usecase');
				$feat_posts = get_posts($postcats);
				$bullets = 1;
				foreach($feat_posts as $post) {
	        $trim_title = get_post_field('post_title', $id);
	        $short_title = wp_trim_words( $trim_title, $numwords = 25, $more = '… ' );
					$trimexcerpt = get_post_field('post_content', $id);
	        $shortexcerpt = wp_trim_words( $trimexcerpt, $numwords = 75, $more = '… ' );
							echo '<li class="orbit-slide">';
							echo '<div class="row">';
							echo '<div class="medium-12 large-12 columns"><h2>' . $short_title . '</h2></div></div>';
							echo '<div class="row">';
							echo '<div class="medium-8 large-8 columns">';

							echo '<p class="info-title">' . $shortexcerpt . '</p> <a href="' . get_permalink() . '
							" alt="' . get_the_title() . '" class="hollow button primary">Read More</a></div>';
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
							echo '<div class="large-4 medium-4  columns">';
							if(empty($thumb)) {
								echo '';
							} else {
								echo '<img src="' . $thumb[0] . '" class="thumbnail home"></div>';
							}
							echo '</div>';
							echo '</li>';
							$bullets++;
				}
	?>
	</ul>
	<nav class="orbit-bullets" id="slider-nav">
			<?php
			$counter = 0;
			while($counter < $bullets - 1) {
				if ($counter == 0) {
				echo '<button data-slide="'. $counter . '"><span class="show-for-sr">slide details.</span><span class="show-for-sr">Current Slide</span></button>';
				$counter++;
			} elseif ($counter < $bullets - 1) {
				echo '<button data-slide="'. $counter . '"><span class="show-for-sr">slide details.</span></button>';
				$counter++;
			}
			} ?>
	  </nav>
		</div> <!-- close .orbit -->
	</div>
	</div><!--  close .row #slider -->
	</div>

	</div>
	<!-- </div> end content -->

<?php get_footer(); ?>
