
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
          S116.Page = (function($pageSlider){
        $(".burger").on("click", function() {
                if($(this).siblings('.navlist').hasClass('expand')) {
                    $(this).siblings('.navlist').removeClass('expand');
                } else {
                    $(this).siblings('.navlist').addClass('expand');
                }
            });   
            if($pageSlider.length > 0) {        
                $pageSlider.bxSlider({
                    auto: true,
                    autoControls: true,
                    mode: 'fade'
                });
                return this;    
            }
            $(document).on("pageReady", function(event, slider){               
                if(slider.length<1) return;       
                $(slider).bxSlider({
                    auto: true,
                    autoControls: true,
                    mode: 'fade'
                });
                return this;
            });

        })($(".bxslider"));
          
        }
      });    
    });    
  };
  getPageData(); 
});


