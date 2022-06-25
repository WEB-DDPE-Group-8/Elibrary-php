// registration page

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const next = document.querySelector(".firstNext-1");
const prev = document.querySelector(".prev-101");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

<<<<<<< HEAD
nextBtnFirst.addEventListener("click", function(event){
=======
nextBtnFirst.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});

<<<<<<< HEAD
next.addEventListener("click", function(event){
=======
next.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});

<<<<<<< HEAD
nextBtnSec.addEventListener("click", function(event){
=======
nextBtnSec.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
<<<<<<< HEAD
nextBtnThird.addEventListener("click", function(event){
=======
nextBtnThird.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "-100%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
<<<<<<< HEAD
submitBtn.addEventListener("click", function(){
=======
submitBtn.addEventListener("click", function () {
>>>>>>> main
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
<<<<<<< HEAD
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});

prev.addEventListener("click", function(event){
=======
  setTimeout(function () {
    alert("Your Form Successfully Signed up");
    location.reload();
  }, 800);
});

prev.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

<<<<<<< HEAD
prevBtnSec.addEventListener("click", function(event){
=======
prevBtnSec.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
<<<<<<< HEAD
prevBtnThird.addEventListener("click", function(event){
=======
prevBtnThird.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
<<<<<<< HEAD
prevBtnFourth.addEventListener("click", function(event){
=======
prevBtnFourth.addEventListener("click", function (event) {
>>>>>>> main
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
<<<<<<< HEAD
});
=======
});
>>>>>>> main
