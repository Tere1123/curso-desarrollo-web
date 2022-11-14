//escojemos el grupo de plabras para colocarlas dentro de un array
const palabras = [

    'pollo',
    'gato',
    'conejo',
    'perro',
    'caballo',
    'gallina'
]
//guardamos la plabra en el contenedor(esta aun no se muestra en pantalla)
let displayPalabra = document.getElementById('palabra')

//hacemos que de forma aleatoria se escoja una palabra del array para esto usamos 
// el random
let random = Math.random();
random = Math.random() * palabras.length; 
random = Math.floor(Math.random() * palabras.length);


let palabra = palabras[random];

let longitud = palabra.length;
console.log(longitud);

let texto = ''; // aqui estoy creando la variable de texto vacia con ''
// para despues darle el valor que se necesite

//despues de crear la variable texto vamos a crear un bucle (for) para que 
// la accion se repita tantas veces se actualice la pagina.
// para esto usamos el 'for'
for (let indice = 0; indice < longitud; indice++) {
//se crea la variable incice que despues sera [i] lo que nos
//indica que: si el inice  inicia en 0, este recorrera los 
//caracteres de la longitud de la palabra(indice < longitud) y 
// se detendra ahi. al detenerse continuara con el siguiente
// (indice++)

//cuando lo anterior se cumple el resultado sera mostrado en
//en este caso con la cantidad de espacios de cada palabra con 
//guiones
  texto += '_';
// siempre se coloca el + y despues el =, al lado del igual no puede quedar nada
}

console.log(texto);

displayPalabra.innerHTML = texto;
//esto nos permite mostrar los espacios de la palabra en pantalla sin
//que se vea el texto






