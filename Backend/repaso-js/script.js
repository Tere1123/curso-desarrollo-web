$(document).ready(function () {

    $('input.user').on('keyup',function(){

  let min = 5;     
  let valor = $(this).val().length;
   

   if (valor >= min) {

    $('input[type="submit"]').removeAttr('disabled');

   } else alert('Minumo 5 caracteres');

})
});

//  $('input.pass').on('keyup',function() {

//     valor1 =$('input[name="pass"]').val();
//     valor2 =$('input[name="confirmar"]').val();

//     $('input[type="submit"]').attr('disabled',true);

//     if (valor1.length == valor2.length) {
//         if (valor1 == valor2) {
//             // si los valores coinciden:

//             // activamos el botón de registro
//             $('input[type="submit"]').removeAttr('disabled');
//         } else alert('las contraseñas no coinciden');
    

//     }

// })
// });