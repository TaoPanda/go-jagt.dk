const imgs = document.querySelectorAll(".slide img");
imgs.forEach((imgs) => {
  imgs.classList.add("opacityZero");
});
imgs[0].classList.toggle("opacityZero");
const slideSpeed = 8000;
let currentImg = 0;
function slide() {
  imgs[currentImg].classList.toggle("opacityZero");
  if (currentImg < imgs.length - 1) {
    currentImg++;
  } else {
    currentImg = 0;
  }
  imgs[currentImg].classList.toggle("opacityZero");
  setTimeout(slide, slideSpeed);
}
slide();
