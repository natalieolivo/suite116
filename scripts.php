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

(function(w, d){
    var urlEncoded = 'url='+encodeURIComponent(location.href).replace(/%20/g,'+'),
        viaEncoded = "via=suite116",
        textEncoded = "text=Suite 116 : Event Space : Harlem, NYC",
        values = [],
        $twitterLink = $(".social-twitter"),
        $fbLink = $(".social-facebook"),
        $pintLink = $(".social-pinterest"),
        twitterInfo;
    
    values.push(urlEncoded, viaEncoded, textEncoded);                         
    twitterInfo = values.join("&");
    
    fbInfo = location.href;
    
    // Twitter
    $(".social-twitter").append('<a href="https://twitter.com/share?'+twitterInfo+'" class="icon-twitter"></a>');
    $("nav ul").append($twitterLink);

    // Facebook
    $(".social-facebook").append('<a href="https://www.facebook.com/sharer/sharer.php?u='+urlEncoded+'" class="icon-facebook"></a>');
    $("nav ul").append($fbLink);

    // Pinterest
    $(".social-pinterest").append('<a href="http://www.pinterest.com/pin/create/button/?url='+urlEncoded+'" class="icon-pinterest"></a>');    
    $("nav ul").append($pintLink);
    

}(window, document));
</script>
<section class="social-facebook-like">
    <?php include 'footer.php';?>
    <fb:like class="fb" ref="home" href="http://www.suite116.com" font="arial" colorscheme="light"></fb:like>
</section>
