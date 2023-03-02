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