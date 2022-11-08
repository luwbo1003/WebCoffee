//Reponsive product image
window.addEventListener("resize", resizeImage);
resizeImage();

function resizeImage() {
  var img = document.getElementsByClassName("img_carousel");
  for (let index = 0; index < img.length; index++) {
    if (window.innerWidth < 992) {
      img[index].style.maxHeight = 300;
    } else {
      img[index].style.maxHeight = 400;
    }
  }
}