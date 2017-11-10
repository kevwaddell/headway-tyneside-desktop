<?php
$map = get_field('location_map','options');	
?>
<?php //echo '<pre class="debug">';print_r($map);echo '</pre>'; ?>	
<div id="location-map"></div>		
<script>
  function initMap() {
    var uluru = {lat: <?php echo $map['lat']; ?>, lng: <?php echo $map['lng']; ?>};
    var map = new google.maps.Map(document.getElementById('location-map'), {
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