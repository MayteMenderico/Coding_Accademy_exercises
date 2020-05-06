$(document).ready(function(){
  $("p").on('mouseenter', function() {
    $(this).css({'background-color': 'lightgray'});
  });

  $("p").on('mouseleave', function() {
    $(this).css({'background-color': 'white'});
  });

  $("p").on('click', function() {
    $(this).remove();
  });
});