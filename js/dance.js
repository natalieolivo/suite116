
$(document).ready(function(){  
  var getPageData = function() {
    var success = function (data) {
      //console.log(data);      
    };
    $.ajax({
      dataType : "json",
      url      : "js/data/dance.json",  
      success  : success,    
      error   : function(a, b, errorThrown) {
        //console.log(errorThrown);
      }
    }).done(function(data) {
      $.ajax({
        dataType: "html",
        url: "js/templates/dance.html",  
        success: function(html){        
          var template = Handlebars.compile(html);                      
          $(".page").append(template(data));          
        }
      });    
    });    
  };
  getPageData(); 
});


