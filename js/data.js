var data = {title: "This is my title"};  

// get template
 var templateScript = $("#template").html();  
var template = Handlebars.compile(templateScript);  

$("body").append(template(data));