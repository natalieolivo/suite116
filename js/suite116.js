window.S116 || (window.S116 = {});

S116.Form = (function(w, d){
	var validationFields = {};
	var saveValidationFields = function(o) {
		validationFields = o;
		return o;	
	};
	var setValidationFields = function() {		
		console.log(validationFields);
		for(input in validationFields) {			
			if(validationFields.hasOwnProperty(input)) {
				$('input[name^='+input+']').val(validationFields[input]);
			}
		}
	};
	var checkForErrors = function() {		
		//get query string
		var url = document.location.href;
		var pstr = url;
		var pstrStart = pstr.indexOf('invalid');
		var invalidStr = pstr.slice(pstrStart);
		var invalpairs = invalidStr.split('=');
		var invalidAllParams = invalpairs[1];
		var invalidParamArray = invalidAllParams ? invalidAllParams.split('+') : [];
		
		for(var i=0; i<invalidParamArray.length; i++) {
			
			if(invalidParamArray[i]!=''){
				$(".js-error-box").show();
				console.log('.'+invalidParamArray[i]);
				$('input[name^='+invalidParamArray[i]+']').addClass('error');
			}
		}
		
		console.log(url);
		console.log('pstrStart'+pstrStart);
		console.log('invalidStr'+invalidStr);
		console.log('invalidParamArray'+invalidParamArray);
		
	};

	return {
		setValidationFields  : setValidationFields,
		saveValidationFields : saveValidationFields,
		checkForErrors       : checkForErrors
	};
}(window, document));

S116.Admin = (function() {
	
	function setAdminEventHandlers(link) {
		var uploadBtn = document.querySelector(".upload-button");

		link.addEventListener("click", showAdminPanel);
		
		uploadBtn.addEventListener("click", function(){
			uploadImageFiles(document.querySelectorAll(".image-input"));
		});
	}

	function showAdminLink(link) {
		if(S116.Cookie('admin')) {
			link.classList.remove('hide');
		}
	}
	
	function setDisplay() {
		showAdminLink(document.querySelector('.admin-link'));
	}

	function showAdminPanel(url) {
		var mask = document.querySelector('.uploads-mask'),
			panel = document.querySelector('.uploads-panel');

		if(mask.classList.contains('hide') && panel.classList.contains('hide')) {
			mask.classList.remove('hide');
			panel.classList.remove('hide');	
		}
		
		if(!mask.classList.contains('transition-show') &&
			!panel.classList.contains('transition-show')) {			
			mask.classList.add('transition-show');
			panel.classList.add('transition-show');
		}
		
	}

	function setAdminCookie(){		
		if(window.location.hash && S116.Url.isHashMatch(window.location.hash, "admin")) {			
			S116.Cookie('admin', 'true');			
		}
	}	

	function uploadImageFiles(fileInputs) {
		var filereader = new FileReader(),
			form = document.querySelector("#image-upload"), 
			data = new FormData(form);		

    	console.debug("formdata", data);
			
		asyncSendImageData(form, data);
		return false;		
	}

	function asyncSendImageData(form, data) {
		var xhr = new XMLHttpRequest;		
		xhr.open("POST", form.action);
		console.debug(data);
		xhr.send(data);
	}

	return {
		setDisplay     		  : setDisplay,
		setAdminCookie 		  : setAdminCookie,
		showAdminLink    	  : showAdminLink,	
		setAdminEventHandlers : setAdminEventHandlers
	};
})();
