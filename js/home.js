
// get the data from a json call, js/data/rates.json
$(document).ready(function(){  
  var getPageData = function() {
    var success = function (data) {
      //console.log(data);      
    };
    $.ajax({
      dataType : "json",
      url      : "js/data/home.json",  
      success  : success,    
      error   : function(a, b, errorThrown) {
        console.log(errorThrown);
      }
    }).done(function(data) {
      $.ajax({
        dataType: "html",
        url: "js/templates/home.html",  
        success: function(html){        
          var template = Handlebars.compile(html);
          //$(".page .home").append('what what');
          $(".page .home").append(template(data));
        }
      });    
    });    
  };
  getPageData(); 
});


