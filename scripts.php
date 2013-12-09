<script>
(function($){
    var w = $(".page").width(),
        h = $(".page").height();

    $("nav").css("width", w);
    $(window).on("resize", function() { 
        $("nav").css("width", w);        
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
<section class="social-facebook-like">
    <fb:like class="fb" ref="home" href="http://www.suite116.com" font="arial" colorscheme="light"></fb:like>
</section>
