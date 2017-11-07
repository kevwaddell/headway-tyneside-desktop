<?php 
$diary_pg = get_page_by_path( 'diary' );
//echo '<pre>';print_r($news_posts);echo '</pre>';
?>
<section id="events-section" class="page-section events-list">
	<div class="container">
		<header class="section-header">
			<div class="row">
				<div class="col-xs-6">
					<h2><i class="fa fa-calendar fa-lg text-muted"></i> Headway Events</h2>
				</div>
				<div class="col-xs-6 text-right">
					<a href="<?php echo get_permalink( $diary_pg->ID );?>" class="btn btn-default btn-lg text-uppercase">View All <i class="fa fa-angle-double-right"></i></a>
				</div>
			</div>
		</header>
		<div class="row">
		</div>
	</div>	
</section>			
