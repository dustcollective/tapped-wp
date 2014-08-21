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
        <h3><?php the_field('introduction_title'); ?></h3>
        <?php the_field('introduction'); ?>
      </div>
      <div class="default-content-area content-area red-content delay-1 home-tweet-container" style="background-color:#BF3A3F;min-height:1% !important;">
      	<h3>@tappedleeds</h3>
      	<div class="home-tweet"></div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  
</div> <!-- end .content-container -->

<?php get_footer(); ?>