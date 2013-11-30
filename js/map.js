// get the data from a json call, js/data/rates.json
$(document).ready(function(){  
  var getPageData = function() {
    var success = function (data) {
      //console.log(data);      
    };
    $.ajax({
      dataType : "json",
      url      : "js/data/map.json",  
      success  : success,    
      error   : function(a, b, errorThrown) {
        //console.log(errorThrown);
      }
    }).done(function(data) {
      $.ajax({
        dataType: "html",
        url: "js/templates/map.html",  
        success: function(html){        
          var template = Handlebars.compile(html);                      
          $(".page").append(template(data));
        }
      });    
    });    
  };
  getPageData(); 
});