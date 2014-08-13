<?php

/*
Template Name: Default
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="six columns">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="default-content-area content-area navy-content delay-1 first-margin-offset">
        <h3>
          <?php the_title(); ?>
        </h3>
        <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

</div><!-- end .content-container -->

<?php get_footer(); ?>