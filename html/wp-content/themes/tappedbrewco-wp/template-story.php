<?php

/*
Template Name: Story
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="three columns first-margin-offset">
      <div class="each-story-container delay-1">
        <?php query_posts("post_type=page&order=ASC&orderby=menu_order&post_parent=56&posts_per_page=-1");
        while ( have_posts() ) : the_post(); ?>
        <?php $page_class = sanitize_title( $post->post_title ); ?>
        <div class="each-story <?php echo esc_attr( $page_class ) ?>">
        	<span class="each-story-title">
	        	<?php the_title(); ?>
	        </span>
	    </div>
	    <div class="each-story-separator"></div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    <?php query_posts("post_type=page&order=ASC&orderby=menu_order&post_parent=56&posts_per_page=-1"); while ( have_posts() ) : the_post(); ?>
    <?php $page_class = sanitize_title( $post->post_title ); ?>
    <div class="each-story-content <?php echo esc_attr( $page_class ) ?>">
      <div class="six columns first-margin-offset">
        <div class="default-content-area content-area navy-content <?php echo esc_attr( $page_class ) ?>-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>

</div><!-- end .content-container -->

<script>
var lastClicked = null;
// here lastClicked points to the currently visible content
var animateClasses = [

<?php query_posts("post_type=page&order=ASC&orderby=menu_order&post_parent=56&posts_per_page=-1"); while ( have_posts() ) : the_post(); ?>
    <?php $page_class = sanitize_title( $post->post_title ); ?>
    
    '<?php echo esc_attr( $page_class ) ?>',

	<?php endwhile; ?>
<?php wp_reset_query(); ?>

];
   for (var i=0; i<animateClasses.length; i++) {
      (function(animCls) {
          $('.each-story.'+animCls).click(function(event){
              if(lastClicked && lastClicked == animCls){
                  // if the lastClicked is `this` then just hide the content
                  $('.each-story-content.'+animCls).animate(
                                          { left: '-50%' }, 500,
                                          function() {
                                              $(this).hide();
                                          }).css('position','relative');
                  lastClicked = null;
              }else{
                  if(lastClicked){
                      // if something else is lastClicked, hide it,
                      //then trigger a click on the new target
                      $('.each-story-content.'+lastClicked).animate(
                                          { left: '-50%' }, 500,
                                          function() {
                                              $(this).hide();
                                              $(event.target).trigger('click');
                                          }).css('position','relative');
                      lastClicked = null;
                  }else{
                      // if there is no currently visible div,
                      // show our content
                      $('.each-story-content.'+animCls).show()
                                        .animate({ left: '0' }, 500)
                                        .css('position','relative');
                    lastClicked = animCls;
                  }
              }
          });
      })(animateClasses[i]);  //  self calling anonymous function
   }
</script>

<?php get_footer(); ?>