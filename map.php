<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>							
		<section class="page">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<?php include 'map/main.php';?>
		</section>
		<?php include 'scripts.php';?>
		<script type="text/javascript">
		$(function () { // when document is ready
			
			if(GBrowserIsCompatible()){
				var map = document.getElementById("mapWidget");
				var m = new GMap2(map);
				m.setCenter(new GLatLng(40.802306,-73.950715), 14); // pass in lat and long
				var c = new	GMapTypeControl(); // switch map modes
				m.openInfoWindow(m.getCenter(), document.createTextNode("You can find Suite 116 here."));
				m.setMapType(G_NORMAL_MAP); // sets default mode G_SATELLITE_MAP. G_HYBRID_MAP
				
				m.addControl(c);
				m.addControl(new GLargeMapControl()); // zoom feature
			}
			else{
				return;
			}
		});
		</script>	
	</body>		
</html>