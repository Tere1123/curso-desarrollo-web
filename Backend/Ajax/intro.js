$(document).ready (function () {
// Vamos a crear el buscador de usuario
// aqui se recoge el valor del input
    $('.box input[type="text"]').on("change", function () {

        let text = $(this).val();

        let resultList = $(this).siblings(".display");// buscamos a los hemanos del input con clase display

        if (text.length > 0) {
            // si el valor del input no esta vacio llamamos al php
            $.get("search.php",{term: text}).done(function (data){
                // resultList.html(data);
                $('.box input[type="text"]').css("background",data);

            });

        } else{
            // se vacia la lista
            resultList.empty();
        }


    })



});