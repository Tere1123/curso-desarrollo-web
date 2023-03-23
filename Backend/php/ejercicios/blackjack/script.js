
//primero creamos variables y el  array del valor de las cartas
let puntosCasa = 0;
let manocasa = [];
let cartascasa = [
    "A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"

];


let puntosJugador = 0;
let manojugador = [];
let cartasjugador = [
    8, 9, 10, "J", "Q", "K", "A", 2, 3, 4, 5, 6, 7,

];

let marcadorJ = document.getElementById('puntosJu');
let resultado = document.getElementById('resul');

let fin = false;
let timer = 0;

//creamos la funcion para escoger la cartas aleatoriamante

function start() {

    puntosCasa = 0;
    manocasa = [];

    puntosJugador = 0;
    manojugador = [];

    //primero usamos el numero randon / despues lo remplazamos con la funcion de jugada que realza el mismo trabajo

    // manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);
    // manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);


    // manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);
    // manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);

    jugar("casa");
    jugar("casa");

    jugar("jugador");
    jugar("jugador");

    
    document.getElementById("cartascasa").innerHTML = manocasa;

    document.getElementById("cartasjugador").innerHTML = manojugador;

    // lo imprimimos en consola con la funcion de calcular puntos

    calcularPuntos();

}

// creamos la funcion de calcular puntos en donde le daremos el valor a las cartas con letra,primero con un for que cuente las cartas
// y despues le agregamos un swich(if) para darles el valor con la condicion
function calcularPuntos() {
   
    puntosCasa = 0;
    puntosJugador = 0;

    // se realiza el for con cada jugador primero con la casa 
    for (let i = 0; i < manocasa.length; i++) {
        let as = false;
        switch (manocasa[i]) {
            case "A":
                puntosCasa += 11;
                as = true;
                break;
            case "J":
            case "Q":
            case "K":
                puntosCasa += 10;
                break;

            default:
                puntosCasa += manocasa[i];
                break;
        }
        //si los puntos son menores que 21 al AS se le restaran 10 para que valga 1
        if (manocasa > 21 && as) {
            puntosCasa -= 10;
        }
    }


    // for despues con el jugador
    for (let i = 0; i < manojugador.length; i++) {
        let as = false;
        switch (manojugador[i]) {
            case "A":
                puntosJugador += 11;
                as = true;
                break;
            case "J":
            case "Q":
            case "K":
                puntosJugador += 10;
                break;

            default:
                puntosJugador += manojugador[i];
                break;
        }
        if (puntosJugador > 21 && as) {
            puntosJugador -= 10;
        }
    }

    console.log("cartas de la casa:" + manocasa.join());
    
    document.getElementById("cartascasa").innerHTML = manocasa.join();

    console.log("puntuación de la casa: " + puntosCasa);
    document.getElementById('puntos').innerHTML = puntosCasa;

    console.log("cartas del jugador:" + manojugador.join());

    document.getElementById("cartasjugador").innerHTML = manojugador.join();

    console.log("puntuación del jugador: " + puntosJugador);
    marcadorJ.innerHTML = puntosJugador;
    //cerramos la funcion
    ganador();

}

//al tener los puntos ya determinamos necesitamos saber quien va ganando y si es necesario pedrir otra carta
//para esto creamos la funcion ganador
function ganador() {

    let fin = false;
    // primero se estipola si alguno se a pasado de 21  
    if (puntosJugador > 21) {
        console.log("El jugador se ha pasado de 21. Gana la casa");
        resultado.innerHTML = "El jugador se ha pasado de 21. Gana la casa" ;
        fin = true;
        return;
    } else if (puntosCasa > 21) {
        console.log("La casa se ha pasado de 21. Gana el jugador");
        resultado.innerHTML = "La casa se ha pasado de 21. Gana el jugador" ;
        fin = true;
        return;
    }
    // si ninguno se a pasado revisamos los puntos y si necesita otra carta
    if (puntosJugador > puntosCasa && !fin) {
        //si los puntos son mayores a los del contrincante pero es diferente de la variable fin(21) 
        //va ganando y juega el contrario       
        console.log("Va ganando el jugador");
        resultado.innerHTML = "Va ganando el jugador" ;
        console.log("");
        // jugar("casa");
        return;

    } else if (puntosCasa > puntosJugador && !fin) {
        console.log("Va ganando la casa");
        resultado.innerHTML = "Va ganando la casa" ;
        console.log("");
        // jugar("jugador");
        return;
    } else {
        console.log("Hay empate");
        console.log("");
        resultado.innerHTML = "Hay empate" ;
        // jugar("jugador");
        return;
    }


  

}

// creamos una funcion que nos permitira jugar,introducimos un switch que nos arrojara una carta adicional de forma aleatoria

// en este caso usamos el numero random del inicio en una funcion

function jugar(jugada) {

    switch (jugada) {
        case "casa":
            manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);
            break;
        case "jugador":
            manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);
            break;
    }

    //este if nos permitira calcular cuando cada jugador tenga 2 cartas 
    if (manocasa.length >= 2 && manojugador.length >= 2) calcularPuntos();


}

function plantarse() {

    if (puntosJugador > puntosCasa ) {
        jugar("casa");

    } else fin = true;

    if (!fin) {
        timer = setTimeout(() => {
            plantarse();
        }, 1500);
    } else {
        clearTimeout(timer);
        timer = 0;
    }
    console.log(fin);

}


function reset() {

    document.getElementById("cartascasa").innerHTML = manocasa;

    document.getElementById("cartasjugador").innerHTML = manojugador;

    document.getElementById('puntos').innerHTML = puntosCasa;

 
    resultado.innerHTML =  [ ] ;

    puntosCasa = 0;

    manocasa = [];

    puntosJugador = 0;
    manojugador = [];

    marcadorJ.innerHTML = puntosJugador;

}



start();

