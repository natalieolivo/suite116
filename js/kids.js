
$(document).ready(function(){  
  var getPageData = function() {
    var success = function (data) {
      //console.log(data);      
    };
    $.ajax({
      dataType : "json",
      url      : "js/data/kids.json",  
      success  : success,    
      error   : function(a, b, errorThrown) {
        //console.log(errorThrown);
      }
    }).done(function(data) {
      $.ajax({
        dataType: "html",
        url: "js/templates/kids.html",  
        success: function(html){        
          var template = Handlebars.compile(html);                      
          $(".page").append(template(data));          
        }
      });    
    });    
  };
  getPageData(); 
});


