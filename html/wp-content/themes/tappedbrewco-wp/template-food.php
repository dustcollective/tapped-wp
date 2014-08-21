<?php

/*
Template Name: Food
*/

get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
	<div class="row">
				
		<div class="four columns">
			<div class="default-content-area content-area red-red-content delay-1 first-margin-offset">
				<h3>Big Dan's Pizzas</h3>
				<p><?php the_field('introduction'); ?></p>
			</div>
		</div>
		
		<div class="four columns">
			<div class="default-content-area content-area first-margin-offset delay-2" style="padding:0;">
				<div class="each-menu-item-container">
	      
				<?php if ( get_field ('each_menu_item') ) : ?>
					<?php while ( has_sub_field('each_menu_item') ) : ?>
						
					<div class="each-menu-item">
						<span class="each-menu-item-title">
							<?php the_sub_field('title'); ?><br/><span class="price"><?php the_sub_field('price'); ?></span>
							<span class="each-menu-item-description">
								<?php the_sub_field('description'); ?>
							</span>
						</span>
					</div>
						
					<?php endwhile; ?>
				<?php endif; ?>
				
				</div>
			</div>
		</div>
	
	</div><!-- end .content-container -->

<?php get_footer(); ?>