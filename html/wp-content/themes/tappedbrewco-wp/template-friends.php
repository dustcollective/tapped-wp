<?php

/*
Template Name: Friends
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="four columns">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="default-content-area content-area navy-content delay-1 first-margin-offset">
        <h3>
          <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>
        <ul class="friends-list">
        	<?php mylinkorder_list_bookmarks('orderby=order&category_orderby=order&title_li=&categorize=0&category_name=Friends'); ?>
        </ul>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

</div><!-- end .content-container -->

<?php get_footer(); ?>