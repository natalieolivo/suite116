  S116.Ajax = S116.Ajax || {};
S116.Ajax.getPageData = function(page) {
  var success = function (data) {
    //console.log(data);      
  };
  return $.ajax({
    dataType : "json",
    url      : "js/data/"+page+".json",  
    success  : success,    
    error   : function(a, b, errorThrown) {
      console.log(errorThrown);
    }
  });    
};

S116.Ajax.afterFetch = function(data) {

    return $.ajax({
      dataType: "html",
      url: "js/templates/"+data.template+".html",  
      success: function(html){        
        var template = Handlebars.compile(html);          
        $(".page ."+data.template).append(template(data));
        
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
};

