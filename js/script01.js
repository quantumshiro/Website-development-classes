$(function(){
    $("#image-box img:eq(0)").show();
    setInterval(function(){
      $("#image-box :first-child").fadeOut(1000)
         .next().fadeIn(1000)
         .end().appendTo("#image-box");}, 
      3000);
});