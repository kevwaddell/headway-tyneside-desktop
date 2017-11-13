<?php 
/*
Template Name: Courses and Workshops Page
*/
 ?>
 
<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<?php
		$sb_imgs = get_field( 'sb_imgs' );	
		$courses_cat = get_category(22);
		//echo '<pre>';print_r($courses_cat);echo '</pre>';
		$courses_args = array(
		'numberposts' => 6,
		'category_name'	=> $courses_cat->name,
		'orderby'	=> 'date',
		'order'	=> 'DESC'
		);
		$courses_posts = get_posts($courses_args);	
		?>
		<article <?php post_class("page-content"); ?>>
			<header class="page-title">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>
			<div class="container">
				<div class="entry">
				<?php if ( has_post_thumbnail() || !empty($sb_imgs)) { 
				$post_thumbnail_id = get_post_thumbnail_id();
				$feat_img = wp_get_attachment_image_src($post_thumbnail_id, array(350,350) );	
				//echo '<pre class="debug">';print_r($feat_img);echo '</pre>';
				?>
				<div class="row">
					<div class="col-xs-4 page-sb">
						<figure class="feat-img">
							<img src="<?php echo $feat_img[0]; ?>" class="img-responsive">	
						</figure>
						<?php if (!empty($sb_imgs)) { ?>
						<?php foreach ($sb_imgs as $img) { 
						$caption = $img['caption'];
						?>
						<figure class="feat-img">
							<img src="<?php echo $img['img']; ?>" class="img-responsive">
							<?php if (!empty($caption)) { ?>
							<figcaption class="caption"><?php echo $caption; ?></figcaption>			
							<?php } ?>	
						</figure>
						<?php } ?>			
						<?php } ?>
					</div>
					<div class="col-xs-8">
				<?php } ?>
				<?php the_content(); ?>
				<?php if ( has_post_thumbnail() ) { ?>
					</div>
				</div>
				<?php } ?>
				</div>
			</div>
			
			<?php if (!empty($courses_posts)) { ?>
			<section id="news-section" class="page-section post-grid">
				<div class="container">
					<header class="section-header">
						<div class="row">
							<div class="col-xs-6">
								<h2><i class="fa fa-mortar-board fa-lg text-muted"></i> Courses and Workshops</h2>
							</div>
							<div class="col-xs-6 text-right">
								<a href="<?php echo get_category_link($courses_cat->term_id);?>" class="btn btn-default btn-lg text-uppercase">View All <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</header>
					<div class="row">
						<?php foreach ( $courses_posts as $k => $post ) : setup_postdata( $post ); 
						$bg_img = get_the_post_thumbnail_url( $post , 'medium');
						//echo '<pre>';print_r($bg_img);echo '</pre>';
						$date = get_the_date('M j, Y', $post);
						?>
						<div class="col-xs-4">
							<article id="grid-item-<?php echo $k; ?>" class="grid-item">
								<a href="<?php the_permalink(); ?>"><div class="img" style="background-image: url(<?php echo $bg_img; ?>)"></div></a>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
							</article>
						</div>
						<?php 
						endforeach; 
						wp_reset_postdata();
						?>
					</div>
				</div>	
			</section>			
			<?php } ?>
			
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>