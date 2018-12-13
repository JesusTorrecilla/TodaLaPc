$(document).ready(function(){

  $("body").on('click','#evento1',function(event){
    var srcotro=$("#otro").attr("src");
    $("#beagle").attr("src",srcotro);
  });
});
