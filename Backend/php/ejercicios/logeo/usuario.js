$(document).ready(function () {
    // verificar un usuario existente
    // aqui se recoge el valor del input
    $('.login-box input[type="email"]').on("keyup input", function () {

        let text = $(this).val();

        let resultList = $(this).siblings(".display");// buscamos a los hermanos del input con clase display

        if (text.length > 0) {
            // si el valor del input no esta vacio llamamos al php
            $.get("buscador.php", { term: text }).done(function (data) {
                resultList.html(data);
                // $('.loging-box input[type="email"]').css("borderColor",data);

            });

        } else {
            // se vacia la lista
            resultList.empty();
        }


    })

    let contador = 0;
    let pos = 'login';

    $('.camForm').click(function () {

        // creamos un if con un contador para realizar la animacion

        if (contador < 1 || pos == 'login') {
            $('.login').slideToggle(400, function () {
                $('.reg').slideToggle(400);
            });
            contador++;
            pos = 'reg';
        } else {
            $('.reg').slideToggle(400, function () {
                $('.login').slideToggle(400);
            });
            contador--;
            pos = 'login';
    };


    });

    
});