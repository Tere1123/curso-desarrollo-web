$(document).ready(function () {

  let contador = 0;
  let pos = 'box-btn';

  $('#btnSlide').click(function () {

    if (contador < 1 || pos == 'box-btn') {
      $('.box-btn').slideToggle(300, function () {
        $('.box-form').slideToggle(300);
      });
      contador++;
      pos = 'box-form';
    } else {
      $('.box-form').slideToggle(300, function () {
        $('.box-btn').slideToggle(300);
      });
      contador--;
      pos = 'box-btn';
    }

    // console.log('funciona');
    // $('.box-btn').slideToggle();
    // console.log('funciona');
  });

  // $(function () {
  //   $('.banner').unslider({
  //     speed: 500,
  //     delay: 3000,
  //     complete: function () { },
  //     keys: true,
  //     dots: true,
  //     fluid: false
  //   });
  //   console.log('funciona');
  // });

});


let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}