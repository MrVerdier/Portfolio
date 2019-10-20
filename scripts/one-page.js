
$(document).ready(function(){
  console.log("change color")
  if($('#projects').hasClass("active")) {
    $("#logo").hide("logo-filter")
  }
})

$('.nav-link').click( function(){
    $('.nav-link').removeClass('link-active') 
    $(this).addClass('link-active')

    
    $('#logo').removeClass('logoToMiddle')
    $('#logo').addClass('logoToCorner')
    
    let sPageToShow = $(this).attr('data-showPage') 
    
    if(sPageToShow == 'home'){
      $('#logo').removeClass('logoToCorner')
      $('#logo').addClass('logoToMiddle')
    }
  })

