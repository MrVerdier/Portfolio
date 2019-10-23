
  window.setInterval(function(){
    if ($("#about").hasClass("active") || $("#contact").hasClass("active")){
      $("#logo").addClass("logo-filter")
      $("#logo").addClass("logoToCorner")

      $("#fp-nav ul li a span").addClass("logo-filter")
      $("#fp-nav ul li .fp-tooltip").addClass("logo-filter")
    } else if ($("#home").hasClass("active")){
      $("#logo").removeClass("logoToCorner")
      $("#logo").removeClass("logo-filter")

      $("#fp-nav ul li a span").removeClass("logo-filter")
      $("#fp-nav ul li .fp-tooltip").removeClass("logo-filter")
    }
    else {
      $("#logo").addClass("logoToCorner")
      $("#logo").removeClass("logo-filter")
      $("#fp-nav ul li a span").removeClass("logo-filter")
      $("#fp-nav ul li .fp-tooltip").removeClass("logo-filter")
    }
  }, 200)
