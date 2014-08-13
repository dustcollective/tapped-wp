<?php

/*
Template Name: Contact
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->

<div class="row">
	<div class="four columns">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="default-content-area content-area green-content first-margin-offset delay-1">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
	</div>
		<?php endwhile; ?>
	<div class="four columns">
			<div class="default-content-area content-area off-white-content first-margin-offset delay-2">
				<h3>Keep up-to-date</h3>
				<?php the_field('sign_up'); ?>
			</div>
	</div>
</div>

</div> <!-- end .content-container -->

<?php get_footer(); ?>