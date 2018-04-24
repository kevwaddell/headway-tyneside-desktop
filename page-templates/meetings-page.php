<?php 
/*
Template Name: Regular Meetings Page
*/
 ?>

<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php $diary_pg = get_page_by_path( 'diary' ); ?>
	<article <?php post_class("page-content"); ?>>
			<header class="page-title">
				<div class="container">
					<h1><?php echo get_the_title($diary_pg->ID); ?></h1>
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
					<div class="col-xs-4">
						<figure class="feat-img">
							<img src="<?php echo $feat_img[0]; ?>" class="img-responsive">	
						</figure>
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
			<?php
			$regular_meetings = get_field( 'hwt_reg_meetings', 'options' );
			?>
		<?php if (!empty($regular_meetings)) { ?>
		<section id="meetings-section" class="page-section events-list">
			<div class="container">
			<header class="section-header">
				<h2><i class="fa fa-users fa-lg text-muted"></i> <?php the_title(); ?></h2>
			</header>
				<?php foreach ($regular_meetings as $rm) { 
				$sg_meeting_img = $rm['img'];
				$sg_meeting_title = $rm['title'];
				$sg_frequency = $rm['frequency'];
				$sg_meeting_date = $rm['date'];
				$sg_meeting_time = $rm['time'];
				$sg_meeting_venue = $rm['venue'];
				$sg_meeting_desc = $rm['description'];
				$sg_meeting_contact_name = $rm['contact_name'];
				$sg_meeting_contact_email = $rm['contact_email'];
				$sg_meeting_contact_tel = $rm['contact_tel'];
				$feat_img = wp_get_attachment_image_src($sg_meeting_img, 'medium' );
				//echo '<pre class="debug">';print_r($feat_img);echo '</pre>';	
				?>
				<div class="meeting-details">
					<div class="row">
						<div class="col-xs-4">
							<div class="meeting-img" style="background-image: url(<?php echo $feat_img[0]; ?>)"></div>
						</div>
						<div class="col-xs-8">
								<div class="title"><?php echo $sg_meeting_title; ?></div>
								<div class="frequency"><?php echo $sg_frequency; ?></div>
								<div class="date">Date: <?php echo $sg_meeting_date; ?></div>
								<div class="time">Time: <?php echo $sg_meeting_time; ?></div>	
								<div class="venue">Venue: <?php echo $sg_meeting_venue; ?></div>	
								<div class="desc"><?php echo $sg_meeting_desc; ?></div>
								<div class="contact">Contact: <?php echo $sg_meeting_contact_name; ?><br>
								Email: <a href="mailto:<?php echo $sg_meeting_contact_email; ?>"><?php echo $sg_meeting_contact_email; ?></a><br>
								Tel: <?php echo $sg_meeting_contact_tel; ?>
								</div>
						</div>
					</div>
				</div>
				<?php } ?>
		</div>
		</section>		
		<?php } ?>
	</article>					
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>