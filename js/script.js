$(".toggle-button").click(function () {
  if ($(".navbar-links").hasClass("active")) {
    $(".navbar-links").removeClass("block").outerWidth();
    $(".navbar-links").removeClass("active");
  } else {
    $(".navbar-links").addClass("block").outerWidth();
    $(".navbar-links").addClass("active");
  }
});

// Playing audio
let audio = document.querySelectorAll(".plyr-audio");
let btn = document.querySelectorAll(".plymedia");
let play =
  "<span class='iconify play' data-inline='false' data-icon='bi:play-fill'></span>play";
let pause =
  "<span class='iconify pause' data-inline='false' data-icon='carbon:pause-filled'></span>pause";
for (let i = 0; i < audio.length; ++i) {
  btn[i].addEventListener("click", () => {
    if (audio[i].classList.contains(".playing")) {
      audio[i].pause();
      audio[i].classList.remove(".playing");
    } else {
      audio[i].classList.add(".playing");
      audio[i].play();
    }
  });
  document.addEventListener(
    "play",
    function (e) {
      var audios = document.getElementsByTagName("audio");
      if (audios[i] != e.target) {
        audios[i].currentTime = 0;
        audios[i].pause();
        audio[i].classList.remove(".playing");
      }
    },
    true
  );
}

// Pop Up windows

const modalBtn = document.querySelectorAll(".modal-btn");
const modalBg = document.querySelector(".modal-bg");
const modalClose = document.querySelectorAll(".modal-close");
let dim = [0.5, 0.9];
for (let i = 0; i < modalBtn.length; ++i) {
  modalBtn[i].addEventListener("click", () => {
    modalBg.style.backgroundColor = "rgba(0,0,0," + dim[i] + ")";
    modalBg.classList.add("bg-active");
    document.querySelectorAll(".modal")[Math.abs(i - 1)].style.display = "none";
  });
  modalClose[i].addEventListener("click", () => {
    modalBg.classList.remove("bg-active");
    document.querySelectorAll(".modal")[Math.abs(i - 1)].style.display = "flex";
  });
}
