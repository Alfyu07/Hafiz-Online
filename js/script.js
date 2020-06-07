//toogle navbar

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

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

//Custom Select Input
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
        and the selected item: */
      var y, i, k, s, h, sl, yl;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      sl = s.length;
      h = this.parentNode.previousSibling;
      for (i = 0; i < sl; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          yl = y.length;
          for (k = 0; k < yl; k++) {
            y[k].removeAttribute("class");
          }
          this.setAttribute("class", "same-as-selected");
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x,
    y,
    i,
    xl,
    yl,
    arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
