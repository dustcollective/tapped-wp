<?php

/*
Template Name: Journal
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="four columns first-margin-offset">
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
				if ($attachments) {
					foreach ($attachments as $attachment) {
						echo '
						<div class="each-journal-image delay-1">
						<a class="fancybox" rel="gallery1" href="'.wp_get_attachment_image_src($attachment->ID, 'journal-standard').'">
						'.wp_get_attachment_image($attachment->ID, 'journal-standard').'
						</a>
						<div class="each-journal-image-caption delay-2 first-padding-offset"><p>'.apply_filters( 'the_title', $attachment->post_title ).'</p></div>
						</div>';
					}
				}
			?>
    </div>
    <div class="offset-by-two three columns">
      <div class="default-content-area content-area off-white-content twitter-feed delay-3 first-margin-offset">
        <h3><span class="ss-icon ss-social">twitter</span></h3>
        <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script> 
        <script>
				new TWTR.Widget({
				version: 2,
				type: 'profile',
				rpp: 4,
				interval: 30000,
				width: 'auto',
				height: 300,
				theme: {
				shell: {
				background: '#fff6e1',
				color: '#1b234b'
				},
				tweets: {
				background: '#fff6e1',
				color: '#1b234b',
				links: '#1b234b'
				}
				},
				features: {
				scrollbar: false,
				loop: false,
				live: false,
				behavior: 'all'
				}
				}).render().setUser('tappedbrewco').start();
				</script> 
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <p><a href="https://www.twitter.com/tappedbrewco" target="_blank">Follow us on Twitter</a></p>
      </div>
    </div>
  </div>
  
</div><!-- end .content-container -->

<?php get_footer(); ?>