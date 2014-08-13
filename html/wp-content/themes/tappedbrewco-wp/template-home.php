<?php

/*
Template Name: Home
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="six columns">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="default-content-area content-area red-red-content delay-1 first-margin-offset" style="min-height:1% !important;">
        <h3>
          <?php the_field('introduction_title'); ?>
        </h3>
        <?php the_field('introduction'); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

</div> <!-- end .content-container -->

<?php get_footer(); ?>