// declaramos variables

let minutos = document.getElementById('minutos')
let segundos = document.getElementById('segundos')
let cents = document.getElementById('cents')

let contadorCents = 0;//almacenar la inf 
let contadorSecun = 0;
let contadorMins = 0;
let crono;
// iniciamos con los botones
// boton inicio(start)

function startCrono() {
    // nos permite detener el bucle
    clearInterval(crono);
    // se ejecuta
    crono = setInterval(start, 10);
}

function start() {

    contadorCents = contadorCents + 1;

    if (contadorCents == 100) {
        // reinicia el contador
        contadorCents = 0;
        // los segundos aumentan 1
        contadorSecun = contadorSecun + 1;

    }

    if (contadorSecun == 60) {
        contadorSecun = 0;
        contadorMins++;
    }

    // imprimir el resultado
    cents.innerHTML = contadorCents;
    segundos.innerHTML = contadorSecun;
    minutos.innerHTML = contadorMins;

    //le damos formato  para que preseda un 0 antes 

    if (contadorCents < 10) {
        cents.innerHTML = '0' + contadorCents;

    }

    if (contadorSecun < 10) {
        segundos.innerHTML = '0' + contadorSecun;
    }

    if (contadorMins < 10) {
        minutos.innerHTML = '0' + contadorMins;

    }


}

function stop() {
    clearInterval(crono);

}

function reset() {
    clearInterval(crono);

    contadorCents = 0;
    contadorSecun = 0;
    contadorMins = 0;

    minutos.innerHTML = '00';
    segundos.innerHTML = '00';
    cents.innerHTML = '00';
}

