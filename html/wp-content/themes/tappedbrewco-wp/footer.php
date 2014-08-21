<?php /* Mobile navigation */ ?>
<div class="mobile-navigation">
  <div class="row">
    <div class="fixed-navigation menu-holder">Menu</div>
  </div>
  <div class="mobile-navigation-children">
    <div class="row">
      <div class="fixed-navigation">
        <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
        <div class="social-media-container">
          <ul>
            <li><a class="ss-social ss-icon" href="https://www.facebook.com/pages/Tapped-Leeds/428565417243126" target="_blank">facebook</a></li>
            <li><a class="ss-social ss-icon" href="https://twitter.com/tappedleeds" target="_blank">twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /* Full navigation */ ?>
<div class="full-navigation">
  <div class="row">
    <div class="fixed-navigation"> <a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <?php bloginfo( 'name' ); ?>
      </a>
      <div class="social-media-container">
        <ul>
          <li><a class="ss-social ss-icon" href="https://www.facebook.com/pages/Tapped-Leeds/428565417243126" target="_blank">facebook</a></li>
          <li><a class="ss-social ss-icon" href="https://twitter.com/tappedleeds" target="_blank">twitter</a></li>
        </ul>
      </div>
      <?php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
    </div>
  </div>
</div>
<script src="http://fast.fonts.com/jsapi/81a44ad8-f837-4a75-a3b3-73fcf1f7c4c3.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/webfonts/ss-social.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/webfonts/ss-standard.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/libs/foundation.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.foundation.reveal.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.isotope.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.fancybox.pack.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.backstretch.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/libs/tweetie.min.js"></script>

<?php if ( is_page( 'food-menu' ) ) : ?>

<?php if ( get_field('background_slider', 520) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('background_slider', 520) ): ?>
	"<?php the_sub_field('each_image', 520); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>

<?php else : ?>

<?php switch(date('N')) {
case 1: ?>
<?php if ( get_field('monday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('monday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
case 2: ?>
<?php if ( get_field('tuesday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('tuesday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
case 3: ?>
<?php if ( get_field('wednesday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('wednesday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
case 4: ?>
<?php if ( get_field('thursday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('thursday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
case 5: ?>
<?php if ( get_field('friday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('friday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
case 6: ?>
<?php if ( get_field('saturday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('saturday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
case 7: ?>
<?php if ( get_field('sunday', 57) ) : ?>
<script>
$.backstretch([
	<?php while ( has_sub_field('sunday', 57) ): ?>
	"<?php the_sub_field('each_image', 57); ?>",
	<?php endwhile; ?>
], {
	fade: 750,
	duration: 5000
});
</script>
<?php endif; ?>
<?php break;
default:
} ?>

<?php endif; ?>

<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>

</body></html>