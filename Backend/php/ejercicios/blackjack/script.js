
let puntosCasa = 0;
let manocasa = [];

//creamos el array del valor de las cartas
let cartascasa = [
    "A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K"

];



let puntosJugador = 0;
let manojugador = [];
let cartasjugador = [
    8, 9, 10, "J", "Q", "K", "A", 2, 3, 4, 5, 6, 7,

];

//creamos la funcion para escoger la acrtas aleatoriamante
function start() {

    //usamos el numero randon

    manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);
    manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);


    manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);
    manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);

    console.log(manocasa);
    console.log(manojugador);

    calcularPuntos();
    console.log(manocasa.join());
    console.log("puntuación de la casa: " + puntosCasa);
    console.log(manojugador.join());
    console.log("puntuación del jugador: " + puntosJugador)

}

function calcularPuntos () {
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
        if (manocasa > 21 && as) {
           puntosCasa -= 10; 
        }
    }
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

           if ( puntosJugador > puntosCasa  ) {

             } else {

}

ganador();

}

function ganador() {

    if ( puntosJugador > puntosCasa  ) {
            console.long('Va ganando jugador')
    } else if ( puntosJugador < puntosCasa ){
        console.long('Va ganando casa');
    }else {
        console.long('Hay empate');
    }
}

// function jugar() {
 
//     if (puntosJugador > puntosCasa ) {
        
//     manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);
        
//     }


// }
start();
