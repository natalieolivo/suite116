
<section class="social-twitter">    
    <script>
        (function(w, d){
            var urlEncoded = 'url='+encodeURIComponent(location.href).replace(/%20/g,'+'),
                viaEncoded = "via=suite116",
                textEncoded = "text=Suite 116 : Event Space : Harlem, NYC",
                values = [],
                $twitterLink = $(".social-twitter"),
                twitterInfo;
            values.push(urlEncoded, viaEncoded, textEncoded);                         
            twitterInfo = values.join("&");
            //console.log(twitterInfo);
            $(".social-twitter").append('<a href="https://twitter.com/share?'+twitterInfo+'" class="icon-twitter"></a>');
            $("body").append($twitterLink);
        }(window, document)); 
    </script>        
</section>
<section class="social-facebook-like">
    <fb:like class="fb" ref="home" href="http://www.suite116.com" font="arial" colorscheme="light"></fb:like>
</section>
<script>
(function($){
    var w = $(".page").width(),
        h = $(".page").height(),
        $twitter = $(".social-twitter"),
        startTop;

    $("nav").css("width", w);
    $twitter.css("left", w-120);

    if(h < $(window).height()) {
        $twitter.css("top", h);    
    } else {
        $twitter.css("top", $(window).height()-50);    
    }
    
    startTop = $twitter.position().top;

    $(window).on("resize", function() { 
        $("nav").css("width", w);
        $twitter.css("left", w - 120);
        $twitter.css("top", $(window).height()-50);
    });

    $(window).on("scroll", function() {        
        var top;
        
        top = startTop + ($(window).scrollTop());                
        $twitter[0].style.top = top + "px";

        if($twitter.position().top >= (h - 500)) {            
            $twitter[0].style.top = $twitter[0].style.top;        
        }
               
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
