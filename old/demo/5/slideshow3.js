var slideIndex2 = 1;
showDivs2(slideIndex2);

function plusDivs2(n) {
  showDivs2((slideIndex2 += n));
}

function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName("slideshow3");
  if (n > x.length) {
    slideIndex2 = 1;
  }
  if (n < 1) {
    slideIndex2 = x.length;
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex2 - 1].style.display = "block";
}
