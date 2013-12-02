<nav>
	<ul class="js-toggle-state">
		<li class="hide"><a href="/">Back Home</a></li>
		<li class="hide"><a href="rates.php">Rates</a></li>
		<li class="hide"><a href="map.php">Map</a></li>						
		<li class="hide"><a href="floor-plan.php">Floor Plan</a></li>
		<li class="hide"><a href="email-us.php">Email Us</a></li>
	</ul>
	<figure>
		<img src="imgs/logo.png" class="logo" />
	</figure>
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
	            $("nav").append($twitterLink);
	        }(window, document)); 
	    </script>        
	</section>
</nav>