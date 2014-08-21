<div class="content-container"> <!-- include in every template -->

  <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php $args = array(
				'post_type' => 'attachment',
				'post_status' => null,
				'post_parent' => $post->ID,
				'order'       => ASC,
				'orderby'	  => menu_order,
				'post_mime_type' => 'image',
				'numberposts' => -1,
			);
			$attachment_page = get_attachment_link( $attachment_id );
			$attachments = get_posts($args);
			$attachments_caption[] = get_the_excerpt();
				if ($attachments) { ?>
	<div class="each-journal-image-container clearfix">
    <div class="four columns" style="height:auto;">
      <?php foreach ($attachments as $attachment) { 
						echo '<div class="each-journal-image delay-1">
						<a class="fancybox" rel="gallery1" href="'.wp_get_attachment_url($attachment->ID).'">
						'.wp_get_attachment_image($attachment->ID, 'journal-standard').'
						</a>
						</div>'; } ?>
    </div>
    <div class="two columns">
      <div class="each-journal-image-caption delay-2">
        <p>
          <?php starkers_posted_on() ?>
        </p>
        <?php the_content( __( 'Continue reading &rarr;', 'starkers' ) )?>
      </div>
    </div>
	</div>
    <div class="clear"></div>
    <?php } else { ?>
    <div class="each-journal-text-only-container">
    <div class="six columns" style="height:auto;">
      <div class="each-journal-text-only delay-1">
        <p><?php the_title() ?></p>
        <div class="each-journal-text-only-text">
        	<p class="each-journal-text-only-time"><?php starkers_posted_on() ?></p>
        	<?php the_content(); ?>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <?php } ?>
    <?php endwhile; // End the loop. Whew. ?>
    <?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <div class="blog-pagination-container">
    	<div class="six columns">
	    	<div class="less-posts"><?php previous_posts_link( __( '&larr; Less', 'starkers' ) ); ?></div>
	    	<div class="more-posts"><?php next_posts_link( __( 'More &rarr; ', 'starkers' ) ); ?></div>
    	</div>
	</div>
    <?php endif; ?>
  <div class="default-content-area content-area off-white-content twitter-feed delay-3 first-margin-offset">
    <h3><span class="ss-icon ss-social">twitter</span></h3>
    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/TappedBrewCo" data-widget-id="351638081885057026" data-chrome="noheader nofooter noborders transparent noscrollbar" data-link-color="#141b41" data-tweet-limit="4">Tweets by @TappedBrewCo</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <p><a href="https://www.twitter.com/tappedbrewco" target="_blank">Follow us on Twitter</a></p>
  </div>
    </div>

</div> <!-- end .content-container -->