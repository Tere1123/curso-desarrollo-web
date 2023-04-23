
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

// Identificamos los elementos de HTML
let cartasc = document.getElementById('cartas-casa');
let cartasj = document.getElementById('cartas-jugador');

let marcadorc = document.getElementById('puntos');
let marcadorJ = document.getElementById('puntosJu');
let resultadoJuego = document.getElementById('resultadoJuego');


let btnjugar = document.getElementById('place_order');
let btnplantarse = document.getElementById('detener');
let btninicio = document.getElementById('inicio');
let btnreset = document.getElementById('reset');
let btnapostar = document.getElementsByClassName('apuestaj');

let alerta = document.getElementById('alerta');

let fin = false;
let timer = 0;

//creamos la funcion para escoger la cartas aleatoriamante

function start() {


    puntosCasa = 0;
    manocasa = [];

    puntosJugador = 0;
    manojugador = [];

    resultadoJuego.innerHTML = "Introduce tu apuesta";


    if (manocasa.length == 0 && manojugador.length == 0) {

        jugar("casa");
        jugar("casa");

        jugar("jugador");
        jugar("jugador");


    }

    btninicio.disabled = true;

    //para desabilitar los botones despues de apostar creamos un FOR para recorrer los botones
    //
    for (let i = 0; i < btnapostar.length; i++) {
        btnapostar[i].disabled = true;

    }

    //primero usamos el numero randon / despues lo remplazamos con la funcion de jugada que realza el mismo trabajo

    // manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);
    // manocasa.push(cartascasa[Math.floor(Math.random() * cartascasa.length)]);


    // manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);
    // manojugador.push(cartasjugador[Math.floor(Math.random() * cartasjugador.length)]);


    // como vamos a apostar las cartas no se mostraran hasta que no se realice una apuesta 
    // por esto estas funciones pasan a estar en apuesta
    // jugar("casa");
    // jugar("casa");

    // jugar("jugador");
    // jugar("jugador");

    // lo imprimimos en consola con la funcion de calcular puntos

    // calcularPuntos();

}

//creamos variables para apostar
let total = 50;
let totalDisplay = document.getElementById("total");
let apuestaDisplay = document.getElementById("message");
let apuestaJ = 0;

btnplantarse.disabled = true;
btnjugar.disabled = true;
btninicio.disabled = true;
totalDisplay.innerHTML = total;

// creamos la funcion para apostar
function apostar(apuesta) {

    apuestaJ = apuesta;
    console.log(total);


    if ((total - apuestaJ < 0)) {
        btninicio.disabled = true;
        apuestaDisplay.innerHTML = 'No hay saldo';

        return true;

    } else {
        console.log(total);
        totalDisplay.innerHTML = total - apuestaJ;
        apuestaDisplay.innerHTML = apuestaJ + " € " + "apuesta realizada!";
        btninicio.disabled = false;

    }


}

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

    // document.getElementById("cartascasa").innerHTML = manocasa.join();

    console.log("puntuación de la casa: " + puntosCasa);

    marcadorc.innerHTML = puntosCasa;

    console.log("cartas del jugador:" + manojugador.join());

    // document.getElementById("cartasjugador").innerHTML = manojugador.join();

    console.log("puntuación del jugador: " + puntosJugador);
    marcadorJ.innerHTML = puntosJugador;
    cartasc.innerHTML = manocasa.join();
    cartasj.innerHTML = manojugador.join();
    //cerramos la funcion
    mostrarCartas();

    ganador();

}

//asignamos variables a cada icono de las carta
let iconoDiamantes = `<i class='bi bi-suit-diamond-fill'></i>`;
let iconoPicas = `<i class="bi bi-suit-spade-fill"></i>`;
let iconoCorazones = `<i class="bi bi-suit-heart"></i>`;
let iconoTreboles = `<i class="bi bi-suit-club"></i>`;

const contenedorBaraja = document.getElementById('baraja');
//creamos la funcion para crear la baraja completa
// function Baraja() {

//     let baraja = new Array();
//     let palos = {
//         "T": "Treboles",
//         "D": "Diamantes",
//         "P": "Picas",
//         "C": "Corazones"
//     }

//     let rangos = new Array("A", 2, 3, 4, 5, 6, 7, 8, 9, 0, "J", "Q", "K");
// //usamos los objetos para unir el valor con el palo en una carta 
//     Object.keys(palos).forEach(function (value) {
//         for (let i = 0; i < rangos.length; i++) {
//             baraja.push(rangos[i] + value);
//         }
//     })
// //mostramos la baraja en consola
//     console.log(baraja);
// //creamos un bucle para recorrer cada carta de la baraja
//     for (let i = 0; i < baraja.length; i++) {
//         let valor = baraja[i].charAt(0);

