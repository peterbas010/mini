<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX_a45uDqUjQBZkZP5LiT94SRTR3kc0Qk">
    </script>
    <script type="text/javascript">
    	var map;
		function initialize() {
			var mapOptions = {
			  zoom: 7,
			  center: new google.maps.LatLng(52.07708896773811, 5.3161657601594925)
			};

			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			//put the positions into a variable
			var positions = [
				new google.maps.LatLng(<?php echo $this->positions[0];?>, <?php echo $this->positions[1];?>),
				new google.maps.LatLng(<?php echo $this->positions[2];?>, <?php echo $this->positions[3];?>)];

			//set the markers
			var marker = new google.maps.Marker({
			    position: positions[0],
			    map: map,
			    title:"guessed location"
			});

			var marker = new google.maps.Marker({
			    position: positions[1],
			    map: map,
			    title:"right location"
			});

			//set the line between the two positions
			var line = new google.maps.Polyline({
			    path: positions,
			    strokeColor: '#C56C60',
			    strokeOpacity: 1.0,
			    strokeWeight: 2
			  });

			line.setMap(map);
		};

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<div class="container" id="result">
	<h1>Result</h1>
	<div class="box">
		<h2><?php echo $this->points . ' ';?> points!!</h2>
	</div>

	<div class="box">
		<div class="result_map" id="map-canvas"></div>
	</div>

</div>
