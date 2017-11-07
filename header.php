<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content ="width=device-width,user-scalable=yes">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="sr-only" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
				<a class="logo" href="<?php echo get_option('home'); ?>/"><span class="sr-only"><?php bloginfo('name'); ?></span></a>
				</div>
				<div class="col-xs-6">
					<div class="tel-num text-right"><i class="fa fa-phone"></i> 0772 523 2527</div>
					<div class="email text-right"><a href="mailto:info@headwaytyneside.com"><i class="fa fa-envelope"></i> info@headwaytyneside.com</a></div>
					<div class="social text-right"><?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'social_links_menu', 'menu_class'  => 'list-inline','fallback_cb' => false ) ); ?></div>
				</div>
			</div>
			<div class="top-nav">
				<?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'top_bar_menu', 'menu_class'  => 'list-unstyled','fallback_cb' => false ) ); ?>
			</div>
		</div>
	</header><!-- #masthead -->
	
	<div id="primary" class="content-area">