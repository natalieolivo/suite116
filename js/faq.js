
$(document).ready(function(){  
  var getPageData = function() {
    var success = function (data) {
      //console.log(data);      
    };
    $.ajax({
      dataType : "json",
      url      : "js/data/faq.json",  
      success  : success,    
      error   : function(a, b, errorThrown) {
        console.log(errorThrown);
      }
    }).done(function(data) {
      $.ajax({
        dataType: "html",
        url: "js/templates/faq.html",  
        success: function(html){        
          console.log("SUCCESS:: Ready to compile template:", html);
          var template = Handlebars.compile(html);                      
          $(".page").append(template(data));
          S116.Form.setValidationFields();
          S116.Form.checkForErrors();            
        }
      });    
    });    
  };
  getPageData(); 
});


