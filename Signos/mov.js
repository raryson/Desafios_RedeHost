/* inspired from sphere loader */
function spawnSphere() {
 
  var $sphere = '<div class="sphere"></div>';

  $("body").append( $sphere ).find(".sphere").animate({
    top: '0px',
    opacity: 0,
    
  }, 8000, function(){
    $("body").find(".sphere:first").remove();
  });
}
setInterval("spawnSphere()", 900);