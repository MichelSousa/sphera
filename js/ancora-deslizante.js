$(document).ready(function(){
   $('ul.menu a').click(function(){
      var alvo = $(this).attr('href').split('#').pop();
      $('html, body').animate({scrollTop: $('#'+alvo).offset().top }, 1000);
      return false;
   });
});