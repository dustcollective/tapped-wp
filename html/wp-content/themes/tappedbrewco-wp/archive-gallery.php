<?php get_header(); ?>

<?php if ( have_posts() ) the_post(); ?>

<?php rewind_posts(); ?>

<div class="content-container"> <!-- include in every template -->
	<div class="row">
		<div class="six columns">
			
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="default-content-area content-area delay-1" style="min-height:1px;">
					<div class="each-gallery-container clearfix">
						<h3><?php the_title(); ?></h3>
						<?php $gallery_images = get_field('gallery'); if ($gallery_images) : ?>
						
					 		<?php foreach ($gallery_images as $gallery_image) : ?>
					 		<div class="each-gallery-image">
								<a class="fancybox" rel="gallery1" href="<?php echo $gallery_image['sizes']['large']; ?>">
									<img src="<?php echo $gallery_image['sizes']['thumbnail']; ?>" />
								</a>
							</div>
							<?php endforeach; ?>
							
					    <?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
				
		</div>
		<div class="clear"></div>
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div class="blog-pagination-container">
			<div class="six columns">
		    	<div class="less-posts"><?php previous_posts_link( __( '&larr; Less', 'starkers' ) ); ?></div>
		    	<div class="more-posts"><?php next_posts_link( __( 'More &rarr; ', 'starkers' ) ); ?></div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div><!-- end .content-container -->

<script>

$('.default-content-area:first-of-type').addClass('first-margin-offset');

var colorClasses = ['#141B41', '#008552', '#C03236', '#BE863C'];
$('.default-content-area').each(function() {
	var colorClassesPicked = colorClasses[Math.floor(Math.random() * colorClasses.length)];
    $(this).css('background-color', colorClassesPicked);
});

</script>

<?php get_footer(); ?>