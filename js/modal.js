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
