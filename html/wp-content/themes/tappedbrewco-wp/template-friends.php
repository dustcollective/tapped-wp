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
        	<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
	        <?php if (get_field('friends_list') ): ?>
			<ul class="friends-list">
				<?php while (has_sub_field('friends_list') ): ?>
				<li><a href="<?php the_sub_field('friend_url'); ?>" target="_blank"><?php the_sub_field('friend_title'); ?></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
		</div>
	</div>
</div><!-- end .content-container -->

<?php get_footer(); ?>