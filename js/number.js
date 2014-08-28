$(document).ready(function(){
  var number1 = $(".number1").attr("id");
  var number2 = $(".number2").attr("id");
  var number3 = $(".number3").attr("id");
  setTimeout(function(){
    $('.number1').html(number1);
    $('.number4').html(number2);
    $('.number3').html(number3);

  }, 1000);

})