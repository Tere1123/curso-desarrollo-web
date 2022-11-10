// creamos un array(palabras) con las distintas palabras del juego
const palabras = [

    "perro",
    "conejo",
    "gato",
    "pollo",
    "langostino",
    "murcielago"

]

// imprimir la palabra
// Seguarda en el contenedor donde se va a mostrar
let displayPalabra = document.getElementById('palabra');

// se elige una palabra del array
// se escoje un numero del 0 al 5 por que solo tenemos 5 palabras
//el randon es igual al nuemro de opciones dentro del array
let random = Math.random();//0 - 1 incluyendo decimales
random = Math.random() * palabras.length;//0- a 6 incluyendo decimales
random = Math.floor(Math.random() * palabras.length);// del 0 -5 sin decimales(numeros enteros)


// esto permite que cada ves que se carga la pagina se selecciona un 
// array con el indice aleatorio
let palabra = palabras[random];

// imprimimos la palabra
// contamos la longitud de la palabra

let longitud = palabra.length;// este length nos indica la cantidad de los caracteres de cada parabra
// console.log(longitud);

// declaro una variable para imprimir la palabra
let texto = '';

for (let indice = 0; indice < longitud; indice++) {
 
     texto += "_";
    
}

// hasta aqui se impimen los guiones ocultando la plabara colocando texto

displayPalabra.innerHTML = texto;

// Botones
// se asignara un evento onclick a cada boton desde js
// asi nos ahorramos colocarlo en cada uno de ellos desde el HTML

// con clases:
// selecionamos todos los elementos que tengan una clase

// al guardar botones dentro de una clase, los devuelve en un array
const botones = document.getElementById('tablero').childNodes;

// vamos añadir un event listener a cada boton, esto es asignar un elemento html
// que ejecutara un bloque de codigo cuando el evento se cumpla

for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener("click", juego)
    
}
 
let aciertos = [];
// este let de acierto nos permite guardar la letra si esta, a conincido
// con la de la palabra, para despues ser imprimido en pantalla.

let contador = 0;

let vidas = 5;
//    

function juego() {
    console.log('has pulsado un boton');

    // tomamos el cotexto del boton don this
    // y guardamos la letra que contine el boton en una
    // variable
    let letra = this.innerHTML
    letra = letra.toLowerCase();

    let texto = "";

    //recorremos la palabra por cada caracter,
    //en busquda de coincidencias

    for (let i = 0; i < palabra.length; i++) {
        console.log(palabra[i]);
     // comprovamos si la letra esta 

        if (palabra[i] == letra) {
            console.log("hay una coincidencia");
            aciertos [i] = letra;
            contador ++;// cada que el jugador acierta aumenta el contador
        } else  if(!aciertos[i]){ // la exclamacion quiere de decir que si no
            // si la letra en el else se mostrara una linea
            aciertos [i] = "_";
        }

        console.log(texto);
        console.log(aciertos);
        
    }
  // el .join nos permite que la palabra se vea sin comas(c,o,n,e,j,o)
    texto = aciertos.join(" ")
    displayPalabra.innerHTML = texto;
    console.log(letra);

    ganar();
}

//creamos una funcion donde comprobemos que ganamos la partida
    function ganar() {
       //  una forma de hacerlo cuando se complete la palabra
        // if (contador == palabra.length ) {
        //     // setTimeout ( function () {
        //     // window.alert('has ganado');
        //     // location.reload();// da la opcion de aceptar y recargar la pagina.
        //     // }, 1000); 
            
        // }

//otra forma de hacerlo contando los guiones completados

let guiones = 0

 for (let i = 0; i < aciertos.length; i++) {
     

    if ( aciertos[i] =="_") {
        guiones++;
    
            }
        
    }
    
    if (guiones == 0) {
        setTimeout(function () {
         window.alert('has ganado');   
        location.reload()}, 1000);
       
     }

}



