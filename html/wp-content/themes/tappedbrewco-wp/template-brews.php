<?php

/*
Template Name: Brews
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="four columns first-margin-offset">
      <div class="each-brew-container delay-1">
        <?php query_posts("post_type=page&order=ASC&orderby=menu_order&post_parent=104&posts_per_page=-1"); 
        while ( have_posts() ) : the_post(); ?>
        <?php $page_class = sanitize_title( $post->post_title ); ?>
        <div class="each-brew <?php echo esc_attr( $page_class ) ?>"> <span class="each-brew-title" style="color:<?php the_field('beer_colour'); ?>">
          <?php the_title(); ?>
          <span class="each-brew-description">
          <?php the_field('brew_description'); ?>
          </span></span> </div>
        <div class="each-brew-separator"></div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    <?php query_posts("post_type=page&order=ASC&orderby=menu_order&post_parent=104&posts_per_page=-1"); 
    while ( have_posts() ) : the_post(); ?>
    <?php $page_class = sanitize_title( $post->post_title ); ?>
    <div class="each-brew-content <?php echo esc_attr( $page_class ) ?>">
      <div class="four columns first-margin-offset">
      	<?php if (get_field('beer_colour') ) : ?>
        <div class="default-content-area content-area <?php echo esc_attr( $page_class ) ?>-content" style="background-color:<?php the_field('beer_colour'); ?>;color:#ffffff;">
        <?php else : ?>
        <div class="default-content-area content-area off-white-content <?php echo esc_attr( $page_class ) ?>-content">
        <?php endif; ?>
          <p class="title-alcohol"><?php the_title(); ?><br/>
          <?php the_field('alcohol_percentage'); ?></p>
          <?php the_field('brew_notes'); ?>
        </div>
        <?php if ( get_field('pump_clip_image') ) : ?>
			<div class="each-brew-image"><img src="<?php the_field('pump_clip_image'); ?>" /></div>
		<?php else : ?>
			<div class="each-brew-image"><img src="http://tappedbrewco.com/wp-content/uploads/2013/02/tapped-badge.png" /></div>
		<?php endif; ?>
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

<?php query_posts("post_type=page&order=ASC&orderby=menu_order&post_parent=104&posts_per_page=-1"); while ( have_posts() ) : the_post(); ?>
    <?php $page_class = sanitize_title( $post->post_title ); ?>
    
    '<?php echo esc_attr( $page_class ) ?>',

	<?php endwhile; ?>
<?php wp_reset_query(); ?>

];
   for (var i=0; i<animateClasses.length; i++) {
      (function(animCls) {
          $('.each-brew.'+animCls).click(function(event){
              if(lastClicked && lastClicked == animCls){
                  // if the lastClicked is `this` then just hide the content
                  $('.each-brew-content.'+animCls).animate(
                                          { left: '-33.3333%' }, 500,
                                          function() {
                                              $(this).hide();
                                          }).css('position','relative');
                  lastClicked = null;
              }else{
                  if(lastClicked){
                      // if something else is lastClicked, hide it,
                      //then trigger a click on the new target
                      $('.each-brew-content.'+lastClicked).animate(
                                          { left: '-33.3333%' }, 500,
                                          function() {
                                              $(this).hide();
                                              $(event.target).trigger('click');
                                          }).css('position','relative');
                      lastClicked = null;
                  }else{
                      // if there is no currently visible div,
                      // show our content
                      $('.each-brew-content.'+animCls).show()
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