//         if (valor == 0) valor = 10;
//         let palo = baraja[i].charAt(1);

//         let print = '';
//         let color = '';
//         switch (palo) {
//             case 'T':
//                 print = iconoTreboles;
//                 color = 'carta-negra';
//                 break;
//             case 'D':
//                 print = iconoDiamantes;
//                 color = 'carta-roja';
//                 break;
//             case 'C':
//                 print = iconoCorazones;
//                 color = 'carta-roja';
//                 break;
//             case 'P':
//                 print = iconoPicas;
//                 color = 'carta-negra';
//                 break;
//             default:
//                 break;
//         }
        
//         contenedorBaraja.innerHTML +=

//             "<div id='" + baraja[i] + "' class='carta baraja'>"
//             + "<div class='carta-contenedor'>"
//             + "<div class='frontal " + color + "'>"
//             + "<div class='num top'>" + valor + "</div>"
//             + "<div class='palo'>" + print + "</div>"
//             + "<div class='num bot'>" + valor + "</div>"
//             + "</div>"

//             + "<div class='trasera'>"
//             + "<div class='palo'>" 
//             // + reves 
//             + "</div>"
//             + "</div>"

//             + "</div>"
//             + "</div>"

//         let cartaTop = document.querySelectorAll('.baraja');
//         cartaTop[cartaTop.length - 1].style.zIndex = i;
//     }

// }

// Baraja();

// let baraja = document.querySelectorAll('.baraja');
// let caraCartas = document.querySelectorAll('.baraja .carta-contenedor');
// let num = document.querySelectorAll('.baraja .num');
// let palos = document.querySelectorAll('.baraja .palo');
// let barajaTrasera = document.querySelectorAll('.trasera');

// function voltearBaraja() {
//     if (caraCartas[0].classList.contains('voltear')) {
//         for (let i = 0; i < caraCartas.length; i++) {
//             caraCartas[i].classList.remove('voltear');
//         }
//         caraCarta.style.hover  = " transform: rotateY(360deg)"
//     } else {
//         for (let i = 0; i < caraCartas.length; i++) {
//             caraCartas[i].classList.add('voltear');
//         }
//     }
// }
// function juntar() {
    
//     for (let i = 0; i < baraja.length; i++) {
//         baraja[i].style.marginLeft = '-65.85px';

//     }
// }


function mostrarCartas() {

    cartasc.innerHTML = '';
    cartasj.innerHTML = '';
    baraja.innerHTML = '';



    for (let i = 0; i < manocasa.length; i++) {

        cartasc.innerHTML += 
        "<div id='" + baraja[i] + "'class='carta-contenedor'>"
            + "<div  class='carta baraja'>"
            + "<div class='num top'>" + manocasa[i] + "</div>"
            + "<div class='palo'>" +  iconoPicas+ "</div>"
            + "<div class='num bot'>" + manocasa[i] + "</div>"
            + "</div>"
            
            + "<div class='trasera'>"
            + "<div class='palo'>" 
            + "</div>"
            + "</div>"

            + "</div>"
          
    }

    //ocultamos una de las cartas
    ultimaCarta = document.querySelectorAll('#cartas-casa .carta');
    ultimaCarta[ultimaCarta.length - 1].style.backgroundImage = "url('https://img.freepik.com/free-vector/neon-suit-poker-casino-brick-wall_47243-538.jpg?size=338&ext=jpg')";
    ultimaCarta[ultimaCarta.length - 1].style.color = 'transparent';

    for (let i = 0; i < manojugador.length; i++) {
        cartasj.innerHTML +=
            "<div id='" + baraja[i] + "'class='carta-contenedor'>"
            + "<div class='carta baraja'>"
            + "<div class='num top'>" + manojugador[i] + "</div>"
            + "<div class='palo'>" + iconoDiamantes + "</div>"
            + "<div class='num bot'>" + manojugador[i] + "</div>"
            + "</div>"
            + "<div class='trasera'>"
            + "<div class='palo'>" 
            + "</div>"
            + "</div>"

            + "</div>";
    }

}

//al tener los puntos ya determinamos necesitamos saber quien va ganando y si es necesario pedrir otra carta
//para esto creamos la funcion ganador


