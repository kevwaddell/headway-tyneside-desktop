<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<?php if ($_SERVER['SERVER_NAME']=='http://www.headwaytyneside.com') { ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRQV2XS');</script>
<!-- End Google Tag Manager -->
<?php } ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content ="width=device-width,user-scalable=yes">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ($_SERVER['SERVER_NAME']=='http://www.headwaytyneside.com') { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRQV2XS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	
<?php } ?>
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