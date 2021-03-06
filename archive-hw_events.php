<?php get_header(); ?>
<?php
$diary_pg = get_page_by_path( 'diary' );	

$event_args = array(
'post_type'	=> 'hw_events',
'posts_per_page' => -1,
'order'	=> 'ASC',
'meta_key'	=>	'start_date',
'orderby'	=> 'meta_value_num',
'meta_query' => array (
		'value' => array( date('Ymd'), date('Ymd', strtotime('last day of next month')) ), 
		'compare' => 'BETWEEN'
		)
);
$wp_query = new WP_Query($event_args);	
//echo '<pre class="debug">';print_r($wp_query->posts);echo '</pre>';
?>
	<article <?php post_class("page-content"); ?>>
		<header class="page-title">
			<div class="container">
				<h1><?php echo get_the_title($diary_pg->ID); ?></h1>
			</div>
		</header>

		<section id="events-section" class="page-section events-list">
			<div class="container">
			<header class="section-header">
				<h2><i class="fa fa-calendar fa-lg text-muted"></i> Up coming event information...</h2>
			</header>
			<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>	
				<?php
				$start_date_raw = get_field( 'start_date');
				$end_date_raw = get_field( 'end_date');
				$start_date = new DateTime($start_date_raw, new DateTimeZone(get_option('timezone_string')) );
				if ($end_date_raw != $start_date_raw) {
				$end_date = new DateTime($end_date_raw, new DateTimeZone(get_option('timezone_string')) );	
				}
				$start_time = get_field( 'start_time');
				$end_time = get_field( 'end_time');
				$start_all_day = get_field( 'all_day_start');
				?>
					<article id="grid-item-<?php echo $k; ?>" class="grid-item">
					<div class="calendar-date">
						<span class="mth"><?php echo $start_date->format('M'); ?></span>
						<span class="dy"><?php echo $start_date->format('j'); ?></span>
						<span class="wd"><?php echo $start_date->format('D'); ?></span>
					</div>
					<div class="list-entry">
						<header class="event-item-header">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php if ($start_all_day) { ?>
							<span class="times">All day</span>
							<?php } ?>
							<?php if (isset($end_date)) { ?>
							<span class="times"><?php echo $start_date->format('M j') ?> - <?php echo $end_date->format('M j') ?></span>
							<?php } ?>
							<?php if (!empty($start_time)) { ?>
							<span class="times"><?php echo $start_time; ?></span>
							<?php } ?>
							<?php if (!empty($end_time)) { ?>
							<span class="times"> - <?php echo $end_time; ?></span>
							<?php } ?>
						</header>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="goto-link"><i class="fa fa-arrow-right fa-lg"></i><span class="sr-only">Read more</span></a>
					</div>
				</article>
						
				<?php endwhile; ?>
				<?php else: ?>
				<br>
				<div class="alert alert-info text-center">
					<h3 class="text-uppercase" style="margin-top: 0px;">Please check back soon!</h3>
					<p>There are no future events in the diary at the moment.</p>
				</div>
				<?php endif; ?>
			</div>	
		</section>
	</article>
	
<?php get_footer(); ?>