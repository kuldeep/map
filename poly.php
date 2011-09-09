<!DOCTYPE html>
<html>
	<head></head>
	<body onload="initialize()">
		
		 <div id="map_canvas" style='width:500px;height:500px;'></div> 
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript"> 
 
  	function initialize() {
    	var myLatLng = new google.maps.LatLng(41.882934, -87.636843);
    	var myOptions = {
	      zoom: 13,
	      center: myLatLng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
		 var bermudaTriangle;
 
    	var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
		
		var points = [
						new google.maps.LatLng(41.887432,-87.634152),
						new google.maps.LatLng(41.887732,-87.628152),
						new google.maps.LatLng(41.887732,-87.628152),
						new google.maps.LatLng(41.888932,-87.624452),
						new google.maps.LatLng(41.8884327437,-87.6141673203),
						new google.maps.LatLng(41.8884327437,-87.6141673203),
						new google.maps.LatLng(41.8884212082,-87.6141883557),
						new google.maps.LatLng(41.8844804779,-87.6135558928),
						new google.maps.LatLng(41.884424752,-87.613635607),
						new google.maps.LatLng(41.884424752,-87.613635607),
						new google.maps.LatLng(41.884153,-87.619718),
						new google.maps.LatLng(41.883362,-87.620539),
						new google.maps.LatLng(41.880851,-87.620518),
						new google.maps.LatLng(41.880851,-87.620518),
						new google.maps.LatLng(41.880795,-87.62442),
						new google.maps.LatLng(41.880795,-87.62442),
						new google.maps.LatLng(41.882088,-87.624454),
						new google.maps.LatLng(41.882088,-87.624454),
						new google.maps.LatLng(41.883232,-87.624452),
						new google.maps.LatLng(41.884529,-87.625345),
						new google.maps.LatLng(41.884544,-87.634007),
						new google.maps.LatLng(41.884544,-87.634007),
						new google.maps.LatLng(41.887432,-87.634152)
						];
		
		boundry = new google.maps.Polygon({
				paths: points,
				strokeColor: "#FF0000",
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: "#FF0000",
				fillOpacity: 0.35
			 });
		boundry.setMap(map);
	}

	</script>
	</body>	
</html>
