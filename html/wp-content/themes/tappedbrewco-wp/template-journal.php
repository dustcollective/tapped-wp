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
      
    </div>
  </div>
  
</div><!-- end .content-container -->

<?php get_footer(); ?>