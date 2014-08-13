<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<!-- Meta -->
<meta charset="utf8" />
<meta name="description" content="Located alongside the Sheffield Tap, The Tapped Brew Co. is housed within the former Edwardian Refreshment Room & Dining Rooms of Sheffield Station. With a glass front to the brew house, large copper brewers tables and plenty of seating it is the ideal venue to spend a few hours watching the brewing process first hand.">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>
<?php

    global $page, $paged;
 
    wp_title( '&mdash;', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " &mdash; $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' &mdash; ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );

?>
</title>
<!-- Stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen, projection">
<!-- Favicon(s) -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<!-- Other WP stuff -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- GA -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36746880-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- Everything else, header-wise, WP adds... -->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="overlay-preload"></div>
<div class="privacy-statement-pre-age"> <span class="ss-icon">close</span>
  <p>The Tapped Brew Co. website would like to store cookies in your browser, one of which is used by this legally mandatory age check. We also use anonymous visitor statistics to help improve our website. We never store personal information in a cookie. You cannot enter The Tapped Brew Co. website without accepting cookies.</p>
</div>