S116.Url = (function() {
	
	function isHashMatch(hash, match) {		
		var matched = false;
		if(hash !== "") {
			matched = hash.split("#")[1].split("=")[0] === match;
		}
		return matched;
	}	

	return {
		isHashMatch : isHashMatch				
	};

})();


