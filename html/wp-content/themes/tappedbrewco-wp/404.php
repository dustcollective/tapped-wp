<?php get_header(); ?>

<div class="content-container"> <!-- include in every template -->
  
  <div class="row">
    <div class="six columns">
      <div class="default-content-area content-area red-content delay-1 first-margin-offset">
        <h3>Oh no! File not found</h3>
        <p>The page you were looking for was not found. This could be because of a 'dead-link' or you may have mis-typed a URL.</p>
        <p>You may find the following useful:</p>
		<p><a href="javascript:history.go(-1)"><span class="ss-icon">back</span> Back</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url() ?>"><span class="ss-icon">home</span> Home</a></p>
      </div>
    </div>
  </div>

</div><!-- end .content-container -->

<?php get_footer(); ?>