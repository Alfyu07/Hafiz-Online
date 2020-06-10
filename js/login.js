let username = $("#username");
let password = $("#password");
let form = $("form").attr("id");

function isEmpty(obj) {
  for (var key in obj) {
    if (obj.hasOwnProperty(key)) return false;
  }
  return true;
}
username.click(function () {
  $("#error").css("display", "none");
});
password.click(function () {
  $("#error").css("display", "none");
});
let userbutton = $(".user").each(function () {
  $(this).click(function () {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
  });
});
