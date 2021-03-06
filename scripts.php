<script type="text/javascript" src="js/utils/fetch.js"></script>
<section class="social-facebook-like">
    <?php include 'footer.php';?>
    <script type="text/javascript" src="js/utils/cookie.js"></script>
    <script type="text/javascript" src="js/utils/url.js"></script>
    <script>        
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
            $("footer ul").append($twitterLink);

            // Facebook
            $(".social-facebook").append('<a href="https://www.facebook.com/sharer/sharer.php?u='+urlEncoded+'" class="icon-facebook"></a>');
            $("footer ul").append($fbLink);

            // Pinterest
            $(".social-pinterest").append('<a href="http://www.pinterest.com/pin/create/button/?url='+urlEncoded+'" class="icon-pinterest"></a>');    
            $("footer ul").append($pintLink);            

        }(window, document));
    </script>
    <script>
        // check if cookie is set, if it isn't and it needs to be, set it
        if(!S116.Cookie('admin')) {
            S116.Admin.setAdminCookie(); 
        }        
        if(S116.Cookie('admin')) {            
            S116.Admin.setDisplay();            
            S116.Admin.setAdminEventHandlers(document.querySelector(".admin-link"));
        }      
    </script>
    <fb:like class="fb" ref="home" href="http://www.suite116.com" font="arial" colorscheme="light"></fb:like>
</section>
