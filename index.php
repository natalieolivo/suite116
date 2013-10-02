<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<?php include 'home.php'; ?>
		<script>
		(function($){
			$("nav").css("width", $(".page").width());
			$(window).on("resize", function() { 
				$("nav").css("width", $(".page").width())
			});
            
            // expand menu
            $(".js-toggle-state").on("click", function(){
                if($(this).find("li").eq(0).hasClass("show")) {
                    $(this).find("li").removeClass("show").addClass("hide");
                    $(this).removeClass("js-expanded");
                } else {
                    $(this).find("li").removeClass("hide").addClass("show");
                    $(this).addClass("js-expanded");
                }                
            });
		}(jQuery));
		</script>
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="suite116">Tweet</a>		
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<fb:like class="fb" ref="home" href="http://www.suite116.com" font="arial" colorscheme="dark"></fb:like>
	</body>		
</html>