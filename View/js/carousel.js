$(function(){
  $('#slider a:gt(0)').hide();
  var interval = setInterval(changeDiv, 6000);
  function changeDiv(){
      $('#slider a:first-child').fadeOut(1000)
      .next('a').fadeIn(1000)
      .end().appendTo('#slider');
  }
  $('#slider').hover(
   function() {
     clearInterval(interval);
   },
   function() {
     interval = setInterval(changeDiv, 6000);
   }
  );   
  $('.mas').click(function(){
    changeDiv();
    clearInterval(interval);
    interval = setInterval(changeDiv, 6000);
  });
  $('.menos').click(function(){
    $('#slider a:first-child').fadeOut(1000);
    $('#slider a:last-child').fadeIn(1000).prependTo('#slider');
    clearInterval(interval);
    interval = setInterval(changeDiv, 6000);
  });
});