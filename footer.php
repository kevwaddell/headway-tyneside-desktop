	<?php get_template_part( 'parts/global/support', 'box' ); ?>
	
	</div><!-- .content-area -->
	
	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php
	$copyright = get_field('copyright_notice', 'options');	
	?>	
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php echo $copyright; ?></div>
			</div>
			<div class="col-xs-4 text-right">
				<?php wp_nav_menu(array( 'container' => '', 'theme_location' => 'social_links_menu', 'menu_class'  => 'list-inline social-links','fallback_cb' => false ) ); ?>
			</div>
		</div>
	</div>	
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