function ganador() {

    let fin = false;
    btnplantarse.disabled = false;
    btnjugar.disabled = false;
    btnreset.disabled = false;

    // primero se estipula si alguno se a pasado de 21  
    if (puntosJugador > 21) {
        console.log("El jugador se ha pasado de 21. Gana la casa");
        resultadoJuego.innerHTML = "El jugador se ha pasado de 21. Gana la casa";
        btnjugar.disabled = true;
        btnplantarse.disabled = true;

        // Si el jugador pierde, se le resta la apuesta de su saldo
        total = total - apuestaJ;
        totalDisplay.innerHTML = total;
        console.log(total);

        if ((total - apuestaJ <= 0)) {

            //usamos el setTimeout para que me permita ver las carta antes de que me salga la alerta
            setTimeout(() => {

                alerta.style.display = "block";
                total = 50;
                btnreset.disabled = true;

                // if (alerta === onclick()) {

                //     alerta.style.display = "none";
                // let resultado = window.confirm('¡Perdiste todo!, ¿Quieres volver a iniciar?');
                // if (resultado === true) {
                //     total = 50;
                //     reset();
                // }

            }, 1000);

        }
        fin = true;
        return;

    } else if (puntosCasa > 21) {
        console.log("La casa se ha pasado de 21. Gana el jugador");
        resultadoJuego.innerHTML = "La casa se ha pasado de 21. Gana el jugador";
        btnjugar.disabled = true;
        btnplantarse.disabled = true;
        //calcula la apuesta
        total = total + apuestaJ;
        totalDisplay.innerHTML = total;
        console.log(total);
        fin = true;
        return;
    }

    if (puntosJugador == 21) {
        if (puntosCasa == 21) {
            btnplantarse.disabled = true;
            resultadoJuego.innerHTML = "Hay empate";
            total = total + apuestaJ;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        } else {
            btnplantarse.disabled = true;
            btnjugar.disabled = true;
            resultadoJuego.innerHTML = "El jugador tiene un 21. Ganas el doble de tu apuesta!";
            total = total + apuestaJ * 2;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        }
        return;
    }
    if (puntosCasa == 21) {
        if (puntosJugador == 21) {
            resultadoJuego.innerHTML = "Hay empate";
            total = total + apuestaJ;
            console.log(total);
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        } else {
            btnplantarse.disabled = true;
            btnjugar.disabled = true;
            resultadoJuego.innerHTML = "La casa tiene 21. Pierdes tu apuesta";
            total = total - apuestaJ;
            console.log(total);
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
        }
        return;
    }

    // si ninguno se a pasado revisamos los puntos y si necesita otra carta
    if (puntosJugador > puntosCasa && !fin) {
        //si los puntos son mayores a los del contrincante pero es diferente de la variable fin(21) 
        //va ganando y juega el contrario       
        console.log("Va ganando el jugador");
        resultadoJuego.innerHTML = "Va ganando el jugador";
        console.log("");
        // jugar("casa");
        return;

    } else if (puntosCasa > puntosJugador && !fin) {
        console.log("Va ganando la casa");
        resultadoJuego.innerHTML = "Va ganando la casa";
        console.log("");
        // jugar("jugador");
        return;

    } else {
        console.log("Hay empate");
        console.log("");
        resultadoJuego.innerHTML = "Hay empate";
        // jugar("jugador");
        if (jugadorPlantado) {
            // total = total + apuestaJ;
            apuestaDisplay.innerHTML = total;
            totalDisplay.innerHTML = total;
            btnplantarse.disabled = true;
            btnjugar.disabled = true;
            console.log(total);
        }
        return;
    }

}

// creamos una funcion que nos permitira jugar,introducimos un switch que nos arrojara una carta adicional de forma aleatoria
// en este caso usamos el numero random del inicio en una funcion
let jugadorPlantado = false;
function plantarse() {

    jugadorPlantado = true;
    btnplantarse.disabled = true;
    btnjugar.disabled = true;

    if (puntosJugador > puntosCasa) {
        jugar("casa");

        timer = setTimeout(() => {
            plantarse();
        }, 1500);
    } else {
        clearTimeout(timer);
        timer = 0;

        ganador();
    }
    console.log(fin);

}

function reset() {

    puntosCasa = 0;
    manocasa = [];

    puntosJugador = 0;
    manojugador = [];


    cartasc.innerHTML = [];
    cartasj.innerHTML = [];
    marcadorc.innerHTML = [];
    marcadorJ.innerHTML = [];
    resultadoJuego.innerHTML = "Introduce tu apuesta";
    apuestaDisplay.innerHTML = "";
    totalDisplay.innerHTML = total;

    
    // repetimos el FOR para voverlos a habilitar
    for (let i = 0; i < btnapostar.length; i++) {
        btnapostar[i].disabled = false;

    }

}

// start();
let alertaBtn = document.querySelector('#alerta button');
alertaBtn.addEventListener('click', function() {
    alerta.style.display = 'none';
})