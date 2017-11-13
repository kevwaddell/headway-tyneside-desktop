<?php get_header(); ?>
 	<?php if(function_exists('bcn_display')){ ?>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		<div class="container">
			<?php  bcn_display(); ?>
		</div>
	</div>
	<?php } ?>
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<?php
		$sb_imgs = get_field( 'sb_imgs' );	
		$date = get_the_date('F jS, Y', $post);
		?>
		<article <?php post_class("page-content"); ?>>
			<div class="container">
				<div class="entry">
				<?php if ( has_post_thumbnail() || !empty($sb_imgs)) { 
				$post_thumbnail_id = get_post_thumbnail_id();
				$feat_img = wp_get_attachment_image_src($post_thumbnail_id, array(350,350) );	
				//echo '<pre class="debug">';print_r($feat_img);echo '</pre>';
				?>
				<div class="row">
					<div class="col-xs-8">
				<?php } ?>
				<header class="post-header">
					<h1><?php the_title(); ?></h1>
					<p class="article-info"><time><?php echo $date; ?></time>|<?php echo get_the_term_list( $post->ID, 'category', '<span>', ', ', '</span>|' ); ?></p>
				</header>
				<?php the_content(); ?>
				<?php if ( has_post_thumbnail() ) { ?>
					</div>
					<div class="col-xs-4">
						<figure class="feat-img post-img">
							<img src="<?php echo $feat_img[0]; ?>" class="img-responsive">	
						</figure>
						<?php if (!empty($sb_imgs)) { ?>
						<?php foreach ($sb_imgs as $img) { 
						$caption = $img['caption'];
						?>
						<figure class="feat-img post-img<?php echo (count($sb_imgs) > 2) ? ' sml-img':''; ?>">
							<img src="<?php echo $img['img']; ?>" class="img-responsive">
							<?php if (!empty($caption)) { ?>
							<figcaption class="caption"><?php echo $caption; ?></figcaption>			
							<?php } ?>	
						</figure>
						<?php } ?>			
						<?php } ?>
					</div>
				</div>
				<?php } ?>
				</div>
			</div>
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>