<?php

/*
Template Name: Brews (Individual)
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="five columns">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php $page_class = sanitize_title( $post->post_title ); ?>
      <div class="default-content-area content-area <?php echo esc_attr( $page_class ) ?>-content delay-1 first-margin-offset">
        <h3>
          <?php the_title(); ?>
        </h3>
        <h4>
          <?php the_field('brew_description'); ?>
        </h4>
        <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
    </div>
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
						<div class="each-brew-image delay-2">'.wp_get_attachment_image($attachment->ID, 'brew-standard').'</div>';
					}
				}
			?>
    </div>
  </div>

</div><!-- end .content-container -->

<?php get_footer(); ?>