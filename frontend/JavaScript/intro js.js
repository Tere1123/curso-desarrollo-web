    function colorChange() {
        // una funcion es un bloque de codigo que se puede reutilizar
        // para cambiar el parrafo de color lo primero es identificar y 
        // apuntar al parrafo

         document.getElementById("pColor").style.color = "#aabbcc";
    document.getElementById("pColor").style.backgroundColor = "rgb(60,60,60)";

    }

    function showdate() {
        document.getElementById("pDate").innerHTML = new Date();
        // Date es un objeto predefinido de JS que contine los datos 
        // referentes a la fecha actual (fecha y hora) cada que se
        //  pulsa el boton se actualiza gracias a la palabra NEW .
    }

    function hideShow() {

        var condition = document.getElementById("pHide").style.visibility;

    // condition es una variable y guarda un dato,en este caso guarda el valor
    // de la visibilidad del dato hidden o visible

    // el simbolo = significa que estamos asignando un valor

    if (condition == "hidden") {
        document.getElementById("pHide").style.visibility = "visible";
        } else {
        // si la condicion de arriba no se cumple el if es ignorado y se cumple el else
        document.getElementById("pHide").style.visibility = "hidden";
        }
    }

    // condiciones para apagar y encender la bombilla

    var bombilla = document.getElementById("bulb");
    var estado = "apagado";
    var encendido = "../recursos/bombilla-encen.gif";
    var apagado = "../recursos/bombilla.gif";

    function bulbSwitch() {
        // encender y apagar la bombilla
        // se dejaron las condiciones por fuera de las funciones 

        if (estado == "apagado") {
        bombilla.src = encendido;
    estado = "encendido";
            
        } else {
        bombilla.src = apagado;
    estado = "apagado";
        }

    }

