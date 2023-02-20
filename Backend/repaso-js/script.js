$(document).ready(function () {

 $('input.pass').on('keyup',function() {

    valor1 =$('input[name="pass"]').val();
    valor2 =$('input[name="confirmar"]').val();

    $('input[type="submit"]').attr('disabled',true);

    if (valor1.length == valor2.length) {
        if (valor1 == valor2) {
            // si los valores coinciden:

            // activamos el botón de registro
            $('input[type="submit"]').removeAttr('disabled');
        } else alert('las contraseñas no coinciden');
    

    }

})


$('#btnShow').click(function () { 
  $('.container').toggle();
  
});

$('#btnFade').click(function () { 
  $('.container').fadeToggle();
  
});


$('#btnSlide').click(function () { 
  $('.container').slideToggle();
  
});


let contador = 0;
let pos = 'login';

$('.cambioForm').click(function () { 

  // creamos un if con un contador para realizar la animacion

  if (contador < 1 || pos == 'login') {
    $('.login').slideToggle(300, function () {
        $('.signup').slideToggle(300);
      });
      contador++;
      pos = 'signup';
} else {
    $('.signup').slideToggle(300, function () {
        $('.login').slideToggle(300);
      });
      contador--;
      pos = 'login';
}



  // $('.container').slideToggle();

  
});



});