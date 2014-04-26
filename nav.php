<nav>
	<ul class="js-toggle-state">
		<li><a href='/'>Suite<span>116</span></a></li>
		<li class="hide"><a href="/"></a></li>
		<li class="hide"><a href="rates.php"></a></li>
		<!-- <li class="hide"><a href="map.php">Map</a></li>						 -->
		<li class="hide"><a href="floor-plan.php"></a></li>
		<li class="hide"><a href="email-us.php"></a></li>
	</ul>
	<figure>
		<a href='/'>
			<img src="imgs/logo.png" class="logo" />
		</a>
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