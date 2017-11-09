<?php
$add_map = get_field('add_map');	
?>
<?php if ($add_map) { ?>
<?php
$map = get_field('map');	
?>
<?php //echo '<pre class="debug">';print_r($map);echo '</pre>'; ?>	
<div id="map"></div>		
<script>
  function initMap() {
    var uluru = {lat: <?php echo $map['lat']; ?>, lng: <?php echo $map['lng']; ?>};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxwGDnoY_lkMkbEaQPlHfryaZ-eq_CtRM&callback=initMap"></script>
<?php } ?>