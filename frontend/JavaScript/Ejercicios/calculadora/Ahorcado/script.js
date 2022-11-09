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
// se escoje un numero del 0 al 5
let random = Math.random();//0 - 1 incluyendo decimales
random = Math.random() * palabras.length;//0- a 6 incluyendo decimales
random = Math.floor(Math.random() * palabras.length);// del 0 -5 sin decimales(numeros enteros)

// esto permite que cada ves que se carga la pagina se selecciona un 
// array con el indice aleatorio
let palabra = palabras[random];

// imprimimos la palabra
// contamos la longitud de la palabra

let longitud = palabra.length;
// console.log(longitud);

// decharo una variable para imprimir la palabra
let texto = '';

for (let indice = 0; indice < longitud; indice++) {
 
     texto += "_";
    
}

// hasta aqui se impimen los guiones ocultando la plabara

displayPalabra.innerHTML = palabra;

// Botones
// se aisgnara en evento onclick a cada boton desde js
// asi nos ahorramos colocarlo en cada uno de ellos desde el HTML

// con clases:
// selecionamos todos los elementos que tengan una clase

// al guardar botones dentro de una clase, los devuelve en un array
const botones = document.getElementById('tablero').childNodes;

// vamos añadir un event listener a cada boton, esto es asignar un elemnto html
// que ejecutara un bloque de codigo cuando el evento se cumpla

for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener("click", test)
    
}
 
function test() {
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
            texto += letra;
        } else {
            // si la letra en el else se mostrara una linea
            texto  += "_";
        }
        
    }

    displayPalabra.innerHTML = texto;
    console.log(letra);
}



