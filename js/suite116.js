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
