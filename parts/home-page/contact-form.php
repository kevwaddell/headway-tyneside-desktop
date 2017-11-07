<?php
$form = get_field( 'hp_form', 'options' );
$address = get_field( 'address', 'options' );
//echo '<pre class="debug">';print_r($form);echo '</pre>';	
?>

<section id="contact-section" class="page-section contact-form">
	<div class="container">
		<header class="section-header">
			<h2><i class="fa fa-comments fa-lg text-muted"></i> Getting in Touch</h2>
		</header>
		<?php if( function_exists( 'ninja_forms_display_form' ) ){  ?>
		<?php ninja_forms_display_form($form); ?>
		<?php } ?>
		
	</div>	
</section>	