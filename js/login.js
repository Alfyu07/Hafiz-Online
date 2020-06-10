let username = $("#username");
let password = $("#password");
let email = $("#email");
let password2 = $("#password2");
let error = $("#error");
let form = $("form").attr("id");

function isEmpty(obj) {
  for (var key in obj) {
    if (obj.hasOwnProperty(key)) return false;
  }
  return true;
}

let userbutton = $(".user").each(function () {
  $(this).click(function () {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
  });
});

$("#" + form).submit(function (e) {
  let message = [];
  if (username.val() === "" || username.val() == null) {
    message.push("mohon isi username anda");
  }
  if (password.val() == "") {
    message.push("mohon isi password anda");
  }
  if (!isEmpty(password2)) {
    if (password2.val() != password.val()) {
      message.push("password tidak sama");
    }
  }
  if (message.length != 0) {
    e.preventDefault();
    error.html(message.join(", "));
  }
});
