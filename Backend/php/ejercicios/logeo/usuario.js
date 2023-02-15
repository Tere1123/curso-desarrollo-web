$(document).ready (function () {
    // Vamos a crear el buscador de usuario
    // aqui se recoge el valor del input
        $('.search input[type="text"]').on("change", function () {
    
            let text = $(this).val();
    
            let resultList = $(this).siblings(".display");// buscamos a los hermanos del input con clase display
    
            if (text.length > 0) {
                // si el valor del input no esta vacio llamamos al php
                $.get("buscador.php",{term: text}).done(function (data){
                    // resultList.html(data);
                    $('.search input[type="text"]').css("background",data);
    
                });
    
            } else{
                // se vacia la lista
                resultList.empty();
            }
    
    
        })
    
    
    
    });