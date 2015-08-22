<?php /**
 * Template Name: Kontakt
 *
 * @package enzgold
 * @subpackage enzgold
 */
?>

<?php get_header(); ?>
<div class="mapcontainer">
	<?php
	$location = get_field('maps_kontakt');
	if( !empty($location) ):
	?>
	<div class="map" id="map"></div>

	<script type="text/javascript">
	  //<![CDATA[
		function load() {
		var lat = <?php echo $location['lat']; ?>;
		var lng = <?php echo $location['lng']; ?>;
	// coordinates to latLng
		var latlng = new google.maps.LatLng(lat, lng);
	// map Options
		var myOptions = {
		zoom: 16,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		panControl: false,
		zoomControl: false,
		scaleControl: true,
		draggable:false
	   };
	//draw a map
		var map = new google.maps.Map(document.getElementById("map"), myOptions);
		var marker = new google.maps.Marker({
		position: map.getCenter(),
		map: map
	   });
	}
	// call the function
	   load();
	//]]>
	</script>
	<?php endif; ?>

</div>
<div class="overlay">
	<div class="table">
		<div class="table-cell">
			<h1><?php the_field('titel_kontakt'); ?></h1>
			<p><?php the_field('subline_kontakt'); ?></p>
		</div>
	</div>
</div>
<?php get_footer(); ?>