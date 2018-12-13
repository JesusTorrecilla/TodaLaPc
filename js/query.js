var imagenSrc="";
$(document).ready(function(){

  $("body").on('click','#evento1',function(event){
    var srcotro=$("#otro").attr("src");
    $("#beagle").attr("src",srcotro);
  });

  $("body").on('mouseenter','.evento2', function(){
    imageSrc=$("#beagle").attr("src");
    var srcotro=$("#otro").attr("src");
    $("#beagle").attr("src",srcotro);
  });

  $("body").on('mouseleave','.evento2', function(){
    $("#beagle").attr("src",imageSrc);
  });

  $("body").on('click','h2', function(){
    $("#beagle").fadeOut(1000);
  });

});
