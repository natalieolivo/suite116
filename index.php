<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>							
		<section class="page">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<?php include 'home.php';?>		
		</section>
		<?php include 'scripts.php';?>
		<script>
			// $(function(){
			// 	var imgs = $("img:not(.logo)"),
			// 			currentImg = 0,
			// 			currentImgElement = imgs.eq(currentImg),
			// 			figcaption = $(".block-text"),
			// 			caption = ["this is 1", "2200 Sq Ft, Adjoining Rooms", "Excellent for Showers, Weddings, Birthdays ...", "Great Raw Space with Natural, Classy Appeal", "Call Us For Availability Today"],
			// 			oldScrollTop = $(window).scrollTop(),
			// 			direction;

			// 	$(window).on("scroll", function(){
			// 		var newScroll = $(window).scrollTop();					
					
			// 		// direction
			// 		if(newScroll > oldScrollTop) {
			// 			direction = "down";
			// 		} else {
			// 			direction = "up";						
			// 		}
			// 		currentImgHeight = currentImgElement.offset().top+currentImgElement.outerHeight(true);
			// 		if(($(this).scrollTop() >= (Math.round(currentImgHeight / 10) * 10))) {
			// 			if(direction === "down") {
			// 				currentImg++;	
			// 			} else {
			// 				currentImg++;	
			// 			}						
			// 			currentImgElement = imgs.eq(currentImg);
			// 			figcaption.html(caption[currentImg]);					
			// 		}					
			// 		oldScrollTop = newScroll;
			// 	});
			// }());
		</script>		
	</body>		
</html>