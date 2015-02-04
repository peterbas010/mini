<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX_a45uDqUjQBZkZP5LiT94SRTR3kc0Qk">
    </script>
    <script type="text/javascript">
    	var map;
    	var marker;
		function initialize() {
			var mapOptions = {
			  zoom: 7,
			  center: new google.maps.LatLng(52.07708896773811, 5.3161657601594925)
			};

			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			google.maps.event.addListener(map, 'click', function(event) {
				var pos = event.latLng;

				if (!marker) {
			        marker = new google.maps.Marker({
			            position: pos,
			            map: map
			        })

					$("#guess").show();
			    } else {
			        marker.setPosition(pos);
			    }

			    $("#lat").val(pos['k']);
			    $("#lng").val(pos['D']);
			});
		};

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<div class="container">
			<img src="<?php echo URL . 'public/images/' . $this->photo->filename;?>" id="game_photo">
			<form action="<?php echo URL . 'game/result';?>" method="post">
				<input type="hidden" name="lat" id="lat">
				<input type="hidden" name="lng" id="lng">
				<input type="hidden" name="id" value="<?php echo $this->photo->id;?>">

				<button type="submit" class=" " id="guess">guess</button>
			</form>
			<div class="game" id="map-canvas"></div>
</div>
