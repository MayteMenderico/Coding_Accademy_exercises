$(document).ready(function(){
  $("p").hover(
    function() {
      $(this).addClass('blue');
    },
    function () {
      $(this).removeClass('blue');
    }
  );

  $(document).on('click', '.highlighted', function(e) {
    if(e.shiftKey){
      $(this).remove();
    } else{
      $('body').append("<p class='highlighted'>Paragraph created dinamically with highlight class</p>");
    }
  });
  
});