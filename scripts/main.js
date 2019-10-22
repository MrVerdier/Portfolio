$(document).ready(function(){
  window.setInterval(function(){
    if ($("#about").hasClass("active") || $("#contact").hasClass("active")){
      $("#logo").addClass("logo-filter")
      $("#logo").addClass("logoToCorner")
    } else if ($("#home").hasClass("active")){
      $("#logo").removeClass("logoToCorner")
      $("#logo").removeClass("logo-filter")
    }else {
      $("#logo").removeClass("logo-filter")
    }
  }, 200)
})