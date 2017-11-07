<?php
$slides = get_field('hp_banner_slides', 'options');	
$slides_total = count($slides);
$strap_line = get_field('website_strap_line', 'options');	
//echo '<pre>';print_r($slides);echo '</pre>';
?>

<div class="banner-hp">
	<div id="banner-hp-carousel" class="carousel slide carousel-fade" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			 <?php for ($i = 0; $i < $slides_total; $i++) { ?>
			 <li data-target="#banner-hp-carousel" data-slide-to="<?php echo $i; ?>"<?php echo ($i == 0) ? ' class="active"':'' ?>></li>
			 <?php } ?>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			 <?php foreach ($slides as $k => $slide) { ?>
			 <div class="item<?php echo ($k == 0) ? ' active':'';?>" style="background-image: url(<?php echo $slide['bg_img']; ?>)">
		      <div class="carousel-caption">
		        <h3><?php echo $slide['title']; ?></h3>
		        <p><?php echo $slide['txt']; ?></p>
		      </div>
		    </div>
			 <?php } ?>
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#banner-hp-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#banner-hp-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
</div>

<h1 class="strap-line"><?php echo $strap_line; ?></h1>
