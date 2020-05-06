$(document).ready(function(){
  $("button").click(function() {
    let valor = $('#listitem').val();
    $("body").append("<div>" + valor + "</div>" );
  });
  
});