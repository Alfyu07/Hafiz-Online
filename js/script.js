$(".toggle-button").click(function () {
  if ($(".navbar-links").hasClass("active")) {
    $(".navbar-links").removeClass("block").outerWidth();
    $(".navbar-links").removeClass("active");
  } else {
    $(".navbar-links").addClass("block").outerWidth();
    $(".navbar-links").addClass("active");
  }
});
