const hamburger = document.querySelector(".hamburger");
const headerLinks = document.querySelector(".headerLinks");
const header = document.querySelector(".header");
const pageHeight = window.innerHeight * 0.8;

hamburger.addEventListener("click", () => {
  header.classList.toggle("active");
});

window.onscroll = () => {
  let top = window.scrollY;
  top >= pageHeight
    ? header.classList.add("scrolled")
    : header.classList.remove("scrolled");
};
