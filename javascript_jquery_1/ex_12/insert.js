$(document).ready(function(){
  $("img").on('load', function() {
    $(this).before('<div>Wow, I precede the image!</div>');
    $(this).after('<div>Hey, I come in last</div>');
  })
  
});