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
          if(GBrowserIsCompatible()){
            var map = document.getElementById("mapWidget");
            var m = new GMap2(map);
            m.setCenter(new GLatLng(40.802306,-73.950715), 14); // pass in lat and long
            var c = new GMapTypeControl(); // switch map modes
            m.openInfoWindow(m.getCenter(), document.createTextNode("You can find Suite 116 here."));
            m.setMapType(G_NORMAL_MAP); // sets default mode G_SATELLITE_MAP. G_HYBRID_MAP
        
            m.addControl(c);
            m.addControl(new GLargeMapControl()); // zoom feature
          }
          else{
            return;
          }
        }
      });    
    });    
  };
  getPageData(); 
});