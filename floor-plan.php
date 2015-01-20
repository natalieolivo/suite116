<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>							
		<section class="page">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<section class="floor-plan"></div>  
		</section>
		<?php include 'scripts.php';?>
		<script src="js/third-party/three.min.js"></script>
  		<script src="js/third-party/OrbitControls.js"></script>
  		<script>
  			// our 3D code will go here
  			// Set up the scene, camera, and renderer as global variables.
  			var scene, camera, renderer, controls;

  			//init();
  			//animate();

  			function init() {
  				// create the scene and set the scene size
  				scene = new THREE.Scene();
  				var page = document.querySelector(".page"),
              width = $(page).width(),
  					  height = $(page).width();

          console.log("width", width);
          console.log("HEIGHT", height);
  				// create the renderer and add it to DOM
  				renderer = new THREE.WebGLRenderer({antialias:true});
  				renderer.setSize(width, height);
          
  				page.appendChild(renderer.domElement);
  				
  				// Create a camera, zoom it out from the model a bit, and add it to the scene.
    			camera = new THREE.PerspectiveCamera(-90, width / height, 0.1, 10000);
    			camera.position.x = 18;
          camera.position.y = -35;
          camera.position.z = 30;
    			scene.add(camera);
  				camera.aspect = width / height;
      		camera.updateProjectionMatrix();

      			// Create an event listener that resizes the renderer with the browser window.
			    window.addEventListener('resize', function() {
			      // var width = window.innerWidth,
			      //     height = window.innerHeight;
			      // renderer.setSize(width, height);
			      // camera.aspect = width / height;
			      // camera.updateProjectionMatrix();
			    });

			    // Set the background color of the scene.
    			renderer.setClearColorHex(0xbbbbbb, 1);
 
    			// Create a light, set its position, and add it to the scene.
    			var light = new THREE.DirectionalLight(0xffffff, 0.5);
    			light.position.set(-100,-100,-300);
    			scene.add(light);

    			// Load in the mesh and add it to the scene.
    			var loader = new THREE.JSONLoader();
    			loader.load( "mesh/suite116.js", function(geometry){
	      			var material = new THREE.MeshLambertMaterial({color: 0xC77660});
	      			mesh = new THREE.Mesh(geometry, material);
	      			scene.add(mesh);
    			});

    			// Add OrbitControls so that we can pan around with the mouse.
    			controls = new THREE.OrbitControls(camera, renderer.domElement);
  			}

  			// Renders the scene and updates the render as needed.
        function animate() {
 
          // Read more about requestAnimationFrame at http://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
          requestAnimationFrame(animate);
 
          // Render the scene.
          renderer.render(scene, camera);
          controls.update();
        }
		    S116.Ajax.getPageData('floor-plan').done(S116.Ajax.afterFetch);
  		</script>
	</body>		
</html>