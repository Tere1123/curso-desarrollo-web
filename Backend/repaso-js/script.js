$(document).ready(function () {

    $('input.text').on('keyup',function(){

   valor =$('input[name="user"]').val();
   
    })




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
});