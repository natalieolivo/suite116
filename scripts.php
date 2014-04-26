<script>
(function($){
    var w = $(".page").width(),
        h = $(".page").height();

    // $("nav").css("width", w);
    // $(window).on("resize", function() { 
    //     $("nav").css("width", w);        
    // });
    
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
S116.Page = (function($slider){   
    if($slider.length<1) return;

    $('.bxslider').bxSlider({
        auto: true,
        autoControls: true,
        mode: 'fade'
    });

    return this;
})($('.bxslider'));
</script>
<section class="social-facebook-like">
    <?php include 'footer.php';?>
    <fb:like class="fb" ref="home" href="http://www.suite116.com" font="arial" colorscheme="light"></fb:like>
</section>
